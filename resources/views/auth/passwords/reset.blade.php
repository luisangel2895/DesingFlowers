@extends('layouts.app')

@section('content')
    <div class="container">
    <h5>{{ __('Reset Password') }}</h5>
    <div class="row">
        <form method="POST" action="{{ route('password.update') }}" class="col s12">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="input-field col12">
                <i class="material-icons prefix">email</i>
                <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="helper-text" data-error="wrong" data-success="right">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <label for="email" class="">{{ __('E-Mail Address') }}</label>
            </div>

            <div class="input-field col12">
                <i class="material-icons prefix">lock</i>
                <input id="password" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="helper-text" data-error="wrong" data-success="right">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <label for="password" class="">{{ __('Password') }}</label>
            </div>

            <div class="input-field col12">
                <i class="material-icons prefix">lock</i>
                <input id="password-confirm" type="password" class="validate" name="password_confirmation" required autocomplete="new-password">
                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

            </div>

            <div class="input-field col12 text-center">
                <button class="btn waves-effect waves-light" type="submit" name="action" style="width: 100%">
                    {{ __('Reset Password') }}
                    <i class="material-icons right">send</i>
                </button>
            </div>

        </form>
    </div>
    </div>

@endsection
