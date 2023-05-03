<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/frontend', [App\Http\Controllers\PagesController::class, 'frontend'])->name('frontend');
Route::get('/backend', [App\Http\Controllers\PagesController::class, 'backend'])->name('backend');
Route::get('/digitalmarket', [App\Http\Controllers\PagesController::class, 'digital'])->name('digitalmarket');
Route::get('/graphics', [App\Http\Controllers\PagesController::class, 'graphics'])->name('graphics');

Route::get('/aboutus', [App\Http\Controllers\PagesController::class, 'aboutus'])->name('aboutus');
Route::get('/faq', [App\Http\Controllers\PagesController::class, 'faq'])->name('faq');




Route::prefix('/admin')->group(function(){
    Route::get('/frontend', [App\Http\Controllers\AdminfrontendController::class, 'create'])->name('adminfrontend');
    Route::get('/frontend', [App\Http\Controllers\AdminfrontendController::class, 'index'])->name('adminfrontend');
    Route::post('/frontendposts', [App\Http\Controllers\AdminfrontendController::class, 'store'])->name('adminfrontendposts');
    Route::put('/frontendupdate/{id}', [App\Http\Controllers\AdminfrontendController::class, 'update'])->name('adminfrontendupdate');
    Route::delete('/frontendupdate/{id}', [App\Http\Controllers\AdminfrontendController::class, 'destroy'])->name('adminfrontenddelete');
    Route::get('/backend', [App\Http\Controllers\AdminBackendController::class, 'create'])->name('adminbackend');
    Route::post('/backendposts', [App\Http\Controllers\AdminBackendController::class, 'store'])->name('adminbackendposts');
    Route::get('/graphics', [App\Http\Controllers\AdminGraphicsController::class, 'create'])->name('admingraphics');
    Route::post('/graphicsposts', [App\Http\Controllers\AdminGraphicsController::class, 'store'])->name('admingraphicsposts');
});








