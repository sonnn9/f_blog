<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/category.css') }}">
    <title>{{ __('list') }}</title>
</head>
<body>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    
    <div class="m-5"> 
        <h1>List Categories</h1>
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
</body>
</html>
