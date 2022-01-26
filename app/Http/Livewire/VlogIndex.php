<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\vlog;
use Livewire\Component;
use Livewire\WithFileUploads;

class VlogIndex extends Component
{
    use WithFileUploads;
    public $title, $vlogs,$editVlog, $categorys, $videoLink,$isEdited = false, $thumblain, $languageId, $categoryId, $description, $tempImage, $deletedId, $updatedId;

    protected $listeners = ['postAdded' => 'setDesriptionValue'];

    public function setDesriptionValue($des)
    {
        $vlog = new vlog();
        $vlog->title = $this->title;
        $vlog->video = $this->videoLink;
        $vlog->thumbnail = $this->thumblain;
        $vlog->user_id = "2";
        $vlog->language_id = $this->languageId;
        $vlog->description = $des;
        $vlog->categories_id = $this->categoryId;
        $vlog->status = 1;
        $this->tempImage = 'ibex-vlog-' . time() . '.' . $this->thumblain->extension();
        $this->thumblain->storeAs('Video_Thumblain/', $this->tempImage, 'public');
        $vlog->thumbnail = "storage/Video_Thumblain/" . $this->tempImage;
        $vlog->save();
        $this->dispatchBrowserEvent('successfully_added', ['newName' => "Successfully Added"]);
        return $this->mount();
    }
    public function editVlog($id)
    {

       $this->updatedId = $id;
       $vlog = vlog::find($id);
       $this->title = $vlog->title;
       $this->videoLink = $vlog->video;
       $this->description = $vlog->description;
       $this->languageId = $vlog->language_id;
       $this->categoryId = $vlog->categories_id;
// if(!$this->isEdited){
    $this->emit('initializeCkEditor');
// }
$this->isEdited = true;

       $this->dispatchBrowserEvent('editVlogModal', ['newName' => "Successfully Added"]);
    }
    public function deleteVlog()
    {
        $vlog = vlog::find($this->deletedId);
        $vlog->delete();
        $this->dispatchBrowserEvent('delete_toast', ['newName' => "Vlog is Successfully Deleted"]);
        $this->mount();
    }

    public function deletedId($id)
    {
        $this->deletedId = $id;
        $this->dispatchBrowserEvent('deleted_confirm_modal', ['newName' => "Successfully Added"]);
    }
    public function aprroveVlog($id)
    {
        $vlog = vlog::find($id);
        $vlog->status = 1;
        $vlog->save();
        $this->dispatchBrowserEvent('success_toast', ['newName' => "Vlog is Successfully Approved"]);
        return $this->mount();

    }
    public function blockVlog($id)
    {
        $vlog = vlog::find($id);
        $vlog->status = 0;
        $vlog->save();
        $this->dispatchBrowserEvent('warning_toast', ['newName' => "Vlog is Successfully Blocked"]);
        return $this->mount();

    }

    public function mount()
    {
        $this->vlogs = vlog::latest()->get();
        $this->categorys = Category::all();
    }
    public function addVlog()
    {
        dd($this->description);
    }


//     public function dehydrate() {
        
//    }







    public function render()
    {
        return view('livewire.vlog-index');
    }
}