<?php

namespace App\Http\Controllers;

use App\Models\User_Regsitration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $member = User_Regsitration::count();
        $approve = User_Regsitration::where('payment_status', 'Approved')->get()->count();
        $regular = User_Regsitration::where('subscription_ticket', 'Regular Ticket (₦7,500)')->get()->count();
        $special = User_Regsitration::where('subscription_ticket', 'Special Ticket (₦15,000)')->get()->count();
        $vip = User_Regsitration::where('subscription_ticket', 'VIP Ticket (₦50,000)')->get()->count();
        return view('admin.dashboard', compact('member', 'approve', 'regular', 'special', 'vip'));
    }
}
