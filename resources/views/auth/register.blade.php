@extends('layouts.app')

@section('content')
    <div class="container">
        <h5>{{ __('Register') }}</h5>
        @csrf
        <div class="row">
            <form method="POST" action="{{ route('register') }}" class="col s12" enctype="multipart/form-data">
                @csrf
                <div class="input-field col12">
                    <i class="material-icons prefix">person</i>
                    <input id="name" type="text" class="validate @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="helper-text" data-error="wrong" data-success="right">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <label for="name" class="">{{ __('Name') }}</label>
                </div>

                <div class="input-field col12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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


                <div class="file-field input-field col12">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" multiple name="url">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
                    </div>
                </div>


                <div class="input-field col12 text-center">
                    <button class="btn waves-effect waves-light" type="submit" name="action" style="width: 100%">
                        {{ __('Register') }}
                        <i class="material-icons right">send</i>
                    </button>
                </div>

            </form>
        </div>
        <div class="input-field row text-center">
            <div class="row col12 text-center">
                <a href="/login" class="waves-effect waves-light btn">Login</a>
            </div>
        </div>
    </div>


@endsection
