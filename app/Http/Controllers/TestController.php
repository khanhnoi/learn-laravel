<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TestController extends Controller
{
    public function index(): View
    {
        return view('test.form', [
            'test' =>'xxx',
        ]);
    }
    public function show(string $id): View
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
    }
}
