<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
class LoginRequest extends Component
{
public $password, $userName, $errorMessage, $forgerPhoneNumber;
protected $rules = [
  
    'password' => 'required',
    'userName' => 'required'
];
public function login(){
    
    $this->validate();
    $user = User::where('phone_number', $this->userName)->first();    

    if($user){
    // $password = Hash::make($this->password); 
    $DB_password = $user->password;
    if(Hash::check($this->password, $DB_password)){
         
        Auth::login($user);
        if(Auth::user()->role == "Agent"){
            redirect(route('agetIndex'));
        } else
        redirect(route('admin'));
    }else{
        //  dd("ddddd");
        $this->errorMessage = "These credentials do not match our records.";
        $this->dispatchBrowserEvent('loginDehydrate', ['newName' => "Vlog is Successfully Blocked"]);
    }
}
else {
    $this->errorMessage = "These credentials do not match our records.";
    $this->dispatchBrowserEvent('loginDehydrate', ['newName' => "Vlog is Successfully Blocked"]);
}
 
}
public function ForgetPassword(){
    $user = User::where('phone_number', $this->forgerPhoneNumber)->first();
    
    if($user){
        
     $rand = rand(1000,9999);
     $user->password = Hash::make($rand);
     $ii = "Your New IbexVlog Password : ".$rand;
      $response = Http::post('http://197.156.70.196:9090/api/send_sms', [
        'key' => '7031617af70cd9ece13918c235a5968c0a8a3f66',
        'text' => $ii,
        'to' => $this->forgerPhoneNumber,
         
    ]);
    $user->save();
 
         DB::insert('insert into smsCount (msg) values (?)', ['forgate password']);
    }
    else{
        dd('hell');
    }

}
public function dehydrate() {
    $this->dispatchBrowserEvent('loginDehydrate', ['newName' => "Vlog is Successfully Blocked"]);
       }
    public function render()
    {
        return view('livewire.login-request');
    }
}
