<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css?<?php echo time(); ?>">
</head>
<body>
    <div class="reg-container">
        <div class="row">
        <form action="{{route('login-user')}}" method="post">
        @csrf
        <h3>Log-in account</h3>
        @if(Session::has('Success'))
            <div class="alert alert-success">{{Session::get('Success')}}</div>
            @endif
            @if(Session::has('Fail'))
            <div class="alert alert-danger">{{Session::get('Fail')}}</div>
            @endif
            
            <div class="form-group">
        <input type="email" class="form-control" placeholder="Enter your email address" name="email" value="{{old('email')}}">
        <span class="text-danger">@error('email') {{$message}} @enderror</span>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Enter your password" name="password" value="">
        <span class="text-danger">@error('password') {{$message}} @enderror</span>
    </div>
        <input type="submit" name="submit" value="login" class="form-btn">
        <p>Don't have an account? <a href="registration">Register now</a></p>
    </div>    
</body>
</html>