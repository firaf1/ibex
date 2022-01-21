<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AddStaffForm extends Component
{

    use WithFileUploads;
    public $name, $email, $isUpload = false,  $password, $password_confirmation,
     $phoneNumber,$photo, $cotactName, $contactPhone, $role;

    // $this->validate($request, [
    //     'password' => 'min:6',
    //     'password_confirmation' => 'required_with:password|same:password|min:6'
    // ]);
    protected $rules = [
        'password' => 'min:6|required',
        // 'password_confirmation' => 'required_with:password|same:password|min:6',
        'name' => 'min:6|required',
        'email' => 'min:6|required|unique:users,email,',
        'phoneNumber' => 'min:10|required',
        'photo' => 'required',
        'cotactName' => 'min:6|required',
        'contactPhone' => 'min:6|required',
        'role' => 'required'
    ];
  public function submit()
  {
   $this->validate();

$user = new User();
$user->password = Hash::make($this->password);
$user->name = $this->name;
$last_id = User::latest()->first();
// dd($last_id->id_num);
$user->id_num = 'BLDC/' . ($last_id->id + 1) ;
$user->role= $this->role;
$user->email = $this->email;
$name = 'BDLC_'.time().".".$this->photo->extension();


$this->photo->storeAs('StaffProfile/', $name, 'public');
$user->photo = "StaffProfile/".$name;
$user->contact_person_name = $this->cotactName;
 
$user->phone = $this->phoneNumber;
$user->contact_person_phone = $this->contactPhone;
if($user->save()){
    session()->flash('successMessage', 'Something went wrong while deleting!');
    return redirect()->to('/staff-managment');
}
 




  }
public function updatedPhoto()
{
    $this->isUpload = true;
}

    public function render()
    {
        return view('livewire.add-staff-form');
    }
}
