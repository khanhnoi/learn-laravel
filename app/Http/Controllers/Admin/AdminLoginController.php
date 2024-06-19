<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    //
    public function login()
    {
        return view('shop.admin.login');
    }
    public function authenticate(Request $request)
    {

        // https://laravel.com/docs/11.x/validation#manually-creating-validators
        $validator = Validator::make($request->all(), [
            // 'title' => 'required|unique:posts|max:255',
            // 'body' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect('post/create')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        if ($validator->passes()) {

            $email = $request->email;
            $password = $request->password;

            if (
                Auth::guard('admin')
                    ->attempt(['email' => $email, 'password' => $password], $request->get('remember'))
            ) {
                $admin = Auth::guard('admin')->user();

                if ($admin->role == 2) {
                    return redirect()->route('admin.home');
                } else {

                    $admin = Auth::guard('admin')->logout();
                    return redirect()->route('admin.login')
                        ->withErrors(['errorAuth' => 'not admin']);
                }


            } else {
                return redirect()->route('admin.login')
                    // ->with('error', 'email or pass incorrect');
                    ->withErrors(['errorAuth' => 'email or pass incorrect']);
            }
            // return "ok";
        } else {
            // return 'ko ok';
            return redirect()->route('admin.login')
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }
    }

  
}
