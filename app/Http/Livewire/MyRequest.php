<?php

namespace App\Http\Livewire;

use App\Models\Request;
use Livewire\Component;

class MyRequest extends Component
{
    public $allreq;
    public function mount()
    {
        $this->allreq = Request::all();

    }
    public function render()
    {
        return view('livewire.my-request');
    }
}
