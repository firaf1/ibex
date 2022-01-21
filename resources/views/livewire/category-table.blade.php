<div>
    <div class="row">
        <div class="col-md-12">
            <div class="m-3 btn-group">
                <a href="#" data-toggle="modal" data-target="#AddcategoryModal  "   class="btn btn-info"> Add New

                <i class="fa fa-plus"></i>
                </a>
            </div>
            <div class="card card-topline-aqua">
                <div class="card-head">
                    <header> List of Category</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="table-scrollable">
                        <table id="example1" class="display full-width">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                     
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($catagries as $staff)
                                <tr>
                                    <td>
                                       {{ $staff->id}}
                                    </td>
                                    <td>{{ $staff->name }}</td>
                                    
                                    <td>
                                        <button wire:click="editCategory({{$staff->id}})"
                                            data-toggle="modal" data-target="#EditcategoryModal  "  class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button   wire:click="deleteStaff({{$staff->id}})"
                                        data-toggle="modal" data-target="#DeletecategoryModal"
                                            class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
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
    <div class="modal fade" wire:ignore.self id="AddcategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" name=""wire:model="name" class="form-control" id="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button  id="confirmDelete" type="button"
                        class="btn btn-primary" wire:click='submitCategory'>save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" wire:ignore.self id="EditcategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <input type="text" name=""wire:model="name" class="form-control" id="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button wire:click="UpdateCate" id="confirmDelete" type="button"
                        class="btn btn-danger">Update</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" wire:ignore.self id="DeletecategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm Deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Proceed to permanent deleteion?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button wire:click="deleteCatagory" id="confirmDelete" type="button"
                        class="btn btn-danger">Yes,delete</button>
                </div>
            </div>
        </div>
    </div>

</div>