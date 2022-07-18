<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Laravel Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark text-right">
  <div class="container">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">Home</a>
    </li>
  <li class="nav-item">
      <a class="nav-link active " href="{{route('order')}}">Orders</a>
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
<body>
<div class="container mt-3">
<br/>
  <h3>Order Page</h3>
  <p>This is your orders section</p>

  <div class ="card mt-5 ml-auto" style="width: 1000px;">

    <div class ="card-header bg-primary text-light">ORDER LIST</div>

    <div class="card-body">

    <a href="{{route('add')}}" button type="submit" class="btn btn-success">Add Order</button></a>

    
      <div class="container mt-3 bg-light">
      
        <table class="table">
          <thead>
            <tr>
              <th>Item Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Coca Cola</td>
              <td>Beverages</td>
              <td>35.00</td>
              <td>2</td>
              <td>70</td>
              <td><a href="{{route('edit')}}" class="btn btn-warning">Edit</button></a>
                <a href="{{route('order')}}" class="btn btn-danger">Delete</button></a></td>
            </tr>
            <tr>
              <td>Okinawa Milk Tea</td>
              <td>Milk Tea</td>
              <td>170.00</td>
              <td>1</td>
              <td>170.00</td>
              <td><a href="{{route('edit')}}" class="btn btn-warning">Edit</button></a>
                <a href="{{route('order')}}" class="btn btn-danger">Delete</button></td></a>
            </tr>
           
          </tbody>
        </table>
      </div>
   

</body>
</html>