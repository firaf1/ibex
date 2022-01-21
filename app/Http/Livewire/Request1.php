<?php

namespace App\Http\Livewire;

use App\Models\Request;
use Livewire\Component;

class Request1 extends Component
{
public $allreq;
    public function mount()
    {
        $this->allreq = Request::all();

    }
    public function render()
    {
        return view('livewire.request');
    }
}
