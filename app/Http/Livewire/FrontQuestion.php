<?php

namespace App\Http\Livewire;

use App\Models\Choice;
use Livewire\Component;
use App\Models\Question;

class FrontQuestion extends Component
{
public $answeredQuestion,$questions,$correct=0, $wrong=0, $selectedChoice = null, $current=0, $totalQuestion;

public function next()
{
    if($this->selectedChoice != null){

        $this->selectedChoice = null;
        $this->current++;
        $this->render();
    }
    
}
public function Selected($id, $questionId)
{
    if($this->selectedChoice == null){
    $this->selectedChoice = $id;
    // dd(Choice::where('question_id', $questionId)->get());
    $choice = Choice::findOrFail($id);
     if($choice->choice_type == null){
         $correct = Choice::where('choice_type', '!=', null)->where('question_id', $questionId)->first();
          
        $this->dispatchBrowserEvent('Add_dot_Class', ['correctId' => $correct->id, 'wrongId' => $id]);
        $this->wrong++;
 
     }
     else{
        $this->dispatchBrowserEvent('correct_answer', ['correctId' => $id]);
        $this->correct++;

     }


//  $this->dispatchBrowserEvent('Add_dot_Class', ['newId' => $id]);
 
    }
    else{
        $choice = Choice::findOrFail($this->selectedChoice);
        if($choice->choice_type == null){
            $correct = Choice::where('choice_type', '!=', null)->where('question_id', $questionId)->first();
             
           $this->dispatchBrowserEvent('Add_dot_Class', ['correctId' => $correct->id, 'wrongId' => $this->selectedChoice]);
    
        }
        else{
           $this->dispatchBrowserEvent('correct_answer', ['correctId' => $this->selectedChoice]);
        }
        $this->dispatchBrowserEvent('notAllowed', ['correctId' => $this->selectedChoice]);
    }
}

public function updatingAnsweredQuestion()
{
    dd('hello world!!!!!!!!!');
}
public function mount()
{
    $this->questions = Question::all();
}
    public function render()
    {
        $this->totalQuestion = Question::count();
    
        return view('livewire.front-question');
  
    }
}
