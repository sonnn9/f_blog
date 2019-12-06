@extends('layouts.index')
@section('content')
@section('title', __('edit'))

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div> 
@endif 

<div class="m-5">  
    <h1>{{ __('edit') }}</h1>
    <form method="post" action="{{ route('categories.update', $category->id) }}">
        @csrf
        <div class="form-group">  
            <label for="name">{{ __('category_name') }}</label>
            <input type="text" class="col-sm-5 form-control" name="name" value="{{ $category->name }}" placeholder="{{ __('enter_name') }}"/>
        </div> 
        <button type="submit" class="btn btn-info">{{ __('btn_save') }}</button>
        <a class="btn btn-success" href="{{ route('categories.index') }}">{{ __('btn_back') }}</a>
    </form>
</div> 
@endsection
