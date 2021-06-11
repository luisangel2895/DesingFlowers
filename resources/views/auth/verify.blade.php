@extends('layouts.app')

@section('content')
        @if (session('resent'))
            <div class="helper-text" data-error="wrong" data-success="right">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif
        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }},

        <form class="col s12" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <div class="input-field col12 text-center">
                <button class="btn waves-effect waves-light" type="submit" name="action" style="width: 100%">
                    {{ __('click here to request another') }}
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>

@endsection
