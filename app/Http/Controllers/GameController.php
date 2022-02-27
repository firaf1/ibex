<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Choice;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
 

class GameController extends Controller
{
    public function index()
    {
        $lang = Session::get('locale');
        
        $currentLanguage;
       if($lang == 'am')
       $currentLanguage = 2;
       if($lang == 'en')
       $currentLanguage = 1;
        $blogs = Blog::where('status', '=', '1')->where('language_id', $currentLanguage)->orderBy('created_at', 'desc')->take(4)->get();

        return view('home.game.index', compact(['blogs']));
    }
    public function storeGame(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answers'=>'required',
            'first' => 'required',
            'second' => 'required',
            'third' => 'required',
            'fourth' => 'required',
        ]);
        $question = new Question();
        $question->question = $request->question;
        $question->status = "Approved"; 

        if($request->photo != null){
            $tempImage = 'ibex-blogs-' . time() . '.' .  $request->photo->extension();
            $request->photo->storeAs('Game_Image/', $tempImage, 'public');
            $question->photo = "storage/Game_Image/" . $tempImage;
         }



        if($question->save()){
             for($i= 0; $i<4; $i++){
     $choice = new Choice();
     $choice->question_id = $question->id;
     if($i == 0){
        if($request->answers == 1){
            $choice->choice_type = "answer";
        }
         $choice->content = $request->first;
     }
     if($i == 1){
if($request->answers == 2){
    $choice->choice_type = "answer";
}
         $choice->content = $request->second;
     }
     if($i == 2){
        if($request->answers == 3){
            $choice->choice_type = "answer";
        }
         $choice->content = $request->third;
     }
     if($i == 3){
        if($request->answers == 4){
            $choice->choice_type = "answer";
        }
         $choice->content = $request->fourth;
     }
     $choice->save();
    }
    return redirect()->back()->with('questionAdded', 'Blogs  updated!');


        }
    
    }



    public function edit($id)
    {
        $first; $second; $third; $fourth; $i=0;
        $question = Question::findOrFail($id);
        $choices = Choice::where('question_id', $question->id)->get();
        foreach($choices as $choice){
            if($i==0)
$first =$choice->content;
if($i==1){
    $second =$choice->content;
}
if($i==2){
    $third =$choice->content;
}
if($i==3){
    $fourth =$choice->content;
}
 $i++;
        }
       return view('admin.edit_question', compact(['choices', 'first', 'second', 'third', 'fourth','id', 'question']));
    }



public function update(Request $request, $id)
{
     $question = Question::where('id', $id)->first();
     $i=0;
     $question->question = $request->question;

     if($request->photo != null){
        $tempImage = 'ibex-blogs-' . time() . '.' .  $request->photo->extension();
        $request->photo->storeAs('Game_Image/', $tempImage, 'public');
        $question->photo = "storage/Game_Image/" . $tempImage;
     }


     if($question->save()){
         $choices = Choice::where('question_id', $question->id)->get();
         foreach($choices as $choice){
             if($choice->id == $request->answers){
                 $choice->choice_type = "answer";
             }
             else {
                 $choice->choice_type = null;
             }
if($i==0){
    $choice->content = $request->first;
     
}
if($i==1){
    $choice->content = $request->second;
     
}
if($i==2){
    $choice->content = $request->third;
     
}
if($i==3){
    $choice->content = $request->fourth;
     
}

$choice->save();
$i++;


         }
         return redirect()->route('question')->with('questionAdded', 'Blogs  updated!');
     }
}




}
