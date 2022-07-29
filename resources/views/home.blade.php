<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body style="font-family: 'Poppins', sans-serif">

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

    <div class="container-fluid d-flex  flex-column justify-content-center  align-items-center first-container" style="background-image: url({{asset('images/bg2.jpg')}});">
      <h3 class="text-white mt-1 mb-5">Discover the best food & drinks in Davao City</h3>
      <button type="button" class="btn btn-outline-light mt-5">Discover Now</button>
    </div>

    <div class="container mt-5">
      <h1>Explore</h1>
      <p >Explore curated lists of top restaurants, cafes, pubs, and bars in Davao, based on trends</p>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 ">
          <div class="card shadow">
            <img class="card-img-top" src="{{asset('images/dining.jpg')}}" alt="Card image" style="height: 200px">
            <div class="card-body">
              <a href="#" class="text-decoration-none text-dark"><h4 class="card-title">Dining</h4></a>
              <p class="card-text"> View the city's favourite dining venues</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 ">
          <div class="card shadow">
            <img class="card-img-top" src="{{asset('images/club.jpg')}}" alt="Card image" style="height: 200px">
            <div class="card-body">
              <a href="#" class="text-decoration-none text-dark"><h4 class="card-title">Nightlife and Clubs</h4></a>
              <p class="card-text">Explore the city’s top nightlife outlets</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5 mb-5">
      <h1>Collections</h1>
      <p >Explore curated lists of top restaurants, cafes, pubs, and bars in Davao, based on trends</p>
      <div class="row">
        <div class="col-lg-3">
          <div class="card shadow">
            <img class="card-img-top" src="{{asset('images/dining2.jpg')}}" alt="Card image" style="height: 350px">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h4 class="card-title text-white text-shadow">Trending This Week</h4>
              <p class="card-text text-white text-shadow">30 places</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card shadow">
            <img class="card-img-top" src="{{asset('images/dining2.jpg')}}" alt="Card image" style="height: 350px">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h4 class="card-title text-white text-shadow">Best of Davao</h4>
              <p class="card-text text-white text-shadow">12 places</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card shadow">
            <img class="card-img-top" src="{{asset('images/cake.jpg')}}" alt="Card image" style="height: 350px">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h4 class="card-title text-white text-shadow">Delight Cheesecake</h4>
              <p class="card-text text-white text-shadow">30 places</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card shadow">
            <img class="card-img-top" src="{{asset('images/bake.jpg')}}" alt="Card image" style="height: 350px">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h4 class="card-title text-white text-shadow">Artisan bakeries</h4>
              <p class="card-text text-white text-shadow">30 places</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    
      <!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0 " style="background: #76b5c5;">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white">FB.</h5>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Bootstrapious.com</a></p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Get started</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Get started</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Newsletter</h5>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <form action="#">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    
  </body>
</html>