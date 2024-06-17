<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TestController extends Controller
{


    public function __construct(Type $var = null)
    {
        // $this->var = $var;
    }

    // testing


    public function index(): View
    {
        if (isset($_GET['test'])) {
            echo $_GET['test'];
        }

        return view('test.form', [
            'test' => 'TestController',
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
            'type' => 'test-db',
        ]);

        // return view('test.form', [
        //     'type' =>'test-db',
        // ]);
    }

    public function add()
    {
        return view('test.add', [
            'type' => 'test-db',
        ]);
        return "addDbForm";
    }

    public function handleAdd(Request $request)
    {
        return $request;
        return "addDb";
    }


    public function get($id)
    {
        return "get => " . $id;
    }

    public function handleUpdate($id)
    {
        return "handleUpdate => " . $id;
    }

    public function handleDelete($id)
    {
        return "handleDelete => " . $id;
    }
    public function handleFile(Request $request)
    {
        // dd($request->file('photo'));
        // dd($request);

        // $file = $request->file('photo');
        // // $path = $request->photo->store('images');
        // $path = $request->photo->storeAs('images', 'filename.jpg');
        // dd($path);
        // // return 'file';

        // Ensure the request has a file and handle it
        //  if ($request->hasFile('photo')) {
        //     $file = $request->file('photo');
        //     dd($file);
        // } else {
        //     return 'No file found';
        // }

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('images');
            // Log::info('File stored at: ' . $path);
            return "File stored at: " . $path;
        } else {
            return 'No file found';
        }
    }

    public function download() {
        // return response()->download($pathToFile);
        // return '';

        return response()->streamDownload(function () {
            echo GitHub::api('repo')
                        ->contents()
                        ->readme('laravel', 'laravel')['contents'];
        }, 'laravel-readme.md');
    }
}
