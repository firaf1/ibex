<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRequest extends Component
{
public $password, $userName, $errorMessage;
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
            redirect(route('admin'));
        }
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
public function dehydrate() {
    $this->dispatchBrowserEvent('loginDehydrate', ['newName' => "Vlog is Successfully Blocked"]);
       }
    public function render()
    {
        return view('livewire.login-request');
    }
}
