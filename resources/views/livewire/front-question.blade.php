<div>
<div class="container " style="padding:1rem; ">

@if($is_show == "1")

@if(!(Session::has('isCompleted')))
<div id="time22" style="margin-bottom:-1rem" >Remaining Time <span id="time">05:00</span> minutes!</div>
@endif
<div class="result111">
    <h2>Correct:- {{ $correct }} </h2>
    <h2>Total:- {{ $questions->count() }} </h2>
    <h2 class="text-danger">Wrong:- {{ $wrong }}  </h2>
</div>
<?php $i=1; ?>
@if(!(Session::has('isCompleted')))
@foreach ($questions as $question)
    @if($loop->index == $current)

<div class="questionBox">
    <div class="myLoding">

        <div class="loading" wire:loading wire:target="next"></div> 
            <p style="text-align:center" class="pleaseWait"  wire:loading wire:target="next">Please Wait......</p>
    </div>


    <div class="" wire:target="next"  wire:loading.class="display-none" > 
    
    <div class=""  style="display:flex">
    <span class="numbers">#{{ $current+1 }}</span>
    <div class="question">
        @if($question->photo !== null)
        <img style="width:80%; margin-left: 1rem; " src=" {{ $question->photo }} " alt="" srcset="">
      @endif
        <p style="margin-left:1.5rem;" >   {!! $question->question !!}  </p>
         
    </div>
    </div>
    <hr style="width:80%">
    <div class="choice1 row">
        @foreach ($question->choice as $choice)
        <div class="  col-sm-6">

<div class="top">
    <div class="choiceContainer">


        <div class="radio_button"  id="{{ "radio_button". $choice->id }}" id="radioButton" wire:click="Selected({{ $choice->id  }}, {{ $question->id }})">
            <div id="{{ $choice->id }}" class=" "></div>
        </div>

        <!-- <input type="radio"  value="{{ $choice->content }} " name="{{ $question->id }}"    id="{{ $choice->id }}"> -->
      <div class=" ChoiceCheck ">
      <label class="label" id="{{ "label". $choice->id }}" for="{{ $choice->id }}" wire:click="Selected({{ $choice->id  }}, {{ $question->id }})" >{{ $choice->content }}</label>
      </div>  

    </div>
</div>
 
</div>

        @endforeach
     

    



        
    </div>
</div>
</div>
<?php $i++; ?>
 
<div class="button" >



@if($loop->iteration == $questions->count()) 
<button id="realButton" class="btn-primary btn btn-lg" wire:click="Finshed" style="  display: none; width:60%; height:48px; " >
Finished
</button>
 @else
 <button onclick="myTime()" id="realButton" class="btn-primary btn btn-lg" wire:click="next({{ $question->id }})" style="  display: none; width:60%; height:48px; " >
Next
</button>
 @endif




</div>
 
<div class="button">

<button id="fakeButton" class="btn-primary disable btn btn-lg"  onclick="pleaseSelect()" style="width:60%; height:48px; " >Next</button>

</div>
 
@endif

 
@endforeach
@else 
<div class="questionBox" style="    display: flex;
    align-items: center;
    justify-content: center;">

    <img style="width:50%; height:50vh;  " class="completedImage" src="{{ asset('front/Completed.gif') }}" alt="">
</div>
@endif
@else
<h3>The game is started every thursday 2:00 pm ...</h3>
<div class="questionBox" style="    display: flex;
    align-items: center;
    justify-content: center;">
    <img style="width:50%; height:50vh;  " class="completedImage" src=" {{ "front/Waiting.gif" }} " alt="">
</div>

@endif
</div>


<script>

   
    function pleaseSelect(){

 

Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text:  "@lang('please_select_your_choice')",
  
})

        
    }




//   Swal.fire({
//   title: " @lang('attention') ",
//   icon: 'info',
//   html:"@lang('game_rule')",
//   showCloseButton: true,
//   showCancelButton: true,
//   focusConfirm: false,
//   confirmButtonText:
//     '<i class="fa fa-thumbs-up"></i> @lang('ok')!',
  
  
// })

@if(!(Session::has('isCompleted')))
Swal.fire(
    " @lang('attention') ",
    "@lang('game_rule')",
  'question'
).then((result) => {
    myTime();
})
@else 

Swal.fire({
  icon: 'info',
  title: "@lang('completed')",
  text: "@lang('you_are_completed_your_question')",
 })
 @endif
var  minutes, seconds;
var timer = 20;
var clTime;
 function startTimer(duration, display) {
     
     
    clTime = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
        if(seconds == 1){
            console.log('hello world!!!!!!!!')
            Livewire.emit('postAdded')
        }

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}
function myTime (){
    
    clearInterval(clTime);
    timer = 15
    var fiveMinutes = 20 * 1,
        display = document.querySelector('#time');
      startTimer(fiveMinutes, display);
    }

// window.onload = function () {
//     timer = 20
//     var fiveMinutes = 20* 1,
//         display = document.querySelector('#time');
//     new startTimer(fiveMinutes, display);
// };


</script>
</div>
