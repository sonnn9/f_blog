@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">{{ __('Add Post') }}</h1>
    <div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
    @endif
    @if (session('notification'))
    <div class="alert alert-success">
        {{session('notification')}}
    </div>
    @endif
    <form method="POST" action="">
        @csrf
        <div class="form-group">    
            <label for="first_name">{{ __('Title') }}</label>
            <input type="text" class="form-control" name="Title"/>
        </div>
   
        <div class="form-group">
            <label for="last_name">{{ __('Content') }}</label>
            <input type="text" class="form-control" name="Content"/>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('Add Post') }}</button>
    </form>
</div>
@endsection
