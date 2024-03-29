<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function index(Request $request)
    {
//        $this->guard('web')->logout();

        Auth::guard('web')->logout();


        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->back();
    }
}
