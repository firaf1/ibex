<?php

namespace App\Http\Livewire;
use App\Models\Category;
use Livewire\Component;

class CategoryTable extends Component
{
    public $catagries, $name, $deleteId;
    public function mount()
    {
        $this->catagries = Category::all();
    }
    public function deleteStaff($id)
    {
        $this->deleteId = $id;
    }
    public function editCategory($id)
    {
        $name = Category::where('id', $id)->first();
        $this->name = $name->name;
        $this->deleteId = $id;
    }
    public function UpdateCate()
    {
        // dd($this->name);
        $user = Category::where('id', $this->deleteId)->first();
        $user->name = $this->name;
        $user->save();
        $this->catagries = Category::all();
        $this->dispatchBrowserEvent('EditCatagoryModal11', ['newName' => "d"]);
    }
    public function deleteCatagory()
    {
        $user = Category::where('id', $this->deleteId)->first();
        $user->delete();
        $this->catagries = Category::all();
        $this->dispatchBrowserEvent('DeleteCatagoryModal', ['newName' => "d"]);
    }
    public function submitCategory()
    {
        $category = new Category();
        $category->name = $this->name;
        $category->save();
        $this->catagries = Category::all();
        $this->dispatchBrowserEvent('name-updated', ['newName' => "d"]);
    }
    public function render()
    {
        return view('livewire.category-table');
    }
}