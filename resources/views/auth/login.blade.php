{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>BLDC LOGIN</title>
	<!-- icons -->
	<link href="{{ asset('back/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('back/plugins/iconic/css/material-design-iconic-font.min.css')}}">
	<!-- bootstrap -->
	<link href="{{ asset('back/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="{{ asset('back/css/pages/extra_pages.css')}}">
	<!-- favicon -->
	<link rel="shortcut icon" href="{{ asset('back/img/favicon.ico')}}" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form"  method="POST" action="{{ route('login') }}">
                    @csrf
                    <div style="text-align: center">
                        <img src="{{ asset('front/images/logo-icon.png')}}" alt="Logo" />
                    </div>
					<span class="login100-form-title p-b-34 p-t-27">
						BLDC - Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter Email">
						<input class="input100" type="email" name="email" placeholder="Email" id="email"  type="email" name="email" value="{{old('email')}}" required autofocus>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" placeholder="Password" id="password" type="password" name="password" required autocomplete="current-password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="{{ asset('back/plugins/jquery/jquery.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('back/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('back/js/pages/extra_pages/login.js') }}"></script>
	<!-- end js include path -->
</body>
</html>