<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>NwkQuizz</title>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin-assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin-assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    <style>

        .custom-pagination .page-link {

                color: rgb(199, 0, 0); /* Change the color to your desired color */
                }


            .custom-pagination .page-link:hover {
                    color: rgb(16, 20, 6);
                    background-color: rgb(35, 56, 4) /* Change the hover color */
                    }
        .profileimg{

                width: 50%;
                border-radius: 50%;
                margin: 0 auto;
                box-shadow: 3px 3px 3px rgb(156, 255, 27);
        }

       .wbtn{
        background-color: rgb(7, 10, 12);
        overflow: hidden;
       }

       .wtext{
        color: rgb(131, 189, 56);

       }
       .redtext{
        color: rgb(241, 86, 86);
       }

       .hover-grow-card {
        transition: transform 0.8s;
    }

    .hover-grow-card:hover {
        transform: scale(1.02);
    }


    .custom-table {
    background-color: transparent;
    width: 100%;


}
.custom-table td, .custom-table th {
    border-bottom: 1px solid #eaeaee; /* Add bottom border to each td and th */
    padding: 10px; /* Add padding for cell content */
}

.btn-buttom{
    border-bottom: 1px solid white;

}

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav wbtn sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.index')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-question"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Quizz <sup class="text-lowercase">MS</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->



                <li class="nav-item ">
                    <a class="nav-link" href="{{route('admin.index')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>ပင်မစာမျက်နှာ</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('student.list')}}">
                        <i class="fa-solid fa-users-line"></i>
                        <span>ကျောင်းသားများ</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('categories')}}">
                        <i class="fas fa-users"></i>
                        <span>မေးခွန်းကဏ္ဍ</span>
                    </a>
                </li>




                <li class="nav-item }">
                    <a class="nav-link" href="{{route('questions')}}">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>မေးခွန်းများ</span>
                    </a>
                </li>

                <li class="nav-item }">
                    <a class="nav-link" href="{{route('options')}}">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>အဖြေများ</span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{route('scores.list')}}">
                        <i class="fa-regular fa-building"></i>
                        <span>ရမှတ်များ</span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{route('admin.posts.list')}}">
                        <i class="fa-regular fa-building"></i>
                        <span>Postများ</span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{route('admin.mail.list')}}">
                        <i class="fa-regular fa-building"></i>
                        <span>Mailများ</span>
                    </a>
                </li>




            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light  topbar mb-1 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b>{{Auth::user()->name}}</b></span>
                                @if (auth()->user()->image)
                                <img class="img-profile rounded-circle object-fit-cover"
                                src="{{asset('storage/profile-images/'. Auth::user()->image)}}">
                                @endif
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('profile.admin')}}">

                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-900"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="{{route('edit.password.admin')}}">
                                    <span style="color: red;">
                                    <i class="fas fa-fw fa-cog mr-2"></i>
                                </span>
                                    Change Password
                                </a>

                                <div class="dropdown-divider"></div>
                                <form action="{{route('logout')}}" method="POST"> @csrf
                                    <button class="dropdown-item" data-toggle="modal" data-target="#logoutModal" onclick="return confirm('Are u sure to logout?')">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 " style="color: red;"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    @yield('content')


                </div>

                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto ">
                      NaingwinKo
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin-assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin-asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin-assets/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('admin-assets/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin-assets/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('admin-assets/js/demo/chart-pie-demo.js')}}"></script>


    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- sweet alert --}}
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
        })
        @if (Session('success'))
            Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}"
            })
        @endif

        // add active on nav-items
        $(document).ready(function () {
            const currentUrl = window.location.href;

            $('.nav-item').each(function () {
                const route = $(this).data('route');
                if (currentUrl.startsWith(route)) {
                    $(this).addClass('active');
                }
            });
        });
    </script>

</body>

</html>
