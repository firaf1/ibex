@extends('layouts.backLayout')

@section('content')

<div class="layout-px-spacing">

                <div class="row    layout-top-spacing"  >
                    <div class="col-lg-12">
                    <div>

<div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow" wire:offline.class="display-none">
      
        <div class="widget-content widget-content-area">
            <div class="table-responsiv1e">
                <form action="{{ route('update-name', $id) }}" method="post" enctype="multipart/form-data" >
                @csrf
            <div class="form-group mb-3">
                        <label for="inputAddress">Title</label>
                        <input type="text" value="{{ $vlog->title }}" name="title"  class="form-control  @error('title')is-invalid  @enderror" placeholder="Title">
                        <small id="emailHelp1" class="form-text text-muted">This will be title of the article</small>
                        @error('title') <span class="text-danger ">{{ $message }}</span> @enderror
                    </div>
                    <div class="row">

                        <div class="form-group mb-3 col-sm-6">
                            <label for="inputAddress">Vidoe Link</label>
                            <input type="text" value="{{ $vlog->video}}" class="form-control @error('video')is-invalid  @enderror" name="video" placeholder="Vidoe Link">
                            @error('video') <span class="text-danger ">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Post Category</label>
                            <select  name="category" id="" class="form-control">
                                @foreach ($categories as $category)
                                @if ($category->id == $vlog->categories_id  )
                                <option selected value="{{ $category->id}}"> {{ $category->title}} </option>
                                @else
                                <option   value="{{ $category->id}}"> {{ $category->title}} </option>
                                @endif
                                @endforeach
                            </select>
                            @error('category') <span class="text-danger ">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Thumblain</label>
                            <input name="thumblain" name="thumblain" type="file" class="form-control @error('thumblain')is-invalid  @enderror" id="inputEmail4" placeholder="Thumblen">
                            @error('thumbnail') <span class="text-danger ">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Language</label>
                            <select wire:model.defer="languageId" name="language" id="" class="form-control">
                            @foreach ($languages as $category)
                                @if ($category->id == $vlog->language_id  )
                                <option selected value="{{ $category->id}}"> {{ $category->language}} </option>
                                @else
                                <option   value="{{ $category->id}}"> {{ $category->language}} </option>
                                @endif
                                @endforeach
                            </select>
                            @error('language') <span class="text-danger ">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <input type="text" name="des" id="des" hidden>
                    <textarea id="editor1" name="summaryckeditor" cols="100" rows="100" width:100%="" style="visibility: hidden; display: none;"> {{ $vlog->description }} </textarea>
                    @error('des') <span class="text-danger ">{{ $message }}</span> @enderror
                    <div class="widget-content widget-content-area text-right">
                    <button onclick="updateValue()" type="submit" class="btn btn-primary mb-4 mr-2 btn-lg">Update </button>
                    </div>
                    </form>
            </div>



        </div>
    </div>
</div>


<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
// timer = setInterval(updateDiv,100);
function updateValue() {
     
     var editorText = CKEDITOR.instances.editor1.getData();
     document.getElementById('des').value = editorText;
     Livewire.emit('postAdded', editorText)
     document.getElementById('description').value = editorText;
 }
 


CKEDITOR.replace('editor1', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});

CKEDITOR.replace('editor11', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});


</script>

</div>
                    </div>
                </div>
            </div>


@endsection
