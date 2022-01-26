<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use App\Models\Category;
use App\Models\Language;
use Livewire\WithFileUploads;

class BlogIndex extends Component
{
    use WithFileUploads;

    public $title, $languages, $blogs,$editVlog, $categorys, $videoLink,$isEdited = false, $thumblain, $languageId, $categoryId, $description, $tempImage, $deletedId, $updatedId;


    public function deleteVlog()
    {
        $vlog = Blog::find($this->deletedId);
        $vlog->delete();
        $this->dispatchBrowserEvent('delete_toast', ['newName' => "Vlog is Successfully Deleted"]);
        $this->mount();
    }

    public function deletedId($id)
    {
        $this->deletedId = $id;
        $this->dispatchBrowserEvent('deleted_confirm_modal', ['newName' => "Successfully Added"]);
    }



    public function aprroveblog($id)
    {
        $vlog = Blog::find($id);
        $vlog->status = 1;
        $vlog->save();
        $this->dispatchBrowserEvent('success_toast', ['newName' => "Vlog is Successfully Approved"]);
        return $this->mount();

    }
    public function blockblog($id)
    {
        $vlog = Blog::find($id);
        $vlog->status = 0;
        $vlog->save();
        $this->dispatchBrowserEvent('warning_toast', ['newName' => "Vlog is Successfully Blocked"]);
        return $this->mount();

    }



    public function mount()
    {
        $this->blogs = Blog::latest()->get();
        $this->categorys = Category::all();
        $this->languages = Language::all();
    }
    public function render()
    {
        return view('livewire.blog-index');
    }
}
