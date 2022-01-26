<div>

    <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow" wire:offline.class="display-none">
            <div class="widget-header">
                <div class="row">
                    <div
                        class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                        <h3>blog Lists</h3>
                    </div>

                    <div
                        class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-center text-center layout-spacing align-self-center">
                        <div class="d-flex justify-content-sm-end justify-content-center">


                            <a href=" {{route('addblog')}} " class="btn btn-primary mb-2 mr-2" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-video">
                                    <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                    <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                                </svg>
                                Add blog</a>
                        </div>

                        <div wire:offline>
                            You are now offline.
                        </div>

                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover mb-4">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th class="text-center">Language</th>
                                <th class="text-center">Category</th>
                                <th class="text-center"> STATUS </th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)

                            <tr>
                                <td>
                                    <div class="   " style="width:80px; height:80px; ">
                                        <img style="width:100%; height:100%" alt="avatar" class="img-flu1id e"
                                            src="{{ $blog->image }}">
                                    </div>
                                    @if ($blog->status ==1)

                                    <span class="badge badge-primary"> Approved </span>
                                    @else
                                    <span class="badge badge-danger"> Blocked </span>
                                    @endif
                                </td>
                                <td> <a href=""> {!! $blog->title !!} </a> </td>
                                <td>
                                <span class="badge badge-dark">   {{ $blog->user->full_name }} </span> 
                              </td>
                                <td class="text-center"><span class="badge badge-success"> {{ $blog->language->language }} </span></td>
                                <td> {{ $blog->category->title }} </td>
                                <td class="text-center">
                                    <div class="btn-group ">
                                        <button id="btndefault" type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-chevron-down">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg></button>
                                        <div class="dropdown-menu" aria-labelledby="btndefault"
                                            style="will-change: transform;">
                                            <a wire:click="aprroveblog({{$blog->id}})" href="javascript:void(0);"
                                                class="dropdown-item"><i
                                                    class="flaticon-home-fill-1 mr-1"></i>Approved</a>
                                            <a wire:click="blockblog({{$blog->id}})" href="javascript:void(0);"
                                                class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Blocked</a>

                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">

                                    <div class="dropdown custom-dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                            style="will-change: transform;">

                                            <a class="dropdown-item"  href="edit-blog/{{$blog->id}}">Edit</a>
                                            <a class="dropdown-item" wire:click="deletedId({{$blog->id}})"
                                                href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>



            </div>
        </div>
    </div>
    <!-- Deleted Modal -->
    <div class="modal fade modal-notification show" id="blogDeletedModal" wire:ignore.self tabindex="-1"
        aria-labelledby="standardModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog" role="document" id="standardModalLabel">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="icon-content text-danger">
                        <p class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg></p>
                    </div>
                    <p class="modal-text text-danger"> are your sure you want to delete this user</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="button" class="btn btn-danger" wire:click="deleteVlog">
                        <span style="width: 25px; height:25px" wire:loading wire:target="deleteVlog"
                            class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                        <span wire:loading.class="display-none">Delete</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal  fade editblogModal show" id="editblogModal" wire:ignore.self tabindex="-1"
        aria-labelledby="myExtraLargeModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myExtraLargeModalLabel">Add blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="inputAddress">Title</label>
                        <input type="text" wire:model.defer="title" class="form-control" placeholder="Title">
                        <small id="emailHelp1" class="form-text text-muted">This will be title of the article</small>
                    </div>
                    <div class="row">

                        <div class="form-group mb-3 col-sm-6">
                            <label for="inputAddress">Vidoe Link</label>
                            <input type="text" wire:model.defer="videoLink" class="form-control"
                                placeholder="Vidoe Link">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Post Category</label>
                            <select wire:model.defer="categoryId" name="" id="" class="form-control">
                                @foreach ($categorys as $category)

                                <option value="{{ $category->id }}"> {{ $category->title }} </option>
                                @endforeach

                            </select>
                        </div>
                    </div>


                    <div class="form-row mb-4">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Thumblain</label>
                            <input wire:model.defer="thumblain" type="file" class="form-control" id="inputEmail4"
                                placeholder="Thumblen">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Language</label>
                            <select wire:model.defer="languageId" name="" id="" class="form-control">
                                @foreach ($languages as $language)
                                    
                                <option value="{{ $language->id }}"> {{ $language->language }} </option>
                                @endforeach
                               
                            </select>
                        </div>
                    </div>
                    <input type="text" hidden wire:model.defer="description" id="description">
                    <textarea id="editor11" name="summary-ckeditor1" cols="100" rows="10" width:100%></textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button onclick="updateValue()" type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal  fade bd-example-modal-xl show" id="blogModal" wire:ignore.self tabindex="-1"
        aria-labelledby="myExtraLargeModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myExtraLargeModalLabel">Add blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="inputAddress">Title</label>
                        <input type="text" wire:model.defer="title" class="form-control" placeholder="Title">
                        <small id="emailHelp1" class="form-text text-muted">This will be title of the article</small>
                    </div>
                    <div class="row">

                        <div class="form-group mb-3 col-sm-6">
                            <label for="inputAddress">Vidoe Link</label>
                            <input type="text" wire:model.defer="videoLink" class="form-control"
                                placeholder="Vidoe Link">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Post Category</label>
                            <select wire:model.defer="categoryId" name="" id="" class="form-control">
                                @foreach ($categorys as $category)

                                <option value="{{ $category->id }}"> {{ $category->title }} </option>
                                @endforeach

                            </select>
                        </div>
                    </div>


                    <div class="form-row mb-4">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Thumblain</label>
                            <input wire:model.defer="thumblain" type="file" class="form-control" id="inputEmail4"
                                placeholder="Thumblen">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Language</label>
                            <select wire:model.defer="languageId" name="" id="" class="form-control">
                                <option value="1">Amharic</option>
                                <option value="2">English</option>
                                <option value="3">Afan oromoo</option>
                            </select>
                        </div>
                    </div>
                    <input type="text" hidden wire:model.defer="description" id="description">
                    <textarea id="editor1" name="summary-ckeditor" cols="100" rows="10" width:100%></textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button onclick="updateValue()" type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
    // timer = setInterval(updateDiv,100);
    function updateValue() {
        var editorText = CKEDITOR.instances.editor1.getData();
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