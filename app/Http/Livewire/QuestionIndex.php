<?php

namespace App\Http\Livewire;

use App\Models\Choice;
use App\Models\Setting;
use Livewire\Component;
use App\Models\Question;

class QuestionIndex extends Component
{
public $search, $deletedId, $is_show;


 public function show_Question()
 {
     $ques = Questionstatus::find(1);
     $ques->status = "1";

     if($ques->save()){
        $this->dispatchBrowserEvent('deleted_confirm_modal', ['newName' => "Successfully Updated"]);
     }
     
 }
 public function showQuestion()
 {
     $isShow = Setting::find(1);
     $isShow->isQuestionShow = "1";
     $isShow->save();
     $this->is_show = "1";
     $this->dispatchBrowserEvent('showQuestion', ['newName' => "Question is Successfully Showed"]);

 }
 public function hideQuestion()
 {

     $isShow = Setting::find(1);
     $isShow->isQuestionShow = "0";
     $isShow->save();
     $this->is_show = "0";
     $this->dispatchBrowserEvent('hideQuestion', ['newName' => "Question is Successfully Showed"]);

 }
 public function Dele_Question(){
    
   $ques = Question::all();
   foreach($ques as $que){

       $que->delete();
   }
   $this->dispatchBrowserEvent('All_question_delete', ['newName' => "Question is Successfully Deleted"]);

}



public function DeleteQuestion()
{
    $question = Question::findOrFail($this->deletedId);
    $choices = Choice::where('question_id', $question->id)->get();
    foreach($choices as $choice){
        $choice->delete();

    }
    $question->delete();

    $this->dispatchBrowserEvent('delete_toast', ['newName' => "Question is Successfully Deleted"]);
    $this->render();

}
public function Approved($id)
{
    $question = Question::findOrFail($id);
    $question->status = "Approved";
    $question->save();
    $this->dispatchBrowserEvent('successfully_added', ['newName' => "Question is Successfully Approved"]);

}
public function Unapproved($id)
{
    $question = Question::findOrFail($id);
    $question->status = "Unapproved";
    $question->save();
    $this->dispatchBrowserEvent('delete_toast', ['newName' => "Questionn is Successfully Blocked"]);
}

public function DeletedQuestionID($id)
{
   $this->deletedId = $id;

    $this->dispatchBrowserEvent('questionDeleteModal', ['newName' => "Successfully Updated!!!!!!"]);
}
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $temp = Setting::find(1);
        $this->is_show = $temp->isQuestionShow;
        return view('livewire.question-index' ,['questions' => Question::latest()->where('question', 'like', '%'.$this->search.'%')->paginate(10)]);
    }
}
