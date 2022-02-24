<div>
    <div class="widget-content searchable-container list">

        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                <form class="form-inline my-2 my-lg-0">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                        <input type="text" wire:model="search" class="form-control product-search" id="input-search"
                            placeholder="Search User...">
                    </div>
                </form>
            </div>

            <div
                class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-center text-center layout-spacing align-self-center">
                <div class="d-flex justify-content-sm-end justify-content-center">
                    <svg id="btn-add-contact" data-toggle="modal" data-target=".user_add_modal"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user-plus">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="20" y1="8" x2="20" y2="14"></line>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>

                    <div class="switch align-self-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-list view-list active-view">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3" y2="6"></line>
                            <line x1="3" y1="12" x2="3" y2="12"></line>
                            <line x1="3" y1="18" x2="3" y2="18"></line>
                        </svg>
                    </div>
                    <div class="switch align-self-center ml-4 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-grid view-grid">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal  fade user_add_modal" wire:ignore.self tabindex="-1" role="dialog"
                    aria-labelledby="addContactModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h2 class="text-center">Add User</h2>
                                <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                                <div class="add-contact-box">
                                    <div class="add-contact-content">
                                        <form id="addContactModalTitle">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="contact-name">
                                                        <i class="flaticon-user-11"></i>
                                                        <input type="text" id="c-name" wire:model.debounce="fullName"
                                                            class="form-control  @error('fullName')is-invalid  @enderror"
                                                            placeholder="Full Name">
                                                        @error('fullName') <span class="text-danger "
                                                            style="margin-left:-5rem">{{ $message }}</span> @enderror
                                                        <span class="validation-text"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="contact-email">
                                                        <i class="flaticon-mail-26"></i>

                                                        <input type="text" id="c-email" wire:model.defer="phone_number"
                                                            class="form-control @error('phone_number')is-invalid  @enderror"
                                                            placeholder="Phone Number">
                                                        @error('phone_number') <span class="text-danger "
                                                            style="margin-left:-5rem">{{ $message }}</span> @enderror
                                                        <span class="validation-text"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="contact-occupation">
                                                        <i class="flaticon-fill-area"></i>
                                                        <input type="password" id="c-occupation"
                                                            wire:model.debounce="password"
                                                            class="form-control @error('password')is-invalid  @enderror"
                                                            placeholder="Password">
                                                        @error('password') <span class="text-danger "
                                                            style="margin-left:-5rem">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="contact-phone">
                                                        <i class="flaticon-telephone"></i>

                                                        <input type="password" id="c-phone"
                                                            wire:model.defer="password_confirmation"
                                                            class="form-control @error('password_confirmation')is-invalid  @enderror"
                                                            placeholder="Confirm Password">
                                                        @error('password_confirmation') <span class="text-danger "
                                                            style="margin-left:-5rem">{{ $message }}</span> @enderror
                                                        <span class="validation-text">w</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="contact-location">
                                                        <i class="flaticon-location-1"></i>
                                                        <!-- <input type="text" id="c-location" wire:model.defer="role" class="form-control @error('role')is-invalid  @enderror" placeholder="User Role"> -->

                                                        <select wire:model.defer="role"
                                                            class="form-control @error('role')is-invalid  @enderror">
                                                            <option>Admin</option>
                                                            <option>User</option>
                                                            <option>Agent</option>
                                                            <option>Super Admin</option>
                                                        </select>
                                                        @error('role') <span class="text-danger "
                                                            style="margin-left:-5rem">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="contact-location">
                                                        <i class="flaticon-location-1"></i>
                                                        <input type="email" id="c-location" wire:model.defer="email"
                                                            class="form-control @error('email')is-invalid  @enderror"
                                                            placeholder="Email">
                                                        @error('email') <span class="text-danger "
                                                            style="margin-left:-5rem">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-location">
                                                        <i class="flaticon-location-1"></i>
                                                        <input type="text" id="c-location" wire:model.defer="address"
                                                            class="form-control @error('address')is-invalid  @enderror"
                                                            placeholder="Address">
                                                        @error('address') <span class="text-danger "
                                                            style="margin-left:-5rem">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button id="btn-edit" wire:click="addUser" class="float-left btn">


                                    <span style="width: 25px; height:25px" wire:loading wire:target="addUser"
                                        class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                                    <span wire:loading.class="display-none">Save</span>
                                </button>

                                <button class="btn" data-dismiss="modal"> <i class="flaticon-delete-1"></i>
                                    Discard</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- // edit modal -->
                <div class="modal  fade user_edit_modal" wire:ignore.self tabindex="-1" role="dialog"
                    aria-labelledby="addContactModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h2 class="text-center">Edit User</h2>
                                <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                                <div class="add-contact-box">
                                    <div class="add-contact-content">
                                        <form id="addContactModalTitle">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="contact-name">
                                                        <i class="flaticon-user-11"></i>
                                                        <input type="text" id="c-name" wire:model.debounce="fullName"
                                                            class="form-control  x"
                                                            placeholder="Full Name">
                                                        @error('fullName') <span class="text-danger "
                                                            style="margin-left:-5rem">{{ $message }}</span> @enderror
                                                        <span class="validation-text"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="contact-email">
                                                        <i class="flaticon-mail-26"></i>

                                                        <input type="text" id="c-email" wire:model.defer="phone_number"
                                                            class="form-control @error('phone_number')is-invalid  @enderror"
                                                            placeholder="Phone Number">
                                                        @error('phone_number') <span class="text-danger "
                                                            style="margin-left:-5rem">{{ $message }}</span> @enderror
                                                        <span class="validation-text"></span>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="contact-location">
                                                        <i class="flaticon-location-1"></i>
                                                        <!-- <input type="text" id="c-location" wire:model.defer="role" class="form-control @error('role')is-invalid  @enderror" placeholder="User Role"> -->

                                                        <select wire:model.defer="role"
                                                            class="form-control @error('role')is-invalid  @enderror">
                                                            <option>Admin</option>
                                                            <option>User</option>
                                                            <option>Agent</option>
                                                            <option>Super Admin</option>
                                                        </select>
                                                        @error('role') <span class="text-danger "
                                                            style="margin-left:-5rem">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="contact-location">
                                                        <i class="flaticon-location-1"></i>
                                                        <input type="email" id="c-location" wire:model.defer="email"
                                                            class="form-control @error('email')is-invalid  @enderror"
                                                            placeholder="Email">
                                                        @error('email') <span class="text-danger "
                                                            style="margin-left:-5rem">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-location">
                                                        <i class="flaticon-location-1"></i>
                                                        <input type="text" id="c-location" wire:model.defer="address"
                                                            class="form-control @error('address')is-invalid  @enderror"
                                                            placeholder="Address">
                                                        @error('address') <span class="text-danger "
                                                            style="margin-left:-5rem">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button id="btn-edit" wire:click="Updated_user" class="float-left btn">


                                    <span style="width: 25px; height:25px" wire:loading wire:target="Updated_user"
                                        class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                                    <span wire:loading.class="display-none">Update</span>
                                </button>

                                <button class="btn" data-dismiss="modal"> <i class="flaticon-delete-1"></i>
                                    Discard</button>

                            </div>
                        </div>
                    </div>
                </div>




                <!-- // delete modal  -->
                <div class="modal fade modal-notification show" id="standardModal" wire:ignore.self tabindex="-1"
                    aria-labelledby="standardModalLabel" aria-modal="true" role="dialog">
                    <div class="modal-dialog" role="document" id="standardModalLabel">
                        <div class="modal-content">
                            <div class="modal-body text-center">
                                <div class="icon-content danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg>
                                </div>
                                <p class="modal-text"> are your sure you want to delete this user</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                    Discard</button>
                                <button type="button" class="btn btn-danger" wire:click="detedUser">
                                    <span style="width: 25px; height:25px" wire:loading wire:target="Updated_user"
                                        class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                                    <span wire:loading.class="display-none">Delete</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="searchable-items list">
            <div class="items items-header-section">
                <div class="item-content">
                    <div class="">
                        <div class="n-chk align-self-center text-center">
                            <label class="new-control new-checkbox checkbox-primary">
                                <input type="checkbox" class="new-control-input" id="contact-check-all">
                                <span class="new-control-indicator"></span>
                            </label>
                        </div>
                        <h4>Name</h4>
                    </div>
                    <div class="user-email">
                        <h4>Email</h4>
                    </div>
                    <div class="user-location">
                        <h4 style="margin-left: 0;">Location</h4>
                    </div>

                    <div class="user-phone">
                        <h4 style="margin-left: 3px;">Phone</h4>
                    </div>
                    <div class="action-btn">
                    <h4 style="margin-left: 3px;">Actions</h4>
                    </div>
                </div>
            </div>


            @foreach ($users as $user)
            <div class="items">
                <div class="item-content">
                    <div class="user-profile">
                        <div class="n-chk align-self-center text-center">
                            <label class="new-control new-checkbox checkbox-primary">
                                <input type="checkbox" class="new-control-input contact-chkbox">
                                <span class="new-control-indicator"></span>
                            </label>
                        </div>
                        @if ($user->photo != null)
                        <img src="{{ asset($user->photo) }}" style="width: 60px; height: 60px;" alt="avatar">
                        @else
                        <div class="avatar avatar-xl " style="margin-left:1rem;">
                            <span class="avatar-title">
                                <?php 
                                $position = strpos($user->full_name, ' ');
                                if($position != 0)
                                echo substr( $user->full_name, 0, 1). $user->full_name[$position+1];
                                else    echo substr( $user->full_name, 0, 1);

?>
                            <!-- {{ $user->full_name }} -->
                        </span>
                        </div>
                        @endif
                        <div class="user-meta-info">
                            <p class="user-name" data-name="Susan">{{$user->full_name}}</p>
                           
                            @if($user->role == "User")
                            <span class="badge badge-warning"> User </span>
                            @elseif ($user->role == "Admin")
                            <span class="badge badge-primary"> Admin </span>
                            @elseif ($user->role == "Agent")
                            <span class="badge badge-danger"> Agent </span>
                            @elseif ($user->role == "Super Admin")
                            <span class="badge badge-secondary"> Super Admin </span>
                            @endif
                           
                        </div>
                    </div>
                    
                    <div class="user-email">
                        <p class="info-title">Email: </p>
                        <p class="usr-email-addr" data-email="susan@mail.com">{{ $user->email }}</p>
                    </div>
                    <div class="user-location">
                        <p class="info-title">Location: </p>
                        <p class="usr-location" data-location="Miami, USA">{{ $user->address }}</p>
                    </div>
                    <div class="user-phone">
                        <p class="info-title">Phone: </p>
                        <p class="usr-ph-no" data-phone="{{ $user->phone_number }}">{{ $user->phone_number }}</p>
                    </div>
                    <div class="action-btn">
                        @if($user->status == 0)
                        <label class="switch s-icons s-outline  s-outline-info "
                            wire:click="statusApprove({{$user->id}})" style="margin-bottom:-15px">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                        @else
                        <label class="switch s-icons s-outline  s-outline-info "
                            wire:click="statusUnApproved({{$user->id}})" style="margin-bottom:-15px">
                            <input checked type="checkbox">
                            <span class="slider"></span>
                        </label>
                        @endif

                        <svg xmlns="http://www.w3.org/2000/svg" data-toggle="modal" data-target=".user_edit_modal"
                            wire:click="Edit_user({{$user->id}})" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-edit-2 edit">
                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" data-toggle="modal" data-target="#standardModal"
                            wire:click="deleted_id({{$user->id}}) width=" 24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user-minus edit">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        {{ $users->links() }}
    </div>
</div>