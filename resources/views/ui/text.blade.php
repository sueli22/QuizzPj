<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container pt-3" style=" border-bottom: 2px solid #626f8b;">
        <a class="navbar-brand" href="index.html">
          <div><img src="{{asset('ui-images/q33.jpg')}}" style="width:50px;height:50px" alt="Brand Logo" class="rounded-circle"></div>
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
