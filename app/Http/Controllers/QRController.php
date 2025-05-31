<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class QRController extends Controller
{
    public function verify($id)
    {
        $user = User::find($id);

        if ($user && $user->is_approved) {
            return view('verified', ['user' => $user]);
        }

        return view('not_verified');
    }
}
