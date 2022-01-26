<div>
    <div class="my-container " id="mymodal">

        <div class="box " id="box">
            <div class="row">
                <div class="col-sm-6 loginIcon" style="height:80vh">
                    <img style="overflow:hidden; width:100%; height:100%;" class="wave" src="MY/login.svg">
                </div>

                <div class="col-sm-6  ">

                    <h3 style="text-align:center; font-weight:bold">Login To your Account</h3>
                    <div class="box1">
                        @if ( $errorMessage != null)

                        <div class=""
                            style="background:#f5c6cb; padding:10px; color:#721c24; width:96%; border-radius:5px; margin-bottom:10px; margin-left:-8%;"
                            role="alert">
                            {{ $errorMessage }}
                        </div>
                        @else
                        <div class="" style="height:3.5rem;  "></div>
                        @endif

                        <div class="input-divone">
                            User Name
                            <div class="input-div @error('userName')is-invalid  @enderror">

                                <input style="padding-left:1.5rem;" placeholder="Phone Number" wire:model.defer="userName" type="text" class="input">
                            </div>
                            @error('userName') <span style="color:red">{{ $message }}</span> @enderror
                        </div>

                        <br>
                        <div class="input-divone">

                            Password
                            <div class="input-div @error('password')is-invalid  @enderror"">

                                        <input wire:model.defer="password" style="padding-left:1.5rem;" type="password" placeholder="Password"
                                class="input">
                            </div>
                            @error('password') <span style="color:red">{{ $message }}</span> @enderror
                        </div>
                        <div class="button-box">
                            <button type="submit" wire:click="login" onclick="LogingButton()">
                                <span class="display-none" id="loading" style="display:none; ">
                                </span>
                                <span id="loginSpan" wire:loading.class="display-none">LOGIN</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>

    <script>
    function LogingButton() {
        document.getElementById('loginSpan').style.display = "none";
        document.getElementById('loading').style.display = "block";
    }



    window.addEventListener('loginDehydrate', event => {
        document.getElementById('mymodal').style.display = "block";
        document.getElementById('box').style.height = "85vh";

    })
    </script>
</div>