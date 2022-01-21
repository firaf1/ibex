<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use App\Models\User;
use Livewire\Component;

class StaffTable extends Component
{   
     use WithFileUploads;
    public $staffs;
    public $name, $email,$isPreview, $posts, $isUpload = false, $password, $password_confirmation,
        $phoneNumber, $photo, $cotactName, $updatedStaffId, $contactPhone ,$role;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
        'phoneNumber' => 'required',
        'photo' => 'required',
        'cotactName' => 'required',
        'contactPhone' => 'required',
        'role' => 'required'
    ];

    public function mount()
    {
        $this->staffs = User::all();
        $this->posts = User::all();
    }
    public function updatedPhoto(){
        $this->isPreview = true;
    }
    public function editStaff($id)
    {
       
        $this->updatedStaffId = $id;
        $user = User::where('id', $id)->first();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phoneNumber = $user->phone;
        $this->cotactName = $user->contact_person_name;
        $this->contactPhone = $user->contact_person_phone;
        $this->photo = $user->photo;
        $this->role = $user->role;
    }
    public function Staffupd()
    {
        $user = User::where('id', $this->updatedStaffId)->first();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->role = $this->role;
        $user->phone = $this->phoneNumber;

        if ($this->photo != $user->photo) {
            $name = 'BDLC_'.time().".".$this->photo->extension();
            $this->photo->storeAs('StaffProfile/', $name, 'public');
            $user->photo = "StaffProfile/" . $name;
        }
        $user->contact_person_name = $this->cotactName;
        $user->contact_person_phone = $this->contactPhone;
        $upate = $user->save();
        if ($upate) {
            session()->flash('successMessage', 'Successfully Updated!');
            return redirect()->to('/staff-managment');
        }
    }
    public function deleteStaff($id)
    {
        $user = User::find($id);
        $delete = $user->delete();
        if($delete){
            session()->flash('successMessage', 'Successfully Deleted!');
        }else {
            session()->flash('errorMessage', 'Something went wrong!');
        }

            return redirect()->to('/staff-managment');
    }

    public function render()
    {
        return view('livewire.staff-table');
    }
}
