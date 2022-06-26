<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css?<?php echo time(); ?>">
</head>
<body>
<ul class="cards">
  <li>
    <a href="" class="card">
      <img src="img/admin.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="img/admin.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">{{$data->name}}</h3>            
            <span class="card__status">{{$data->email}}</span>
          </div>
        </div>
        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
      </div>
    </a>      
  </li>
    <div class="container">
        <div class="content">
            <h3>Hi! <span></span></h3>
            <h1><span>{{$data->name}}</span></h1>
            <p>this is an dashboard page</p>
            <a href="{{'logout'}}" class="btn">Logout</a>
            <a href="{{'userstable'}}" class="btn">Users management</a>
    </div>
    

</body>
</html>