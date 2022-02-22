<?php

namespace App\Http\Livewire;

use App\Models\Choice;
use Livewire\Component;
use App\Models\Question;

class QuestionIndex extends Component
{
public $search, $deletedId;

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
}
public function Unapproved($id)
{
    $question = Question::findOrFail($id);
    $question->status = "Unapproved";
    $question->save();
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
        return view('livewire.question-index' ,['questions' => Question::latest()->where('question', 'like', '%'.$this->search.'%')->paginate(10)]);
    }
}
