<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AgentIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        if($this->search !=null)
        return view('livewire.agent-index',['users' => User::latest()->where('full_name', 'like', '%'.$this->search.'%')->where('role', 'Agent')->orWhere('phone_number', 'like', '%'.$this->search.'%')->orWhere('role', 'like', '%'.$this->search.'%')->paginate(10)]);
        return view('livewire.agent-index',['users' => User::where('role', 'Agent')->latest()->paginate(10)]);
    

    }
}
