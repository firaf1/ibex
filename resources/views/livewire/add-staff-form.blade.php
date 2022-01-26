<div>
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Add Staff </header>
            </div>
            <div class="card-body " id="bar-parent">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="simpleFormEmail">Name </label>
                            <input type="text" wire:model.defer="name" class="form-control" placeholder="Name ">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="simpleFormEmail">Phone Number </label>
                            <input type="number" wire:model.defer="phoneNumber" class="form-control"
                                placeholder="Phone Number ">
                            @error('phoneNumber') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="simpleFormEmail">Role</label>
                            <select wire:model.defer="role" class="form-control">
                                <option value="">Select a role</option>
                                <option value="Sales">Sales Official</option>
                                <option value="Store">Store Official</option>
                                <option value="Cashery">Cashery</option>
                            </select>
                            @error('role') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="simpleFormPassword">E-mail</label>
                            <input type="email" wire:model.defer="email" class="form-control" placeholder="E-mail">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="simpleFormEmail">Password </label>
                                    <input type="password" wire:model.defer="password" class="form-control"
                                        placeholder="Password ">
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="simpleFormEmail">Confirm password</label>
                                    <input type="password" wire:model.defer="password_confirmation" class="form-control"
                                        placeholder="Confirm Password ">
                                    @error('password_confirmation') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="simpleFormEmail">Contact person Name </label>
                                    <input type="text" wire:model.defer="cotactName" class="form-control"
                                        placeholder="Phone Number ">
                                    @error('cotactName') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="simpleFormEmail">Contact person Phone </label>
                                    <input type="number" wire:model.defer="contactPhone" class="form-control"
                                        placeholder="Name ">
                                    @error('contactPhone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <button type="button" wire:click="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-md-4" style="height:25rem; overflow:hidden;   border-radius:10px;">
                        @if(!$isUpload)
                        <img src="back/img/no-image.png"
                            style="width:76%; height:70%; border-radius:50%; border: 2px solid #188ae2;" alt=""
                            srcset="">

                        @else
                        <img src="{{ $photo->temporaryUrl() }}"
                            style="width:76%; height:70%; border-radius:50%; border: 2px solid #188ae2;" alt=""
                            srcset="">
                        @endif

                        <input type="file" wire:model.defer="photo" name="" id="photo" hidden>
                        <label for="photo" style="margin-left:35%; position:relative; top:-3rem;  ">
                            <span
                                class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored margin-right-10"
                                data-upgraded=",MaterialButton">
                                <i class="material-icons">add</i>
                            </span>
                        </label>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>