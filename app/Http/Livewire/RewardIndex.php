<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use Livewire\Component;

class RewardIndex extends Component
{

    public $rewards;
    public function mount()
    {
        $this->rewards = Answer::all();
    }
public function Unpprove($id)
{
 
    $an = Answer::find($id);
    $an->status = "Unpproved";
    $an->save();
    $this->dispatchBrowserEvent('successfully_added', ['newName' => "Successfully Unapproved"]);
    $this->mount();
}
public function Approve($id)
{
     $an = Answer::find($id);
     $an->status = "Approved";
     $an->save();
     $this->dispatchBrowserEvent('successfully_added', ['newName' => "Successfully Approved"]);
     $this->mount();
}

    public function render()
    {
        return view('livewire.reward-index');
    }
}
