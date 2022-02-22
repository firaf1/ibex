<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
class ProfileIndex extends Component
{
    use WithFileUploads;


public $full_name, $email, $phone_number, $address,$account_number,$bank,  $picture, $password,$oldPasswordMessage, $confirmPasswordMessage, $password_confirmation, $newPassword;

protected function rules()
{
    return [
     
  
    'full_name' => 'required',
    'email' => 'required|unique:users,email,'.Auth::user()->id,
    'address' => 'required',
    'bank' => 'required',
    'account_number' => 'required',
    'phone_number' => 'required|unique:users,phone_number,'.Auth::user()->id,
];
}
    public function update()
    {

        if(Auth::user()->role== "Agent")
       $this->validate();
       if($this->full_name == null || $this->phone_number == null || $this->email == null || $this->address == null){
        return $this->dispatchBrowserEvent('delete_toast', ['newName' => "Please Fill All Your Profile Field"]);
       }
      
         $user = User::find(Auth::user()->id);
       
         $user->full_name = $this->full_name;
        $user->bank_type = $this->bank;
        $user->account_type = $this->account_number;
         $user->phone_number = $this->phone_number;
         $user->email = $this->email;
         $user->address = $this->address;
         if($this->picture != null){
            $tempImage = 'ibex-user-' . time() . '.' .  $this->picture->extension();
            $this->picture->storeAs('User_Profile/', $tempImage, 'public');
            $user->photo = "storage/User_Profile/" . $tempImage;
         }
if($user->save()){
    
    $this->dispatchBrowserEvent('successfully_added', ['newName' => "Successfully Updated!!!!!!"]);
    $this->mount();
    // return redirect('user-profile');
}


    }
public function password_update(){

    $user = User::find(Auth::user()->id);
    if(Hash::check($this->password, $user->password)){
        dd('ddd');
        if($this->password_confirmation == $this->newPassword){
           $user->password = Hash::make($this->newPassword);
           $user->save();
           $this->reset();

           $this->dispatchBrowserEvent('successfully_added', ['newName' => "Password Successfully Update"]);
           Auth::login($user);
           
          }
          else{
            $this->confirmPasswordMessage = "The password does not match.";
          }
    }
    else{
        $this->oldPasswordMessage = "Wrong Password";
    }

   
}
public function mount(){
     
    $user = User::find(Auth::user()->id);
    $this->full_name = $user->full_name;
    $this->email = $user->email;
    $this->phone_number = $user->phone_number;
    $this->address = $user->address;
    $this->account_number = $user->account_type;
    $this->bank = $user->bank_type;
 

}


    public function render()
    {
        return view('livewire.profile-index');
    }
}
