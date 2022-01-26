<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\vlog;
use Livewire\Component;
use App\Models\Language;

class LanguageIndex extends Component
{
    public $Languages, $LanguageTitle, $deletedId, $updatedId;

    protected $rules = [

        'LanguageTitle' => 'required|unique:categories,title',

    ];
    public function addLanguage()
    {
        $this->validate();
        $Language = new Language();
        $Language->language = $this->LanguageTitle;
        $Language->save();
        $this->dispatchBrowserEvent('success_toast', ['newName' => "Language is Successfully Added"]);
        $this->mount();
    }
    public function editCat($id)
    {

        $this->updatedId = $id;
        $cat = Language::find($id);
        $this->LanguageTitle = $cat->language;
        $this->dispatchBrowserEvent('open_edit_cat_modal', ['newName' => "Language is Successfully Updated"]);
    }
    public function update_cat()
    {

        $cat = Language::find($this->updatedId);
        $cat->language = $this->LanguageTitle;
        $cat->save();
        $this->dispatchBrowserEvent('success_toast', ['newName' => "Language is Successfully Updated"]);
        $this->mount();
    }
    public function deleted_cat_id($id)
    {

        $this->deletedId = $id;
        return $this->dispatchBrowserEvent('open_cat_add_modal', ['newName' => "Sorry Language is not found try again"]);
    }
    public function deleteLanguage()
    {

        $cat = Language::find($this->deletedId);

        $blogs = Blog::where('language_id', $cat->id)->get();
        foreach($blogs as $blog){
               $blog->delete();
             }
             $vlogs = vlog::where('language_id', $cat->id)->get();
             foreach($vlogs as $blog){
                    $blog->delete();
                  }
        if (!$cat) {
            return $this->dispatchBrowserEvent('delete_toast', ['newName' => "Sorry Language is not found try again"]);
        }
        $cat->delete();
        $this->dispatchBrowserEvent('success_toast', ['newName' => "Language is Successfully Deleted"]);
        $this->mount();
    }

    public function mount()
    {
        $this->Languages = Language::latest()->get();
    }













    public function render()
    {
        return view('livewire.language-index');
    }
}
