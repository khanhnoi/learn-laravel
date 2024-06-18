<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

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
            return "ok";
        } else {
            return redirect()->route('admin.login')
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }
    }
}
