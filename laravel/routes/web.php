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
Route::get('/game',function (){
    echo "route demo";
});
Route::group(['prefix'=>'admin'],function(){
    Route::get("/add",[\App\Http\Controllers\TestController::class,'add']);
});

Route::get('add',function (){
    echo "w gan ni ning";
});
Route::get('admin/home',[HomeController::class,'info']);
