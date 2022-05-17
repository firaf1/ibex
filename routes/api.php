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
Route::get('mm', function(){
    $users = User::where('phone_number', 'like', '%'.'01'.'%')->get();
    $count = 0;
    foreach($users as $user){
        $temp = substr($user->phone_number, 2);
        $newTemp = "0".$temp;
        $user->phone_number = $newTemp;
        $count++;
        $exit = User::where('phone_number', $newTemp)->count();
        
        if($exit == 0){
            $user->save();
        }

        //     $newUser = new User();
           
        //     $newUser->phone_number = "0".$temp;
        //     $newUser->password = Hash::make($user->pass);
        //     $newUser->role = "User";
        //     $newUser->save();
        //    
        // }
    }
});
Route::get('all-user', function(){
    return User::all();
});
Route::post('sms', function(Request $request){
   
    $response = Http::post('http://197.156.70.196:9090/api/send_sms', [
        'key' => '7031617af70cd9ece13918c235a5968c0a8a3f66',
        'text' => $request->message,
        'to' => $request->to,
         
    ]);
    dd($response);
});


Route::get('sms11', function(){
     
    $response = Http::post('http://197.156.70.196:9090/api/send_sms', [
        'key' => '7031617af70cd9ece13918c235a5968c0a8a3f66',
        'text' => "hello retaaaaaa",
        'to' => "0924570278",
         
    ]);
    dd($response);
});







Route::post('add-user', [UserController::class, 'add_subscriber']);
Route::post('delete-user', [UserController::class, 'delete_subscriber']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('user-exchange', function(){
  
 $response = Http::get('http://127.0.0.1:8000/api/all-user');
   dd($response->json());


});

