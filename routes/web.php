<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});

Route::get('/test', function () {
    // return view('welcome');
    return view('test');
});

Route::get('/users', function () {
    $users = User::all();


    dd($users);

    return $users->toArray();
    // return view('welcome');
    // return view('test');
});

Route::get('/user', function () {
    $user = new User();

    dd($user);
    // return $users->toArray();

});



Route::get('/product', function () {
    return view('product');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/test-form', function () {
    return view('test.form'); //->name('test.form');
});

Route::get('/test-form-name', function () {
    return view('test.form');
})->name('test.form');

Route::post('/test-by-form', function () {
    return 'post';
});

Route::patch('/test-by-form', function () {
    return 'patch';
});


Route::put('/test-by-form', function () {
    return 'put';
});

Route::delete('test-by-form', function () {
    return 'delete';
});

Route::match(['get', 'post', 'delete'], 'test-by-form-match', function (Request $request) {
    // Retrieve the intended method from the request
    // $method = $request->input('_method') ?: $request->method();
    $_methodInput = $request->input('_method');

    $method = $request->method();
    // For debugging purposes
    $method2 = $request->getMethod(); // This should show the method as determined by Laravel
    $method3 = $_SERVER['REQUEST_METHOD']; // This will always be POST in this case due to form submission

    return "_methodInput: $_methodInput ==> Method 1: $method, Method 2: $method2, Method 3: $method3";

    // return $method;
    // return $method2;
    // return $method3;
    // return $request->method();
});

Route::any('test-by-form-any', function (Request $request) {
    // $request2 = new Request();
    $request2 = $request;
    $_methodInput = $request2->input('_method');

    $method = $request2->method();
    // For debugging purposes
    $method2 = $request2->getMethod(); // This should show the method as determined by Laravel
    $method3 = $_SERVER['REQUEST_METHOD']; // This will always be POST in this case due to form submission

    return "_methodInput: $_methodInput ==> method(): $method, getMethod(): $method2, REQUEST_METHOD: $method3";
});


Route::redirect('/test-redirect', 'test-form', 301);
Route::redirect('/test-redirect-2', 'https://www.google.com/', 301);
Route::redirect('/test-redirect-3', 'https://www.google.com/', 404);


Route::redirect('/test-group', 'prefix/test-group');
Route::redirect('/test-group-2', 'prefix/prefix-2/test-group');

Route::view('test-view', 'test.form');

Route::prefix('prefix')->group(function () {

    Route::get('/test-group', function (Request $request) {
        $getBasePath = $request->getBasePath();
        $getBaseUrl = $request->getBaseUrl();
        // return 
        dd($request);
        return "TEST GROUP ==> getBasePath : $getBasePath ; getBaseUrl : $getBaseUrl";
    });

    Route::prefix('prefix-2')->group(function () {
        Route::get('/test-group', function (Request $request) {
            $getBasePath = $request->getBasePath();
            $getBaseUrl = $request->getBaseUrl();
            // return 
            dd($request);
        });
    });

});


Route::get('test-id/{id}', function ($id, Request $request) {
    dd($id);
    // dd($request);
    // return $id;
    // return $request;
})->name('test.id');

Route::get('test-id-null/{id?}', function ($id = null, Request $request) {
    dd($id);
    // dd($request);
    // return $id;
    // return $request;
});


Route::get('test-slug/{slug}-{id}', function ($slug, $id, Request $request) {
    // dd($slug,$id);
    return "slug : " . $slug . ' ; id :' . $id;
    // dd($request);
    // return $request;
});

Route::get('test-slug-validate/{slug}-{id}', function ($slug, $id, Request $request) {
    // dd($slug,$id);
    return "slug : " . $slug . ' ; id :' . $id;
    // dd($request);
    // return $request;
})->where([
            'slug' => '.+' ?: '[a-z]+',
            'id' => '[0-9]+'
        ]);

// Route::middleware(['auth', 'second'])->group(function () {

// });

Route::prefix('test-middle')->middleware('testMiddleware') ->group(function () {

    Route::get('test', function () {
        return 'test middle';
    });
    
});

// ->middleware(EnsureTokenIsValid::class)


Route::get('/test-form-controller', [TestController::class, 'index']);