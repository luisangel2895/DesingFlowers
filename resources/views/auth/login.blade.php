
@extends('layouts.app')

@section('image')
    <div class="col12 text-center">
        <img src="{{ Storage::disk('public') -> url ('/app/logo.png') }}" alt="" class="logo">
    </div>
@endsection

@section('content')
    <div class="container" style="width: 70%;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSywOZq49A9o0fN_vWXU8hBpPZRHdx9jaDxIA&usqp=CAU" alt="" style="margin-left: 120px;">
        <h5>{{ __('Login') }}</h5>
        @csrf
        <div class="row">
            <form method="POST" action="{{ route('login') }}" class="col s12">
                @csrf
                <div class="input-field col12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="helper-text" data-error="wrong" data-success="right">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <label for="email" class="">{{ __('E-Mail Address') }}</label>
                </div>


                <div class="input-field col12">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="helper-text" data-error="wrong" data-success="right">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    <label for="password" class="">{{ __('Password') }}</label>
                </div>

                <div class="input-field col12">
                    <p>
                        <label>
                            <input type="checkbox" class="filled-in" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                            <span>{{ __('Remember Me') }}</span>
                        </label>
                    </p>
                </div>

                <div class="input-field col12 text-center">
                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

                <div class="input-field col12 text-center" style="width: 100%">
                    <button class="btn waves-effect waves-light" type="submit" name="action" style="width: 100%">
                        {{ __('Login') }}
                        <i class="material-icons right">send</i>
                    </button>
                </div>

            </form>
        </div>
        <div class="input-field row text-center" style="width: 100%">
            <div class="row col12 text-center" style="width: 100%; margin-top:-20px;">
                <a href="/register" class="waves-effect waves-light btn" style="width: 96%; margin-left:10px;">Register</a>
            </div>
        </div>
    </div>
@endsection


