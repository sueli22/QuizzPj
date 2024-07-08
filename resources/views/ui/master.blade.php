<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Quizz</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .pcolor{
        color: rgb(4, 44, 71)
    }
        .border-buttom {
            border-bottom: 1px solid rgb(1, 26, 36);
        }

        .header {
            background-color: white;
        }

        .navmenu ul li a {
            color: black;
        }

        .navmenu ul li a:hover {
            color: gray;
        }

        .btn-getstarted {
            background-color: #000;
            color: white;
        }

        .btn-getstarted:hover {
            background-color: #555;
        }

        .button-color {
           background-color:  rgb(4, 44, 71);
           color: white
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top p-3">
        <div class="container-fluid  container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <img src="{{ asset('ui-images/logo.png') }}" class="rounded-circle" style="width: 40px;height:50px"
                    alt="">
                <span style="color: rgb(13, 87, 136);font-size:1.5rem" class="fw-bold">ကွန်ပျူတာတက္ကသိုလ် ဟင်္သာတ
                </span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}" style="color: rgb(13, 87, 136);font-size:1rem"
                            class="fw-bold {{ Request::is('home') ? 'color: rgb(29, 123, 185)' : '' }}">ပင်မ
                            စာမျက်နှာ<br></a></li>
                    <li><a href="{{ route('aim') }}" style="color:  rgb(13, 87, 136);font-size:1rem"
                            class="fw-bold">ရည်ရွယ်ချက်</a></li>
                    <li><a href="{{ route('learn') }}" style="color: rgb(13, 87, 136);font-size:1rem"
                            class="fw-bold">လေ့လာရန်</a></li>

                    @if (Auth::check())
                        <li><a href="{{ route('user.posts') }}" style="color:  rgb(13, 87, 136);font-size:1rem"
                                class="fw-bold">Posts</a></li>

                        <a class="" href="{{ route('user.categories') }}"
                            style="color:  rgb(13, 87, 136);font-size:1rem" class="fw-bold">Get Started</a>

                        <li class="dropdown"><a href="#"><span> <span class="spanOne"><b
                                            style="color: rgb(13, 87, 136);font-size:1rem">{{ Auth::user()->name }}</b></span></span>
                                <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a class="dropdown-item"
                                        href="@if (auth()->user()->role == 'admin') {{ route('profile.admin') }} @else {{ route('profile') }} @endif">မိမိ့အကောင့်</a>
                                </li>

                                <li><a href="{{ route('history') }}">ဖြေခဲ့သောအမှတ်များ</a></li>
                                <li class="p-3">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item "
                                            onclick="return confirm('Are you sure?')">အကောင့်ထွက်ရန်</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('register') }}" style="color:  rgb(13, 87, 136);font-size:1rem"
                                class="fw-bold">အကောင့်သစ်ဖွင့်ရန်</a></li>
                        <li><a href="{{ route('login') }}" style="color:  rgb(13, 87, 136);font-size:1rem"
                                class="fw-bold">အကောင့်သို့၀င်မည်</a></li>
                    @endif
                    <li><a href="#contact" style="color:  rgb(13, 87, 136);font-size:1rem"
                            class="fw-bold">ဆက်သွယ်ရန်</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <div class="content" style="min-height: 800px">
            @yield('content')
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <footer id="footer" class="" style="background-color: rgb(4, 44, 71);padding:20px">
            <div class="copyright">
                <div class="container text-center">
                    <p style="color:white">© <span>Copyright</span> <strong class="px-1 sitename">Nwk</strong>
                        <span></span></p>
                    <div class="credits">
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
<!-- Your existing HTML content here -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    // Initialize AOS
    AOS.init({
        duration: 1200,
        once: true
    });

    // SweetAlert toast
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
        }
    });

    // Display success message if session success exists
    @if (Session('success'))
        Toast.fire({
            icon: 'success',
            title: "{{ session('success') }}"
        });
    @endif

    // Add active class to nav items based on current URL
    $(document).ready(function() {
        const currentUrl = window.location.href;

        $('.nav-item').each(function() {
            const route = $(this).data('route');
            if (currentUrl.startsWith(route)) {
                $(this).addClass('active');
            }
        });
    });
    @if (session('error'))
        Toast.fire({
            icon: 'error',
            title: "{{ session('error') }}"
        });
    @endif
</script>
