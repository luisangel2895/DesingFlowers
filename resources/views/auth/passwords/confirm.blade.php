@extends('layouts.app')

@section('content')
    <div class="container">
        <h5>{{ __('Confirm Password') }}</h5>
        {{ __('Please confirm your password before continuing.') }}

        <div class="row">
            <form method="POST" action="{{ route('password.confirm') }}" class="col s12">
                @csrf
                <input type="hidden" name="token" value="{{ $token ?? '' }}">

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
                <div class="input-field col12 text-center">
                    <button class="btn waves-effect waves-light" type="submit" name="action" style="width: 100%">
                        {{ __('Confirm Password') }}
                        <i class="material-icons right">send</i>
                    </button>
                    @if (Route::has('password.request'))
                        <div class="input-field col12 text-center">
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
