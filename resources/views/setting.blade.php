<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Laravel Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark text-right">
  <div class="container">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" href="{{route('home')}}">Home</a>
      </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('order')}}">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('account')}}">Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('setting')}}">Settings</a>
      </li>


    </ul>
  </div>
</nav>

<div class="container mt-3">
<br/>
  <h3>Setting Page</h3>
  <p>This is your settings section</p>




</div>



</body>
</html>