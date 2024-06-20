<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function home()
    {
        $admin = Auth::guard('admin')->user();
        // return 'home';
        // return 'welcome' . $admin->name . '<a href="' . route('admin.logout') . '">logout</a>';
        return view('shop.admin.dashboard');
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
