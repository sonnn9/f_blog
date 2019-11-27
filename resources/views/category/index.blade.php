<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>List Categories</title>
</head>
<body>
    <h1 style="margin: 20px;">List Categories</h1>
    <ul class="list-group list-group-flush" style="margin: 10px;">
        @foreach($categories as $category)
        <li class="list-group-item">{{$category->name}}</li>
        @endforeach
    </ul>
    <a class="btn btn-primary" herf="">Add</a>
    <button type="button" class="btn btn-success">Edit</button>
    <button type="button" class="btn btn-danger">Delete</button>
</body>
</html>
