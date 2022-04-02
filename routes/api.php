<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('all-user', function(){
    return User::all();
});


Route::post('add-user', [UserController::class, 'add_subscriber']);
Route::post('delete-user', [UserController::class, 'delete_subscriber']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('sms', function(){
    $response = Http::post('http://example.com/users', [
        'phone_number' => 'Steve',
        'role' => 'Network Administrator',
    ]);
});

Route::get('user-exchange', function(){
  
 $response = Http::get('http://127.0.0.1:8000/api/all-user');
   dd($response->json());


});

