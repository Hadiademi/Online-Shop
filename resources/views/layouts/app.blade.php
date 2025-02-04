<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</style>

    <title>Document</title>
</head>
<body class="bg-dark text-light">
<nav class="navbar navbar-expand-lg bg-primary ">
  <div class="container">
    <a class="navbar-brand text-light" href="#">HA-TECH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="{{route('cart.index')}}">Cart</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="{{route('shop')}}">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="{{route('orders.index')}}">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="{{route('products.create')}}">Create</a>
        </li>
        
            @if (Route::has('login'))
               
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link text-white">Dashboard</a>
                        </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link text-white">Log in</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-white">Register</a>
                        </li>
                        @endif
                    @endauth
               
             
    <li class="nav-item ps-5 ms-5">
       <span class="nav-link text-warning ps-5 ms-5">Welcome, {{ optional(auth()->user())->name }}</span>

    </li>
      @endauth
      
      </ul>
     
        <form class="d-flex" role="search" action="{{ route('search') }}" method="GET">
          <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>

         <!-- Logout Button at the Very End -->
         <li class="nav-item" style="list-style-type:none">
      @auth
        <form method="POST" action="{{ route('logout') }}" class="ms-3">
          @csrf
          <button type="submit" class="btn btn-outline-dark">Logout</button>
        </form>
      @endauth
      </li>

    </div>
  </div>
</nav>




<div class="container">
    @yield('content')
</div>
    
</body>
</html>
