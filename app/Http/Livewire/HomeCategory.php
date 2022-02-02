<?php

namespace App\Http\Livewire;

use App\Models\vlog;
use Livewire\Component;
use App\Models\Category;

class HomeCategory extends Component
{
    public $categories, $vlogs, $isNull=false, $index=-1;
    public function mount()
    {
        $this->categories = Category::all();
        $this->vlogs = vlog::limit(10)->get();
    }

    public function allCat()
    {
        $this->vlogs = vlog::limit(10)->get();
        $this->index = -1;
    }

    public function CatVl($id)
    {
       $this->vlogs = vlog::where('categories_id', $id)->get();
     
           $this->isNull = true;
           $this->index = $id;
        
    }
    public function render()
    {
        return view('livewire.home-category');
    }
}
