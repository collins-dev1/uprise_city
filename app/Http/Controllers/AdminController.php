<?php

namespace App\Http\Controllers;

use App\Mail\UpriseCityMail;
use App\Models\Add_Speaker;
use App\Models\PhotoGallery;
use App\Models\User;
use App\Models\User_Regsitration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use LaravelQRCode\Facades\QRCode;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function create(Request $request)
    {
        $reg = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:user__regsitrations,email',
            'phone_number' => 'required|string|max:20',
            'state' => 'required|string|max:100',
            'job_title' => 'required|string|max:100',
            'company_name' => 'required|string|max:255',
            'subscription_ticket' => 'required|string|max:100',
        ]);

        User_Regsitration::create($reg);

        // Store the payment URL in session
        session(['payment_url' => route('payment_method')]);

        // Show success message
        Alert::html(
            '<h3 style="color:black;">Registration Successful!</h3>',
            '<p style="color:black;">You have successfully completed your registration. Please make your payment for Approval. Thanks!!!</p>',
            'success'
        )->persistent();

        // Redirect to an intermediate page that will handle the new tab opening
        return redirect()->route('registration.success');
    }

    // All Users
    public function users(){
        $members = User_Regsitration::all();
        return view('admin.users', compact('members'));
    }

    public function approve(User_Regsitration $user) {
    // Ensure directory exists
    if (!file_exists(public_path('invites'))) {
        mkdir(public_path('invites'), 0755, true);
    }

    $filename = "invites/{$user->email}{$user->id}.png";
    $path = public_path($filename);

    // Generate QR code
    QRCode::text("https://www.uprisecity.com/users/{$user->id}/verify")
        ->setOutfile($path)
        ->png();

    $user->payment_status = 'Approved';
    $user->qrcode = $filename;
    $user->save();

    // Pass both user and QR code path to mail
    Mail::to($user->email)->send(new UpriseCityMail($user, $path));

    Alert::html(
        '<h3 style="color:black;">Member Approved Successfully!</h3>',
        '<p style="color:black;">You have successfully approved this member.</p>
        <p style="color:black;">A Scan code will be sent to the user Email</p>',
        'success'
    )->persistent();

    return redirect()->back();
}
    public function verify(User_Regsitration $user) {
        $attended = '';
      if ($user->attended != true) {
         $user->attended = true;
       $user->save();
      }
      else {
        $attended = "Already In the Conference";
      }
       return view('verify', compact('user', 'attended'));
    }


    public function delete_user($id){
        $member = User_Regsitration::find($id);
        $member->delete();
        Alert::html(
            '<h3 style="color:black;">Member Deleted Successfully!</h3>',
            '<p style="color:black;">You have successfully deleted this member from the Conference.</p>',
            'success'
        )->persistent();
        return redirect()->back();
    }

    // Speakers
    public function add_speaker(){
        return view('admin.add_speaker');
    }

    public function create_speaker(Request $request){
        $speaker = $request->validate([
        'speaker_name' => 'required|string',
        'speaker_description1' => 'required|string',
        'speaker_description2' => 'required|string',
        'speaker_description3' => 'nullable|string',  // optional
        'speaker_description4' => 'nullable|string',   // optional
        'speaker_photo' => 'required|file',
      ]);
      if (isset($speaker['speaker_photo']) && $speaker['speaker_photo'] instanceof \Illuminate\Http\UploadedFile) {
            // Validate that it's an image
            if (!$speaker['speaker_photo']->isValid() || !in_array($speaker['speaker_photo']->getMimeType(), ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'])) {
                Alert::html(
    '<h3 style="color:black;">Error Occurred!</h3>',
    '<p style="color:black;">Something went wrong with your Image. Please check your image.</p>',
    'error'
)->persistent(true);
                return redirect()->back();
            }

            // Upload file to public/banner_settings
            $path = $speaker['speaker_photo']->store('speaker_pictures', 'public');
            $speaker['speaker_photo'] = asset("storage/{$path}"); // Store the URL instead of file object
        }
        Add_Speaker::create($speaker);
        Alert::html(
            '<h3 style="color:black;">Speaker Created Successfully!</h3>',
            '<p style="color:black;">You have successfully created your speaker.</p>',
            'success'
        )->persistent();
        return redirect()->back();
    }

    public function manage_speaker(){
        $speakers = Add_Speaker::all();
        return view('admin.manage_speakers', compact('speakers'));
    }

    // Gallery Photo

    public function photo_gallery(){
        return view('admin.add_photogallery');
    }

    public function add_photo(Request $request){
        $gallery=$request->validate([
            'photo' => 'required|file',
        ]);
         if (isset($gallery['photo']) && $gallery['photo'] instanceof \Illuminate\Http\UploadedFile) {
            // Validate that it's an image
            if (!$gallery['photo']->isValid() || !in_array($gallery['photo']->getMimeType(), ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'])) {
                Alert::html(
    '<h3 style="color:black;">Error Occurred!</h3>',
    '<p style="color:black;">Something went wrong with your Image. Please check your image.</p>',
    'error'
)->persistent(true);
                return redirect()->back();
            }

            // Upload file to public/banner_settings
            $path = $gallery['photo']->store('gallery_pictures', 'public');
            $gallery['photo'] = asset("storage/{$path}"); // Store the URL instead of file object
        }
        PhotoGallery::create($gallery);
        Alert::html(
            '<h3 style="color:black;">Photo Sent Successfully!</h3>',
            '<p style="color:black;">You have successfully sent photo to your photo gallery.</p>',
            'success'
        )->persistent();
        return redirect()->back();
    }

    public function manage_photo(){
        $gallerys = PhotoGallery::all();
        return view('admin.manage_photogallery', compact('gallerys'));
    }

    public function delete_photo($id){
        $gallery = PhotoGallery::find($id);
        $gallery->delete();
        Alert::html(
            '<h3 style="color:black;">Photo Deleted Successfully!</h3>',
            '<p style="color:black;">You have successfully deleted the photo from photo gallery.</p>',
            'success'
        )->persistent();
        return redirect()->back();
    }

    public function approved_user(){
        $members = User_Regsitration::where('payment_status', 'Approved')->get();
        return view('admin.approved_user', compact('members'));
    }

    public function regular_user(){
        $members = User_Regsitration::where('subscription_ticket', 'Regular Ticket (₦7,500)')->get();
        return view('admin.regular_ticket', compact('members'));
    }

    public function special_user(){
        $members = User_Regsitration::where('subscription_ticket', 'Special Ticket (₦15,000)')->get();
        return view('admin.special_ticket', compact('members'));
    }

    public function vip_user(){
        $members = User_Regsitration::where('subscription_ticket', 'VIP Ticket (₦50,000)')->get();
        return view('admin.vip_ticket', compact('members'));
    }
}


