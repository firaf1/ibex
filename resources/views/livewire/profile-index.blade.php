<div>
<div class="row    layout-top-spacing"  >
                    <div class="col-lg-12">
                    <div class="layout-px-spacing">

                <div class="row layout-spacing">

                    <!-- Content -->
                    <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing 1111111111">

                        <div class="user-profile layout-spacing">
                            <div class="widget-content widget-content-area">
                                <div class="d-flex justify-content-between">
                                    <h3 class="">Profile</h3>
                                    <a href="user_account_setting.html" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                </div>
                                <div class="text-center user-info">
                                @if (Auth::user()->photo != null)
                        <img src="{{ asset(Auth::user()->photo) }}" style="width: 60px; height: 60px;" alt="avatar">
                        @else
                        <div class="avatar avatar-xl " style="margin-left:1rem;">
                            <span class="avatar-title">
                                <?php 
                                $position = strpos(Auth::user()->full_name, ' ');
                                if($position != 0)
                                echo substr(Auth::user()->full_name, 0, 1).Auth::user()->full_name[$position+1];
                                else    echo substr(Auth::user()->full_name, 0, 1);

?> 
                        </span>
                        </div>
                        @endif

                                  
                                    <p class="">{{ Auth::user()->full_name }}</p>
                                </div>
                                <div class="user-info-list">

                                    <div class="">
                                        <ul class="contacts-block list-unstyled">
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg> {{ Auth::user()->role }}
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>{{Auth::user()->created_at->diffForHumans()}}
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>New York, USA
                                            </li>
                                            <li class="contacts-block__item">
                                                <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>{{Auth::user()->email}}</a>
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> {{Auth::user()->phone_number}}
                                            </li>
                                             
                                        </ul>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <div class="education layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">Password</h3>
                                <div class="timeline-alter">
                                     
                                <div class="col-12 mt-2">
                            <p>Old Password </p> 
                            @if($oldPasswordMessage != null) 
<p class="text-danger"> {{ $oldPasswordMessage }}</p>
                                <input wire:model.defer="password" type="password" class="form-control is-invalid " placeholder="New Password">
                                @error('password') <span class="text-danger " >{{ $message }}</span> @enderror
                            @else 
                                <input wire:model.defer="password" type="password" class="form-control @error('password')is-invalid  @enderror" placeholder="Old Password">
                                @error('password') <span class="text-danger " >{{ $message }}</span> @enderror
                                @endif
                            </div>
                        @if($confirmPasswordMessage != null)

                            <div class="col-12 mt-2">
                            <p>New Password </p> 
                       
                            <input wire:model.defer="newPassword" type="password" class="form-control is-invalid  " placeholder="New Password">
                            <span class="text-danger " >{{ $confirmPasswordMessage }}</span>  
                               
                            </div>
                            <div class="col-12 mt-2">
                            <p>Confirm Password </p> 
                                <input wire:model.defer="password_confirmation" type="password" class="form-control is-invalid  " placeholder="Confirm Your Password">
                                @error('password_confirmation') <span class="text-danger " >{{ $message }}</span> @enderror
                            </div>
@else 
<div class="col-12 mt-2">
                            <p>New Password </p> 
                       
                            <input wire:model.defer="newPassword" type="password" class="form-control @error('newPassword')is-invalid  @enderror" placeholder="New Password">
                                @error('newPassword') <span class="text-danger " >{{ $message }}</span> @enderror
                               
                            </div>
                            <div class="col-12 mt-2">
                            <p>Confirm Password </p> 
                                <input wire:model.defer="password_confirmation" type="password" class="form-control @error('password_confirmation')is-invalid  @enderror" placeholder="Confirm Your Password">
                                @error('password_confirmation') <span class="text-danger " >{{ $message }}</span> @enderror
                            </div>
                            @endif




                            <button wire:click="password_update()" class="btn btn-primary btn-block mt-4">
                                
                            <span style="width: 25px; height:25px" wire:loading wire:target="password_update"
                            class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                        <span wire:loading.class="display-none">Update Password</span>
                            
                            </button>
                                </div>
                            </div>
                        </div>

                        

                    </div>

                    <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
                        <div class="widget-content widget-content-area">
                            
                        <div class="form-row mb-4">
                            <div class="col">
                                <p> Full Name </p>
                                <input wire:model.defer="full_name" type="text" class="form-control @error('full_name')is-invalid  @enderror" placeholder="Full Name">
                                @error('full_name') <span class="text-danger " >{{ $message }}</span> @enderror
                            </div>
                            <div class="col">
                            <p>Phone Number </p>
                                <input type="text" wire:model.defer="phone_number" class="form-control  @error('phone_number')is-invalid  @enderror" placeholder="Phone Number ">
                                @error('phone_number') <span class="text-danger " >{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col-12">
                                <p>Email</p>
                                <input wire:model.defer="email" type="text" class="form-control @error('email')is-invalid  @enderror" placeholder="Email">
                                @error('email') <span class="text-danger " >{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 mt-2">
                            <p>Address </p> 
                                <input wire:model.defer="address" type="text" class="form-control @error('address')is-invalid  @enderror" placeholder="address">
                                @error('address') <span class="text-danger " >{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 mt-2 ">
                            <p>Profile Picture </p>
                            <div class="form-control">
                            <label for="profilePic"> Choose Picture .....<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg> </label>
                            </div>
                                <input wire:model.defer="picture" type="file" id="profilePic"  hidden class="form-control" placeholder="address">
                                @error('picture') <span class="text-danger " >{{ $message }}</span> @enderror
                            </div>
                        </div>
                    
                    
                    
                        <button wire:click="update"  class="btn btn-primary">Update Profile</button>
                    
                    </div>

                    </div>

                </div>
</div>
