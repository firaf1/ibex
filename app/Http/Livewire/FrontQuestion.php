<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Answer;
use App\Models\Choice;
use App\Models\Setting;
use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
 

class FrontQuestion extends Component
{
public $answeredQuestion,$questions,$correct=0, $is_show,  $wrong=0, $selectedChoice = null, $current=0, $totalQuestion;

public function next()
{
    if($this->selectedChoice != null){

        $this->selectedChoice = null;
        $this->current++;
        $this->render();
    }
    
}

public function next2()
{
    if($this->current == $this->totalQuestion-1){
$this->Finshed();
$result = ($this->correct * 100)/$this->totalQuestion;
if($result >90){
  


    $isExit = Answer::where('user_id', Auth::user()->id)->get();
    if($isExit->count() > 0 ){
        $this->dispatchBrowserEvent('Already', ['correctId' => "ddd"]);

    }
    else{
        $answer = new Answer();
        $answer->user_id = Auth::user()->id;
    
      if(  $answer->save()){
        $this->dispatchBrowserEvent('awarded', ['correctId' => "ddd"]);
      }
    }


 
  
}
else{

    $this->dispatchBrowserEvent('completed', ['correctId' => "fff"]);
}


    }
        $this->selectedChoice = null;
        $this->current++;
        $this->render();
    
}
public function Finshed()
{

      Session::put("isCompleted", true);

    $result = ($this->correct * 100)/$this->totalQuestion;
if($result >90){

    $isExit = Answer::where('user_id', Auth::user()->id)->get();
    if($isExit->count() > 0 ){
        $this->dispatchBrowserEvent('Already', ['correctId' => "ddd"]);

    }
    else{
        $answer = new Answer();
        $answer->user_id = Auth::user()->id;
      if(  $answer->save()){
        $this->dispatchBrowserEvent('awarded', ['correctId' => "ddd"]);
      }

    }


   
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

protected $listeners = ['postAdded' => 'incrementPostCount'];
public function incrementPostCount()
{
   $this->next2();
//    $this->dispatchBrowserEvent('completed', ['correctId' => "fff"]);
}



public function updatingAnsweredQuestion()
{
    dd('hello world!!!!!!!!!');
}
public function mount()
{
    $show = Setting::find(1);
    $this->is_show = $show->isQuestionShow;
//    $vv= Session::forget('isCompleted');
 
    $this->questions = Question::where('status', 'Approved')->get();

}
    public function render()
    {
        $this->totalQuestion = Question::count();
    
        return view('livewire.front-question');
  
    }
}
