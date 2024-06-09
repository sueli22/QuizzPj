<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>QuizzNwk</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .content {
            min-height: 70vh;
            /* Minimum height of the viewport */
        }

        nav {
            background-color: rgb(17, 63, 90);
            box-shadow: 3px 1px 1px rgb(237, 240, 240);
            position: relative;
        }

        .navbar-brand img {
            height: 70px;
            /* Adjust the height as needed */
            width: 70px;
            /* Maintain aspect ratio */
        }

        .navbar-toggler {
            background-color: rgb(15, 89, 92);
        }

        .dropdown-menu {
            background-color: rgb(15, 89, 92);
            color: white;
        }

        .green {
            background-color: rgb(15, 89, 92);
        }

        .dropdown-item {
            color: rgb(255, 255, 255);
        }

        .dropdown-item:hover {
            background-color: rgb(191, 204, 188);
        }


        .fixed-top-bar {
            width: 100%;
            height: 80px;
            line-height: 20px;
            text-align: center;
        }

        green {
            background-color: rgb(45, 211, 59);
        }

        .profileimg {

            width: 50%;
            border-radius: 50%;
            margin: 0 auto;
            box-shadow: 3px 3px 3px rgb(156, 255, 27);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-xl sticky-top position-fixed fixed-top-bar  p-5">
        <div class="container-fluid">
            <div class="d-flex justify-content-center navbar-brand">
                <div><img src="{{ asset('ui-images/t2.jpg') }}" alt="Brand Logo" class="rounded-circle"></div>
                <div class="mt-3 ms-2">
                    <a class="navbar-brand text-white fst-italic" href=""><b>Quizz <sup>for student</sup>
                        </b></a>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('home') }}"
                            class="nav-link me-2 text-white fw-bold"><b>Home</b></a></li>
                    <li class="nav-item"><a href="{{ route('about') }}"
                            class="nav-link me-2 text-white  fw-bold"><b>About</b></a></li>

                    @if (!Auth::check())
                        <li class="nav-item"><a href="{{ route('login') }}"
                                class="nav-link me-2 text-white fw-bold"><b>Login</b></a></li>
                        <li class="nav-item "><a href="{{ route('register') }}"
                                class="nav-link me-2 text-white fw-bold"><b>Register</b></a></li>
                    @else
                        <li class="nav-item"><a href=""
                                class="nav-link me-2 text-white fw-bold"><b>Category</b></a></li>
                        <li class="nav-item "><a href=""
                                class="nav-link me-2 text-white fw-bold"><b>Score</b></a></li>
                    @endif
                    <li class="nav-item"><a href="{{ route('contact') }}"
                            class="nav-link me-2 text-white fw-bold"><b>ContactUs</b></a></li>


                    @if (Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="spanOne"><b>{{ Auth::user()->name }}</b></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="@if (auth()->user()->role == 'admin') {{route('admin.index')}} @else {{route('home')}} @endif">Account</a>
                                <li>
                                    <form method="POST" action="{{route('logout')}}">
                                        @csrf
                                        <button type="submit" class="dropdown-item mt-2"
                                            onclick="return confirm('Are you sure?')">Logout</button>
                                    </form>
                                </li>

                            </ul>
                        </li>
                    @endif
            </div>
        </div>
    </nav>

    <div class="content mt-5 ">
        @yield('content')
    </div>


    <footer class="text-center py-5" style="  background-color:  rgb(40, 8, 61);">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white">© 2024 Computer University Thesis Project</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            offset: 120, // Offset (in px) from the original trigger point
            delay: 400, // Delay (in ms) before the animation starts
            duration: 300, // Duration (in ms) of the animation
            easing: 'ease', // Easing function
            once: false, // Whether animation should happen only once - while scrolling down
            mirror: false, // Whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // Defines which position of the element regarding to window should trigger the animation
        });

        // jQuery to handle the navbar collapse
        $('#navbarSupportedContent').on('shown.bs.collapse', function() {
            $('.content').show();
        });
        $('#navbarSupportedContent').on('hidden.bs.collapse', function() {
            $('.content').hide();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <script>
        // sweet alert
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        @if (Session('success'))
            Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}"
            });
        @endif

        // add active on nav-items
        $(document).ready(function() {
            const currentUrl = window.location.href;

            $('.nav-item').each(function() {
                const route = $(this).data('route');
                if (currentUrl.startsWith(route)) {
                    $(this).addClass('active');
                }
            });
        });
    </script>

</body>

</html>
