<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use App\Models\Subscriber;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class AgentIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search,$fullName, $isLastMonth=false, $phone_number,$password,$password_confirmation,$email,$address;

    protected $rules = [
        
        'phone_number' => 'required|unique:users,phone_number|min:10',
       
         
      

    ];

public function addAgent()
{
    $this->validate();
    $user = new User();
  
    $user->phone_number = $this->phone_number;
    $user->password = Hash::make(1234);
    $user->role = "Agent";
    $user->status = true;
 

    if ($user->save()) {
        $this->dispatchBrowserEvent('successfully_added', ['newName' => "Successfully Added"]);
        $this->search == null;
    }
    $this->render();
}
public function lastMonth()
{
     if(!($this->isLastMonth)){

         $this->isLastMonth = true;
        $this->resetPage();
    }
    else {
        $this->isLastMonth = false;
        $this->resetPage();
    }
}
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function ApprovePayment($id)
    {
        $users = Subscriber::where('user_id', $id)->get();
        foreach($users as $user){
            if($user->status == "Approved"){

                $user->is_paid = 1;
                $user->save();
            }
}
$this->dispatchBrowserEvent('successfully_added', ['newName' => "Successfully Approved"]);
$this->resetPage();
    }
    public function UpprovePayment($id)
    {
        $users = Subscriber::where('user_id', $id)->get();
        foreach($users as $user){
            if($user->status == "Approved"){

                $user->is_paid = 2;
                $user->save();
            }
}
$this->dispatchBrowserEvent('successfully_added', ['newName' => "Successfully Unpproved"]);
$this->resetPage();
    }
    public function render()
    {
        // User::whereMonth('created_at', '=', Carbon::now()->subMonth()->month)->paginate(50)
        if($this->isLastMonth){

            return view('livewire.agent-index',['users' =>  User::where('role', 'Agent')->where('bank_type', '!=', null)->with('subs')->paginate(600)]);

        }
        if($this->search !=null){

            return view('livewire.agent-index',['users' => User::latest()->where('full_name', '!=', null)->where('full_name', 'like', '%'.$this->search.'%')->where('role', 'Agent')->orWhere('phone_number', 'like', '%'.$this->search.'%')->orWhere('role', 'like', '%'.$this->search.'%')->paginate(18)]);
        }
        return view('livewire.agent-index',['users' => User::where('role', 'Agent')->where('full_name', '!=', null)->latest()->paginate(18)]);
    

    }
}
