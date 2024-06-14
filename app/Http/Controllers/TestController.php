<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TestController extends Controller
{


    public function __construct(Type $var = null) {
        // $this->var = $var;
    }

    // testing


    public function index(): View
    {
        return view('test.form', [
            'test' =>'TestController',
        ]);
    }

    public function getId($id): View
    {

        dd($id);
        // return view('test.form', [
        //     'test' =>'TestController',
        // ]);
    }
    public function show(string $id): View
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
    }

    public function all(): View
    {

        return view('test.all', [
            'type' =>'test-db',
        ]);

        // return view('test.form', [
        //     'type' =>'test-db',
        // ]);
    }

    public function add () {
        return view('test.add', [
            'type' =>'test-db',
        ]);
        return "addDbForm";
    }

    public function handleAdd(Request $request) {
        return $request;
        return "addDb";
    }


    public function get ($id) {
        return "get => ". $id;
    }

    public function handleUpdate ($id) {
        return "handleUpdate => ". $id;
    }

    public function handleDelete ($id) {
        return "handleDelete => ". $id;
    }
}
