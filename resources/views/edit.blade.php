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

<div class="container mt-3">
    <br/>
      <h3>Order Page</h3>
      <p>This is your orders section</p>
    
      <div class ="card mt-5 ml-auto" style="width: 1000px;">
    
        <div class ="card-header bg-primary text-light">EDIT ORDER</div>
    
        <div class="card-body">

        
            <form action="/action_page.php">
        
                <div class="mb-3 mt-3">
                <label for="name" class="form-label">Select Category:</label>
                <select class="form-select" aria-label="">
                    <option selected>Category</option>
                    <option value="1">Tea</option>
                    <option value="2">Beverages</option>
                    <option value="3">Food</option>
                  </select>
                </div>
                
                <div class="mb-3 mt-3">
                <label for="text" class="form-label">Enter Item Name:</label>
                <input type="text" class="form-control" id="itemname"  name="itemname">
                </div>
              
                <div class="mb-3 mt-3">
                <label for="text" class="form-label">Enter Item Price:</label>
                <input type="text" class="form-control" id="itemprice" name="itemprice">

                <div class="mb-3 mt-3">
                <label for="text" class="form-label">Enter Item Quantity:</label>
                <input type="text" class="form-control" id="itemquantity" name="itemquantity">

               
                </label>
                </div>
            <div class ="float-end mb-5">
            <button type="submit" class="btn btn-success">Edit</button>
            <button type="submit" class="btn btn-danger ">Cancel</button>
            </div>
          </form>
        