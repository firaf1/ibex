<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LockedScreen extends Component
{
    public $password, $errorMessage;

    public function submit()
    {
        $user = User::find(Auth::user()->id);

        if (Hash::check($this->password, $user->password)) {

            $user->isLock = 0;
            $user->save();
            if ($user->role == "Agent") {
                redirect(route('agetIndex'));
            }
            if ($user->role == "Super Admin") {
                redirect(route('admin'));
            }
            if ($user->role == "Admin") {

                redirect(route('admin'));
            }
        } else {
            //  dd("ddddd");
            $this->errorMessage = "These credentials do not match our records.";
            $this->dispatchBrowserEvent('loginDehydrate', ['newName' => "Vlog is Successfully Blocked"]);
        }
    }
    public function dehydrate()
    {

        $this->dispatchBrowserEvent('loginDehydrate', ['newName' => "Vlog is Successfully Blocked"]);

    }

    public function render()
    {
        return view('livewire.locked-screen');
    }
}
