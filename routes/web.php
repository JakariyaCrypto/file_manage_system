<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('create-foler',[App\Http\Controllers\backend\admin\FolderController::class,'index'])->name('folder.index');

Route::post('filepond/api', [App\Http\Controllers\backend\admin\FolderController::class,'upload'])->name('filepond.upload');
