<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   
   public function index()
   {
      return view('admin.user');
   }
   public function add_subscriber(Request $request)
   {
      $validator = Validator::make($request->all(), [

         'phone_number' => 'required|unique:users,phone_number',
         'password' => 'required|min:6',

     ]);
     // Check If ist Fail
     if ($validator->fails()) {
         $responseArr['message'] = $validator->errors();
         return response()->json($validator->errors(), 401);
     }
     $user = new User();
     $user->phone_number = $request->phone_number;
     $user->password = Hash::make($request->password);
     $user->role= "User";
     if($user->save()){
      return response()->json(['message' => 'successfully registered'], 200);
     }


   }
public function delete_subscriber(Request $request)
{
   $validator = Validator::make($request->all(), [

      'phone_number' => 'required',
      

  ]);
  // Check If ist Fail
  if ($validator->fails()) {
      $responseArr['message'] = $validator->errors();
      return response()->json($validator->errors(), 401);
  }
  $user = User::where('phone_number', $request->phone_number)->first();
  if($user){
     
  if($user->delete()){
   return response()->json(['message' => 'successfully deleted!'], 200);
  }
   
   
  }
  else{
   return response()->json(['message' => 'Phone number is not found'], 404);
  }


}

public function profile()
{
 return view('admin.profile');
}
   public function vlog()
   {
      return view('admin.vlog');
   }
   public function blog()
   {
     return view('admin.blog');
   }
}
