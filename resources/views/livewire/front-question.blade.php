<div>
<div class="container " style="padding:1rem; ">
<div class="result111">
    <h2>Correct:- {{ $correct }} </h2>
    <h2>Total:- {{ $questions->count() }} </h2>
    <h2 class="text-danger">Wrong:- {{ $wrong }}  </h2>
</div>
<?php $i=1; ?>
@foreach ($questions as $question)
    @if($loop->index == $current)

<div class="questionBox">
    <div class="myLoding">

        <div class="loading" wire:loading wire:target="next"></div> 
            <p style="text-align:center" class="pleaseWait"  wire:loading wire:target="next">Please Wait......</p>
    </div>


    <div class=""    wire:target="next"  wire:loading.class="display-none" > 
    
    <div class=""  style="display:flex">
    <span class="numbers">#{{ $current+1 }}</span>
    <div class="question">
         {!! $question->question !!} 
         
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

<button id="realButton" class="btn-primary btn btn-lg" wire:click="next({{ $question->id }})" style="  display: none; width:60%; height:48px; " >

@if($loop->iteration == $questions->count()) 
Finished
 @else
Next
 @endif


</button>

</div>
 
<div class="button">

<button id="fakeButton" class="btn-primary disable btn btn-lg"  onclick="window.alert('Please Select  Your Choice ')" style="width:60%; height:48px; " >Next</button>

</div>
 
@endif

 
@endforeach



</div>
</div>
