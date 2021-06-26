<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Content\ContentController;
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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'],function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'user'], function (){
        Route::get('/', [UserController::class,'profile'])->name('profile');
        Route::get('/list', [UserController::class,'findAll'])->name('findAll');
    });

    Route::group(['prefix' => 'content'], function (){
        Route::group(['as' => 'content'], function (){
            Route::get('/',  [ContentController::class,'index'])->name('.index');
            Route::post('/insert', [ContentController::class,'insert'])->name('.create');
            Route::get('/list', [ContentController::class,'show'])->name('.show');
        });
    });

});
