<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class AgentIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search,$fullName,$phone_number,$password,$password_confirmation,$email,$address;

    protected $rules = [
        
        'phone_number' => 'required|unique:users,phone_number|min:10',
       
         
      

    ];

public function addAgent()
{
    $this->validate();
    $user = new User();
  
    $user->phone_number = $this->phone_number;
    $user->password = Hash::make(7777);
    $user->role = "Agent";
    $user->status = true;
 

    if ($user->save()) {
        $this->dispatchBrowserEvent('successfully_added', ['newName' => "Successfully Added"]);
        $this->search == null;
    }
    $this->render();
}

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        if($this->search !=null){

            return view('livewire.agent-index',['users' => User::latest()->where('full_name', 'like', '%'.$this->search.'%')->where('role', 'Agent')->orWhere('phone_number', 'like', '%'.$this->search.'%')->orWhere('role', 'like', '%'.$this->search.'%')->paginate(10)]);
        }
        return view('livewire.agent-index',['users' => User::where('role', 'Agent')->latest()->paginate(10)]);
    

    }
}
