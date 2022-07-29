<head>
    <title>Bootstrap Laravel Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
    <nav class="navbar navbar-expand-sm navbar-dark" style="background: #76b5c5; ">
      <div class="container py-2">
        <a class="navbar-brand" href="#" style="font-family: 'Poppins', sans-serif">ARTCAFE</a>
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('home')}}">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('order')}} ">Orders</a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="/account">Account</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/setting">Settings</a>
          </li>
          <li class="nav-item ">
              <a class="nav-link" href="{{route('index')}}" onclick="return confirm('Are you sure you want logout?')">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

<div class="container mt-3">
    <br/>
      <h3>Account Page</h3>
      <p>This is your accounts section</p>
    
      <div class ="card mt-5 ml-auto" style="width: 1000px;">

        <form action="{{route('users.update',$user->id)}}" method="post">
          {!! csrf_field()!!}
          @method("PATCH")
        <div class ="card-header bg-primary text-light">EDIT ACCOUNT</div>
    
        <div class="card-body">
        <input type="hidden" class="form-control" id="id" name="id" required value="{{$user->id}}">
                  
                <div class="mb-3 mt-3">
                <label for="text" class="form-label">Enter Name:</label>
                <input type="text" class="form-control" id="name"  name="name" required value="{{$user->name}}">
                <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
              
                <div class="mb-3 mt-3">
                <label for="text" class="form-label">Enter Email:</label>
                <input type="text" class="form-control" id="email" name="email" required value="{{$user->email}}">
                <span class="text-danger">{{$errors->first('email')}}</span>

                <div class="mb-3 mt-3">
                <label for="text" class="form-label">Enter Password:</label>
                <input type="text" class="form-control" id="password" name="password" required value="{{$user->password}}">
                <span class="text-danger">{{$errors->first('password')}}</span>
               
                </label>
                </div>
            <div class ="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class ="btn btn-success" type="submit" name ="update" id="update" value ="UPDATE"/>
            <a href ="{{route('order')}}" class="btn btn-danger ">CANCEL</button></a>
            </div>
          </form>
        