@extends('layouts.app')

@section('content')
    <div class="container">
        <h4>Create a new Design</h4>
        <form method="POST" action="/desings" class="col s12" enctype="multipart/form-data">
            @csrf

            <div class="input-field col12">
                <i class="material-icons prefix">person</i>
                <input id="title" type="text" class="validate" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                <label for="title" class="">Title</label>
            </div>

            <div class="input-field col12">
                <i class="material-icons prefix">person</i>
                <input id="description" type="text" class="validate" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                <label for="description" class="">Description</label>
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
                    Create
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>

@endsection