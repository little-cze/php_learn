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

    $date = date('Y-m-d H:i:s',time());
    $day = "日";
    $time = strtotime('+1 year');
    $list = [
        '1'=>'1',
        '2'=>'2',
        '3'=>'3',
    ];
    return view('welcome',compact('date','day','time','list'));
});
Route::group(['prefix'=>'admin'],function(){
    Route::get("/add",[\App\Http\Controllers\TestController::class,'add']);
    Route::get("/del",[\App\Http\Controllers\TestController::class,'del']);
    Route::get("/update",[\App\Http\Controllers\TestController::class,'update']);
    Route::get("/select",[\App\Http\Controllers\TestController::class,'select']);
    Route::post("/test2",[\App\Http\Controllers\TestController::class,'test2']) ->name('testPage');
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

//模型的增删改查

Route::get('home/add',[\App\Http\Controllers\ModelController::class,'add']);
Route::any('home/test',[\App\Http\Controllers\ModelController::class,'test']);
Route::get('home/del',[\App\Http\Controllers\ModelController::class,'del']);
Route::get('home/update',[\App\Http\Controllers\ModelController::class,'update']);
Route::get('home/select',[\App\Http\Controllers\ModelController::class,'select']);

//自动验证。
Route::any('home/demo',[\App\Http\Controllers\ModelController::class,'demo']);
