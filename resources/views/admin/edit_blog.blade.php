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
                <form action="{{ route('update-blog', $id) }}" method="post" enctype="multipart/form-data" >
                @csrf
            <div class="form-group mb-3">
                        <label for="inputAddress">Title</label>
                        <input type="text" value="{{ $blogs->title }}" name="title"  class="form-control  @error('title')is-invalid  @enderror" placeholder="Title">
                        <small id="emailHelp1" class="form-text text-muted">This will be title of the article</small>
                        @error('title') <span class="text-danger ">{{ $message }}</span> @enderror
                    </div>
                    <div class="row">

                    <div class="form-group col-md-4">
                            <label for="inputEmail4">Image</label>
                            <input name="image" type="file" class="form-control @error('image')is-invalid  @enderror" id="inputEmail4" placeholder="Thumblen">
                            @error('image') <span class="text-danger ">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Language</label>
                            <select name="language"  id="" class="form-control">
                            @foreach ($languages as $category)
                                @if ($category->id == $blogs->language_id  )
                                <option selected value="{{ $category->id}}"> {{ $category->language}} </option>
                                @else
                                <option   value="{{ $category->id}}"> {{ $category->language}} </option>
                                @endif
                                @endforeach
                            </select>
                            @error('language') <span class="text-danger ">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Post Category</label>
                            <select  name="category" id="" class="form-control">
                                @foreach ($categories as $category)
                                @if ($category->id == $blogs->categories_id  )
                                <option selected value="{{ $category->id}}"> {{ $category->title}} </option>
                                @else
                                <option   value="{{ $category->id}}"> {{ $category->title}} </option>
                                @endif
                                @endforeach
                                @if ($category->id == "ibex_tech")
                                <option selected value="ibex_tech">Ibext Tech </option>
                                @endif
                            </select>
                            @error('category') <span class="text-danger ">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    
                    <input type="text" name="des" id="des" hidden>
                    <textarea id="editor1" name="summaryckeditor" cols="100" rows="100" width:100%="" style="visibility: hidden; display: none;"> {{ $blogs->description }} </textarea>
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
