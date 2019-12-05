<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>{{ __('create') }}</title>
</head>
<body>

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
        <h1>{{ __('add') }}</h1>
        <form method="post" action="{{ route('categories.store') }}">
            @csrf
            <div class="form-group">  
                <label for="name">{{ __('category_name') }}</label>
                <input type="text" class="col-sm-5 form-control" name="name" placeholder="Enter the category name ..."/>
            </div> 
            <button type="submit" class="btn btn-info">{{ __('btn_add') }}</button>
            <a class="btn btn-success" href="{{ route('categories.index') }}">{{ __('btn_back') }}</a>
        </form>
    </div> 
</body>
</html>
