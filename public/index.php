<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

// Hiểu một cách đơn giản, Autoload sẽ thay thế các lệnh require, include.
// Chỉ cần trong các file có tên Class trùng với tên file và có namespace theo quy tắc, 
// hệ thống sẽ tự động load các file đó mà không cần phải sử dụng các lệnh require
//  hoặc include

require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/


// Trong file bootstrap/app.php sẽ thực hiện các nhiệm vụ sau:

// Tạo ứng dụng
// Đăng ký các interface cần thiết
// Trả về đối tượng ứng dụng ($app)


$app = require_once __DIR__ . '/../bootstrap/app.php';


// Hệ thống sẽ nhận đối tượng $app trả về từ bước 1, sau đó thực hiện 2 công việc:

// Xử lý Request
// Trả về Response

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();


// Notes: https://hoangan.unicode.vn/phan-tich-luong-request-trong-laravel.html

$kernel->terminate($request, $response);
