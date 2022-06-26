<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css?<?php echo time(); ?>">
</head>
<body>
    <div class="reg-container">
        <div class="row">
        <form action="{{route('update-data',$user->id)}}" method="post">
        @csrf
        @method('PUT')
        <h3>Update account</h3>
        @if(Session::has('Success'))
            <div class="alert alert-success">{{Session::get('Success')}}</div>
            @endif

      
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter your name" name="name" value="{{$user->name}}">
        <span class="text-danger">@error('name') {{$message}} @enderror</span>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Enter your email address" name="email" value="{{$user->email}}">
        <span class="text-danger">@error('email') {{$message}} @enderror</span>
    </div>

    <input type="submit" name="submit" value="Done edit" class="form-btn">
    
    <a href="{{'/userstable'}}" class="">Cancel edit</a>
    </div>    
</body>
</html>