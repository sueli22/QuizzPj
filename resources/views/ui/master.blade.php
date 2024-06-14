<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>NaingWinKO</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{asset('user/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('user/css/responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('user/css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('user/css/style.css.map')}}" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

  <!-- jQuery -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body, html {
      height: auto;
      margin: 0;
      background-color: #f0f8ff;
    }

    .header_section {
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
      background-color: #f0f8ff;/* Ensure the background is opaque */
    }

    .content {
      margin-top: 100px; /* Adjust according to your navbar height */
      min-height: 70vh;
    }

    .custom-table {
      background-color: transparent;
      width: 100%;
    }

    .custom-table td, .custom-table th {
      border-bottom: 1px solid #6e77c4; /* Add bottom border to each td and th */
      padding: 10px; /* Add padding for cell content */
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section starts -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3" style=" border-bottom: 2px solid #626f8b;">
          <a class="navbar-brand" href="index.html">
            <div><img src="{{asset('ui-images/q33.jpg')}}" style="width:80px;height:80px" alt="Brand Logo" class="rounded-circle"></div>
            <div class="mt-3 ms-2">
              <a class="navbar-brand fst-italic" href="{{url('/')}}" style="color:rgb(14, 47, 48)"><b>Quizz<sup>MS</sup></b></a>
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('home')}}" style="color:rgb(14, 47, 48); font-family: 'Open Sans', sans-serif; font-weight: bold;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}" style="color:rgb(14, 47, 48); font-family: 'Open Sans', sans-serif; font-weight: bold;">About</a>
                </li>
                @if(Auth::check())
                <li class="nav-item">
                  <a class="nav-link" href="{{route('user.categories')}}" style="color:rgb(14, 47, 48); font-family: 'Open Sans', sans-serif; font-weight: bold;">Category</a>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{route('login')}}" style="color:rgb(14, 47, 48); font-weight: bold;">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('register')}}" style="color:rgb(14, 47, 48); font-weight: bold;">Register</a>
                </li>
                @endif
                <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}" style="color:rgb(14, 47, 48); font-weight: bold;">Contact us</a>
                </li>
                @if(Auth::check())
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:rgb(14, 47, 48); font-family: 'Open Sans', sans-serif; font-weight: bold;">
                    {{Auth::user()->name}}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ Auth::user()->role == 'admin' ? route('profile.admin') : route('home') }}">Profile</a>
                    <a class="dropdown-item" href="{{route('history')}}">History</a>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="dropdown-item mt-2" onclick="return confirm('Are you sure?')">အကောင့်ထွက်ရန်</button>
                    </form>
                  </div>
                </li>
                @endif
              </ul>
              <div class="user_option">
                <a href="">
                  <img src="images/user.png" alt="">
                </a>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <div class="content">
      @yield('content')
    </div>

    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section p-5 mt-5">
      <p>
        &copy; 2024 All Rights Reserved By
        <a href="https://html.design/">Naing Win Ko</a>
      </p>
    </section>
    <!-- footer section -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Your custom scripts -->
    <script>
      // Initialize any custom scripts here, like Owl Carousel
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
          loop: true,
          margin: 10,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              nav: true
            },
            600: {
              items: 3,
              nav: false
            },
            1000: {
              items: 5,
              nav: true,
              loop: false
            }
          }
        });
      });
    </script>
  </body>
</html>
