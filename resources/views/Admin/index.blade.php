@extends('admin.master')
@section('content')
<div class="page-wrapper mt-0 ">
    <div class="card   bg-dark text-white">
        <img class="w-100" src="{{route('ad.jpg')}}" alt="Card image" style="height: 640px; filter: blur(80px); object-fit: cover;">
        <div class="card-img-overlay">
    <!-- Page Content -->
    <div class="content container">
    <div class="container-fluid">

    <!-- Page Heading -->
    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0  font-weight-bold ">{{$today}}</h1>
    </div> --}}

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <a href="" class="row no-gutters align-items-center text-decoration-none">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:green">
                                Student</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total -50</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users" style="color: rgba(51, 32, 95, 0.26); width :64px"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <a href="" class="row no-gutters align-items-center text-decoration-none">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:green">
                                Student</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total -50</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users" style="color: rgb(41, 37, 77); width :64px"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <a href="" class="row no-gutters align-items-center text-decoration-none">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:green">
                                Student</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total -50</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users" style="color: rgb(50, 23, 75); width :64px"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <a href="" class="row no-gutters align-items-center text-decoration-none">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:rgb(31, 25, 80)">
                                Student</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total -50</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users" style="color: rgb(39, 36, 63); width :64px"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Student</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header text-gray">ရှင်းလင်းချက်:</div>
                            <a class="dropdown-item" href="#">အငယ်တန်းစာရေး / ဒုလထကွန်ပျူတာ/ငွေကိုင်(၄) တို့ သည် လစာအတူရသည်</a>
                            <a class="dropdown-item" href="#">အကြီးတန်းစာရေး /လထကွန်ပျူတာလုပ်ဆောင်ရေးမှူး/ငွေကိုင်(၃) တို့သည် လစာအတူရသည်</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"></a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold " style="color: #006400">Quizz</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header "></div>
                            <a class="dropdown-item  text-muted" href="#">NaingWinko</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"></a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-2 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary "></i> student
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> category
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i>Admin
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-danger "></i>Performance
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    </div></div>
@endsection
