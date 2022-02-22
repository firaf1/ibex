<div>
<div class="col-lg-12">
            <div class="statbox widget box box-shadow ">
               @if (true)
               <div class="row">
                    <div
                        class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                        <form class="form-inline ">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                                <input type="text" class="form-control product-search" wire:model="search" id="input-search"
                                    placeholder="Search Phone Number...">
                            </div>
                        </form>
                    </div>

                    <div
                        class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">

                        <div class="d-flex justify-content-sm-end justify-content-center">
                        <div style="background:#4361ee; padding:7px; border-radius:6px;    cursor: pointer; " onclick="subscriberModal()">
                        

                            <svg style="background:white; color:#042ce3; height:2rem; width:2rem; border-radius:7px; padding:4px   "  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                         
 
    <span style="margin-bottom:-10rem; margin-left:0.5rem; margin-right:1rem; color:white; " >Add Number</span> <br>
 
</div>



                         
                        </div>


                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive">
                        <table
                            class="table table-bordered2 table-hover table-striped table-checkable table-highlight-head mb-4">
                            <thead>
                                <tr>

                                    <th class="">ID</th>
                                    <th class="">Phone Number</th>
                                    <th class="">Date</th>
                                    <th class="text-center">Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($phoneNumbers1 as $phonenumber1)
                                    
                                <tr>

                                    <td>
                                        <p class="mb-0"> {{ $phonenumber1->id }}</p>
                                    </td>
                                    <td>{{ $phonenumber1->phone_number}}</td>
                                    <td>{{ $phonenumber1->created_at->diffForHumans() }}</td>
                                    <td class="text-center">
                                        @if ($phonenumber1->status == "Unapproved")
                                        <span class="badge badge-danger">{{ $phonenumber1->status }}</span>
                                        @else
                                        <span class="badge badge-secondary">{{ $phonenumber1->status }}</span>
                                        @endif
                                      
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" wire:click="subscriberDeletedId({{ $phonenumber1->id}})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a>
                                    </td>
                                </tr>
                                @endforeach

                                

                            </tbody>
                          
                        </table>
                    </div>
                    <div class="d-flex flex-row-reverse mt-3">
                {{ $phoneNumbers1->links() }}
</div>
                </div>

                @else
                <img style=" width:20rem; margin-left:10rem " src="{{ asset('working.png')}}">
                <h2 style="text-align:center" > Coming Soon!!!</h2>
               @endif
                
                
            </div>
        </div>

        <div class="modal fade  show" id="subscriberDeleteModal" tabindex="-1" aria-labelledby="mySmallModalLabel"   aria-modal="true" role="dialog">
                                        <div class="modal-dialog " role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-danger" id="mySmallModalLabel">Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="modal-text text-danger">Are you Sure you want to delete permanently</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn " data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                                                    <button type="button" wire:click="deleteSubscriber" class="btn btn-danger">
                                                    <span style="width: 25px; height:25px" wire:loading wire:target="deleteSubscriber"
                                        class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                                    <span wire:loading.class="display-none">Delete</span>


                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>













        <!-- Modal -->
        <div class="modal fade"  wire:ignore.self id="subcriberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Phone Number</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                </div>
                    <div class="modal-body">
                    <div class="input-group mb-4">
                                        <div class="input-group-prepend" style="margin-right:-0.5rem">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> </button>
                                          
                                        </div>
                                        <input type="text" wire:model.defer="phoneNumber" class="form-control  @error('phoneNumber')is-invalid  @enderror" placeholder="Phone Number" aria-label="dropdown">
                                      
                                    </div>
                                    @error('phoneNumber') <span class="text-danger " style="margin-top:-1rem; " >{{ $message }}</span> @enderror
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                        <button wire:click="addSubscriber" type="button" class="btn btn-primary">
                        <span style="width: 25px; height:25px" wire:loading wire:target="addSubscriber"
                                        class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                                    <span wire:loading.class="display-none">Save</span>

                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>
