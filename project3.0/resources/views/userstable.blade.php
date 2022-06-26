<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
</head>
<body>
<table class="table">
        <thead>
        <a href="{{'dashboard'}}" class="btn">Back</a>
        <tr>
          <h1 class="display"><th colspan="6">users database</th></h1>
          @if(Session::has('Success'))
            <div class="alert alert-success">{{Session::get('Success')}}</div>
            @endif
            @if(Session::has('Successs'))
            <div class="alert alert-success">{{Session::get('Successs')}}</div>
            @endif
          </tr>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
            
          </tr>
        </thead>
        @foreach($users as $user)
        <tbody>
          <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['role']}}</td>
            <td>
		<a href="{{ url('edit/'.$user->id)}}" class="edit">Edit</a>
          </td>
          <td>
		<a href="{{ url('delete-data/'.$user->id)}}" class="delete">Delete</a>
          </td>
          </tr>
        </tbody>
        @endforeach
</table>
</body>
</html>