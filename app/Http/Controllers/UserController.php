<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function createUser()
    {
        $user = User::create([
            'name' => 'Khanh Noi',
            'email' => 'nqkhanh1998@example.com',
            'password' => bcrypt('123456'), // Always encrypt passwords
        ]);

        return response()->json($user);
    }
}
