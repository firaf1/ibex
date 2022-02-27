<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\vlog;
use Livewire\Component;
use App\Models\Category;

class CategoryIndex extends Component
{
    public $categorys, $categoryTitle, $category_type, $deletedId, $updatedId;

    protected $rules = [

        'categoryTitle' => 'required|unique:categories,title',
        'category_type' => 'required',

    ];
    public function addCategory()
    {
        $this->validate();
        $category = new Category();
        $category->title = $this->categoryTitle;
        $category->category_type = $this->category_type;
        $category->save();
        $this->dispatchBrowserEvent('success_toast', ['newName' => "Category is Successfully Added"]);
        $this->mount();
    }
    public function editCat($id)
    {

        $this->updatedId = $id;
        $cat = Category::find($id);
        $this->categoryTitle = $cat->title;
        $this->category_type = $cat->category_type;
        $this->dispatchBrowserEvent('open_edit_cat_modal', ['newName' => "Category is Successfully Updated"]);
    }
    public function update_cat()
    {

        $cat = Category::find($this->updatedId);
        $cat->title = $this->categoryTitle;
        $cat->category_type = $this->category_type;
        $cat->save();
        $this->dispatchBrowserEvent('success_toast', ['newName' => "Category is Successfully Updated"]);
        $this->mount();
    }
    public function deleted_cat_id($id)
    {

        $this->deletedId = $id;
        return $this->dispatchBrowserEvent('open_cat_add_modal', ['newName' => "Sorry Category is not found try again"]);
    }
    public function deleteCategory()
    {

        $cat = Category::find($this->deletedId);

        $blogs = Blog::where('categories_id', $cat->id)->get();
        foreach($blogs as $blog){
               $blog->delete();
             }
             $vlogs = vlog::where('categories_id', $cat->id)->get();
             foreach($vlogs as $blog){
                    $blog->delete();
                  }


        if (!$cat) {
            return $this->dispatchBrowserEvent('delete_toast', ['newName' => "Sorry Category is not found try again"]);
        }
        $cat->delete();
        $this->dispatchBrowserEvent('success_toast', ['newName' => "Category is Successfully Deleted"]);
        $this->mount();
    }

    public function mount()
    {
        $this->categorys = Category::latest()->get();
    }
    public function render()
    {
        return view('livewire.category-index');
    }
}
