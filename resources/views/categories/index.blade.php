@extends('layouts.index')
@section('content')
@section('title', __('list'))
<link rel="stylesheet" href="{{ asset('css/category.css') }}"> 
<div class="m-5"> 
    <h1>{{ __('list') }}</h1>

    @if(session()->has('message'))
    <div class="alert alert-primary">
        {{ session()->get('message') }}
    </div>
    @endif

    <a class="btn btn-info" href="{{ route('categories.create') }}">{{ __('create') }}</a>
    <ul class="list-group">
        @foreach($categories as $category)
        <li class="list-group-item">
            {{$category->name}}
            <div class="btn-group">
                <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-outline-success">{{ __('btn_edit') }}</a>
                <a href="{{ route('categories.delete', ['id' => $category->id]) }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete ?');">{{ __('btn_delete') }}</a>
            </div>
        </li>
        @endforeach
    </ul>
</div>    
@endsection
