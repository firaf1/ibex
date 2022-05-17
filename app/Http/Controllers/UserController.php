<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
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
        //  'password' => 'required|min:4',
          

     ]);
    //   Check If ist Fail
     if ($validator->fails()) {
         $responseArr['message'] = $validator->errors();
         return response()->json($validator->errors(), 402);
     }
    // return $request->rows;
     $user = new User();
     
     $temp = substr($request->phone_number, 3);
        $newTemp = "0".$temp;
        $user->phone_number = $newTemp;
        $user->role ="User";
        $user->address = "new";
    
     $rand = rand(1000,9999);
     $user->password = Hash::make($rand);
     $ii = "Your IbexVlog Password : ".$rand;
      $response = Http::post('http://197.156.70.196:9090/api/send_sms', [
        'key' => '7031617af70cd9ece13918c235a5968c0a8a3f66',
        'text' => $ii,
        'to' => $request->phone_number,
         
    ]);
 DB::insert('insert into smsCount (msg) values (?)', ['Agent Registration']);
     if($user->save()){
      return response()->json(['message' => 'successfully registered'], 200);
     }


   }
public function delete_subscriber(Request $request)
{
   $validator = Validator::make($request->all(), [

      'phone_number' => 'required',
      

  ]);
   $temp = substr($request->phone_number, 3);
        $newTemp = "0".$temp;
        
  // Check If ist Fail
  if ($validator->fails()) {
      $responseArr['message'] = $validator->errors();
      return response()->json($validator->errors(), 402);
  }
  $user = User::where('phone_number',$newTemp)->first();
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
