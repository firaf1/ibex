<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\vlogController;
use App\Http\Controllers\CategoryController;
 

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
Route::middleware(['auth'])->group(function () {
    Route::middleware(['lock'])->group(function () {
    Route::get('admin', function(){
        return view('admin.index');
    })->name('admin');
    
    Route::get('Add-Vlog',[vlogController::class, 'index'])->name('addVlog');
    Route::get('edit-vlog/{id}',[vlogController::class, 'edit']);
    
    Route::get('blog', [UserController::class, 'blog'])->name('blog');
    Route::get('Add-Blog',[BlogController::class, 'index'])->name('addblog');
    Route::get('edit-blog/{id}',[BlogController::class, 'edit']);
    Route::post('update-blog/{id}',[BlogController::class, 'update'])->name('update-blog');
    Route::post('store-blog',[BlogController::class, 'store'])->name('store-blog');
    
    
    Route::get('Language',  [CategoryController::class, 'language'])->name('language');
    
    Route::post('update-vlog/{id}',[vlogController::class, 'update'])->name('update-name');
    Route::post('store-vlog',[vlogController::class, 'store'])->name('store-vlog');
    Route::get('user', [UserController::class, 'index']);
    Route::get('category',  [CategoryController::class, 'index']);
    Route::get('vlog', [UserController::class, 'vlog'])->name('vlog');
    
    Route::post('ckeditor/image_upload',  [vlogController::class, 'upload'])->name('upload');
    
    
    
    Route::get('user-profile', [UserController::class, 'profile'])->name('profile');
    



  
Route::get('logout', function(){
    Auth::logout();
    return redirect('/');
})->name('user-logout');
});
Route::get('locke-screen', function(){
    $user = User::find(Auth::user()->id);
    $user->isLock = 1;
    $user->save();
    return view('lockScreen');
})->name('lockScreen');
});

Route::get('home', [HomeController::class, 'index'])->name('home');






Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
