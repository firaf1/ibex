<div>
    <div class="row    layout-top-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow m-2">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-8 col-md-12 col-sm-8 col-8">
                            <h4>Topic Category</h4>
                        </div>
                        <div class="col-xl-4 col-md-12 col-sm-4 col-4">
                            <h4 class="text-right text-primary" data-toggle="modal" data-target=".ad_category">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                Add
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive">
                        <table
                            class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                            <thead>
                                <tr>
                                    <th class="checkbox-column">
                                        <label class="new-control new-checkbox checkbox-primary"
                                            style="height: 18px; margin: 0 auto;">
                                            <input type="checkbox" class="new-control-input todochkbox" id="todoAll">
                                            <span class="new-control-indicator"></span>
                                        </label>
                                    </th>
                                    <th class="">Name</th>
                                    <th class="">Date</th>
                                    <th class="">Posts</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorys as $category )
                                <tr>
                                    <td class="checkbox-column">
                                        <label class="new-control new-checkbox checkbox-primary"
                                            style="height: 18px; margin: 0 auto;">
                                            <input type="checkbox" class="new-control-input todochkbox" id="todo-5">
                                            <span class="new-control-indicator"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <p class="mb-0"> {{ $category->title }}</p>
                                    </td>
                                    <td>{{ $category->created_at->diffForHumans() }}</td>
                                    <td>180</td>
                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Settings"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-settings text-primary">
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                        <path
                                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                        </path>
                                                    </svg></a> </li>
                                            <li><a href="javascript:void(0);" wire:click="editCat({{$category->id}})"
                                                    data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-edit-2 text-success">
                                                        <path
                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                        </path>
                                                    </svg></a></li>
                                            <li><a href="javascript:void(0);"
                                                    wire:click="deleted_cat_id({{ $category->id }})"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash-2 text-danger">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                    </svg></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div>
    </div>


    <!-- // delete modal  -->
    <div class="modal fade modal-notification show" id="cat_delete" wire:ignore.self tabindex="-1"
        aria-labelledby="standardModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog" role="document" id="standardModalLabel">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="icon-content danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                    </div>
                    <p class="modal-text"> are your sure you want to delete this Category</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="button" class="btn btn-danger" wire:click="deleteCategory">
                        <span style="width: 25px; height:25px" wire:loading wire:target="deleteCategory"
                            class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                        <span wire:loading.class="display-none">Delete</span>
                    </button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal  fade ad_category" id="cat_ad" wire:ignore.self tabindex="-1" role="dialog"
        aria-labelledby="addContactModalTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="text-center">Add Category</h4>
                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                    <div class="add-contact-box">
                        <div class="add-contact-content">
                            <form id="addContactModalTitle">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-location">
                                            <i class="flaticon-location-1"></i>
                                            <div class="row">
                                                <label for="basic-url">Category Titile</label>
                                                <input type="text" id="" wire:model.defer="categoryTitle"
                                                    class="form-control @error('categoryTitle')is-invalid  @enderror"
                                                    placeholder="Category Titile">
                                                @error('categoryTitle') <span class="text-danger ">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-edit" wire:click="addCategory" class="float-left btn btn-primary">


                        <span style="width: 25px; height:25px" wire:loading wire:target="addCategory"
                            class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                        <span wire:loading.class="display-none">Submit </span>
                    </button>

                    <button class="btn" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal  fade ad_category" id="cat_edit" wire:ignore.self tabindex="-1" role="dialog"
        aria-labelledby="addContactModalTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="text-center">Add Category</h4>
                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                    <div class="add-contact-box">
                        <div class="add-contact-content">
                            <form id="addContactModalTitle">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-location">
                                            <i class="flaticon-location-1"></i>
                                            <div class="row">
                                                <label for="basic-url">Category Titile</label>
                                                <input type="text" id="" wire:model.defer="categoryTitle"
                                                    class="form-control @error('categoryTitle')is-invalid  @enderror"
                                                    placeholder="Category Titile">
                                                @error('categoryTitle') <span class="text-danger ">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-edit" wire:click="update_cat" class="float-left btn btn-primary">


                        <span style="width: 25px; height:25px" wire:loading wire:target="update_cat"
                            class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                        <span wire:loading.class="display-none">Update </span>
                    </button>

                    <button class="btn" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>

                </div>
            </div>
        </div>
    </div>
</div>