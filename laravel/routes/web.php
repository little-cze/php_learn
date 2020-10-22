<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});
Route::group(['prefix'=>'admin'],function(){
    Route::get("/add",[\App\Http\Controllers\TestController::class,'add']);
    Route::get("/del",[\App\Http\Controllers\TestController::class,'del']);
    Route::get("/update",[\App\Http\Controllers\TestController::class,'update']);
    Route::get("/select",[\App\Http\Controllers\TestController::class,'select']);
});

Route::get('admin/home',[HomeController::class,'info']);

//基本路由
Route::get('foo',function (){
    return 'hello,world';
});

//默认路由文件 routes/api.php中的路由都是无状态的。并且被分配了api中间组件

//可用的路由方法 => 使用match方法注册一个可响应多个HTTP请求的路由。也可以使用any方法注册一个实现响应所有HTTP请求的路由
Route::match(['get','post'],'match',function (){
    echo "这是一个使用了match方法响应多个请求的路由";
});

Route::any('any',function (){
    echo "这是一个使用了any响应所有请求的路由";
});

Route::get('home',function (){
    return view('home');
});

