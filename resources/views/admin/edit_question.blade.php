@extends('layouts.backLayout')

@section('content')

<div class="layout-px-spacing">  
                 
<div class="col-12">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Edit Question</h5>
                                                 </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('updateGame', $id) }} " method="post">
                                                        @csrf
                                                    <div class="question">

                                                        <textarea id="editor1" name="question" cols="100" rows="100" width:100%="" style="visibility: hidden; display: none;"> {{ $question->question }} </textarea>
                                                        @error('question') <span class="text-danger ">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="form-row mb-2 mt-2">
                                            <div class="col-sm-6">
                                              <input type="text" value="{{ $first }}" class="form-control" name="first" placeholder="First Option">
                                              @error('first') <span class="text-danger ">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-sm-6">
                                              <input type="text"  value="{{ $second }}" name="second" class="form-control" placeholder="Second Option">
                                              @error('second') <span class="text-danger ">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-row mb-2 mt-2">
                                            <div class="col-sm-6">
                                              <input type="text" value="{{ $third }}" name="third" class="form-control" placeholder="Third Option name">
                                              @error('third') <span class="text-danger ">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-sm-6">
                                              <input type="text"  value="{{ $fourth }}" name="fourth" class="form-control" placeholder="Fourth Option">
                                              @error('fourth') <span class="text-danger ">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-row mb-2 mt-2">
                                          
                                            <div class="col-sm-12">
                                                <p>Answer</p>
                                           <select name="answers" class="form-control" id="">
                                               @foreach ($choices as $choice)
                                               <option value="{{ $choice->id }}" <?php if($choice->choice_type != null){
                                                   echo "selected";
                                                   
                                               } ?> >{{ $choice->content }}</option>
                                               @endforeach
                                              
                                           </select>
                                            </div>
                                            @error('answers') <span class="text-danger ">{{ $message }}</span> @enderror
                                        </div>
                                        
                                                </div>
                                                <div class="modal-footer">
                                                   
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
            </div>
                  

                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('editor1', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
            


@endsection 
