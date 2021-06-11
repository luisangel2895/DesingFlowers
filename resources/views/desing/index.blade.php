@extends('layouts.app')

@section('content')

    <div class="container align-content-center">
        <div class="col12 text-center">
            <img src="{{ Storage::disk('public') -> url ('/app/logo.png') }}" alt="" style="width: 40%">
        </div>
        <div class="col12 text-center" style="margin-top: 10px">
            <a class="waves-effect waves-light btn-large red" style="color: white;font-weight: bold" href="desings/create"><i class="material-icons left">add</i>New Desing</a>
        </div>

    </div>
    <div class="row">
        <div class="col12" style="padding-left:10%">
            <h4> My Desings </h4>
        </div>
        <br>
    </div>

    @if(count($desings))
    @foreach($desings as $desing)
    <div class="row col12 center-align">
        <div class="card" style="width: 60%;margin:0 auto;">
            <div class="card-image waves-effect waves-block waves-light">
                <img src="{{ Storage::disk('public') -> url ( $desing -> url ) }}" width="100%"  height="200px">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">{{ $desing -> title }}<i class="material-icons right">more_vert</i></span>
                <p style="font-style: italic">{{ $desing -> created_at }}</p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">{{ $desing -> title }}<i class="material-icons right">close</i></span>
                <p>{{ $desing -> description }}</p>
            </div>
        </div>
    </div>
    @endforeach
    @else
        <div class="spam spam-alert">Any Desings :( </div>
    @endif


@endsection
