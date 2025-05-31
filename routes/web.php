<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Add_Speaker;
use App\Models\PhotoGallery;
use App\Models\User_Regsitration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use LaravelQRCode\Facades\QRCode;

Route::get('/', function () {
    $speaker = Add_Speaker::all();
    $gallerys = PhotoGallery::all();
    return view('index', compact('speaker', 'gallerys'));
});

Route::get('/mission', function(){
    return view('mission');
})->name('mission');

Route::get('/corevalue', function(){
    return view('corevalue');
})->name('corevalue');

Route::get('/tickets',  function(){
    return view('ticket');
})->name('tickets');

Route::get('/sponsors', function(){
    return view('sponsors');
})->name('sponsors');

Route::get('/programmes', function(){
    return view('programmes');
})->name('programmes');

Route::get('/speakers', function(){
    return view('speakers');
})->name('speakers');

Route::get('/vision', function(){
    return view('vision');
})->name('vision');

Route::get('/history', function(){
    return view('history');
})->name('history');

Route::get('/officials', function(){
    return view('officials');
})->name('officials');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/login1', function(){
    return view('auth.login1');
})->name('login1');

Route::get('/gallery', function(){
    $gallerys = PhotoGallery::all();
    return view('gallery', compact('gallerys'));
})->name('gallery');

Route::get('/yec2015', function(){
    return view('yec2015');
})->name('yec2015');

Route::get('yec2016', function(){
    return view('yec2016');
})->name('yec2016');

Route::get('yec2017', function(){
    return view('yec2017');
})->name('yec2017');

Route::get('gwc2018', function(){
    return view('gwc2018');
})->name('gwc2018');

Route::get('gwc20199', function(){
    return view('gwc2019');
})->name('gwc20199');

Route::get('gwc2020', function(){
    return view('gwc2020');
})->name('gwc2020');

Route::get('gwc20222', function(){
    return view('gwc2022');
})->name('gwc20222');

Route::get('ec2023', function(){
    return view('ec2023');
})->name('ec2023');


Auth::routes(['register' => false]);

Route::post('/user_reg', [AdminController::class, 'create'])->name('user_reg');
Route::get('/payment_method', function(){
    return view('payment_method');
})->name('payment_method');

Route::get('/registration/success', function() {
    return view('registration_success');
})->name('registration.success');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([AdminMiddleware::class])->group(function(){
  Route::get('/users', [AdminController::class, 'users'])->name('users');
  Route::get('/users/{user}/approve', [AdminController::class, 'approve'])->name('users.approve');
  Route::get('/users/{user}/verify', [AdminController::class, 'verify'])->name('users.verify');
  Route::get('/delete_user/{id}', [AdminController::class, 'delete_user'])->name('delete_user');
  Route::get('/approved_user', [AdminController::class, 'approved_user'])->name('approved_user');
  Route::get('/regular_user', [AdminController::class, 'regular_user'])->name('regular_user');
  Route::get('/special_user', [AdminController::class, 'special_user'])->name('special_user');
  Route::get('/vip_user', [AdminController::class, 'vip_user'])->name('vip_user');
  Route::get('/add_speaker', [AdminController::class, 'add_speaker'])->name('add_speaker');
  Route::post('/create_speaker', [AdminController::class, 'create_speaker'])->name('create_speaker');
  Route::get('/manage_speaker', [AdminController::class, 'manage_speaker'])->name('manage_speaker');
  Route::get('/delete_speaker/{id}', [AdminController::class, 'delete_speaker'])->name('delete_speaker');
  Route::get('/photo_gallery', [AdminController::class, 'photo_gallery'])->name('photo_gallery');
  Route::post('/add_photo', [AdminController::class, 'add_photo'])->name('add_photo');
  Route::get('/manage_photo', [AdminController::class, 'manage_photo'])->name('manage_photo');
  Route::get('/delete_photo/{id}', [AdminController::class, 'delete_photo'])->name('delete_photo');
});
// Route::get('qr-code', function () {

// });
