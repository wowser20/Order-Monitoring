<!DOCTYPE html>
<html lang="en">
<head>
  <title>Setting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<style>
  body {
      margin: 0;
      font-family: "Source Sans Pro",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: left;
      background-color: #fff;
  }
  </style>
<body>
  <!doctype html>
  <html lang="en">
    <head>
      <title>Home</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
    </head>
    <body style="font-family: 'Poppins', sans-serif">
  
      <nav class="navbar navbar-expand-sm navbar-dark" style="background: #76b5c5; ">
        <div class="container py-2">
          <a class="navbar-brand" href="#" style="font-family: 'Poppins', sans-serif">ARTCAFE</a>
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('order')}} ">Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/account">Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/setting">Settings</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('index')}}" onclick="return confirm('Are you sure you want logout?')">Logout</a>
            </li>
          </ul>
        </div>
      </nav>

<div class="container mt-3">
<br/>
  <h3>Setting Page</h3>
  <p>This is your settings section</p>

  <div class ="card mt-5 ml-auto" style="width: 1200px;">

    <div class ="card-header bg-primary text-light">CATEGORY LIST</div>
    

    <div class="card-body">
      <a href="{{route('categories.create')}}" button type="submit" class="btn btn-success">Add Categories</button></a>

      <div class="container mt-3 bg-light">

        
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Category Name</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <td>{{$category->name}}</td>
              <td>
                <form action ="{{route('categories.destroy',$category->id)}}" method ="POST"
                  onsubmit="return confirm('Are you sure you want to delete this order?');">
                <a href="{{route('categories.edit',[$category->id])}}" class="btn btn-warning">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </td>
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
</div>
</body>
</html>


</div>



</body>
</html>