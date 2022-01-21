<?php

namespace App\Http\Livewire;

use App\Models\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class YourRequest extends Component
{
    public $allreq, $deleteId;
    public function mount()
    {
        $this->allreq = Request::where('by_id', Auth::user()->id)->get();

    }
    public function DeleteRequest($id)
    {
        $this->deleteId = $id;  
    }
    public function deleteRequestFromList()
    {
       $item = Request::where('id', $this->deleteId)->first();
       $item->delete();
       return redirect()->to('/staff-managment');
    }
    public function render()
    {
        return view('livewire.your-request');
    }
}
