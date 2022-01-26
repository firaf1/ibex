<div>
<div class="home-details-tb absolute lock-box ">
                <div class="image-box">
                    <img src="{{ asset(Auth::user()->photo) }}" style="width:100%; height:100%; ">
                </div>
                <p class="lock-name"> {{ Auth::user()->full_name }} </p>
                @if ( $errorMessage != null)

                        <div class=""
                            style="background:#f5c6cb; padding:10px; color:#721c24;   width:60%; margin-left:20%; border-radius:5px; margin-bottom:10px;"
                            role="alert">
                      Incorect password 
                        </div>
                        @else
                        <div class="" style="height:3.5rem;  "></div>
                        @endif
                <div class="lock-input">
                    <input type="password" wire:model.defer="password" placeholder="Password" name="" id="">
                </div>
                <div class="button-lock">
                    <button type="submit" wire:click="submit" onclick="LogingButton()">
                        <span class="display-none" id="loading" style="display:none; ">
                        </span>
                        <span id="loginSpan" wire:loading.class="display-none"> Unlock</span>
                    </button>
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
