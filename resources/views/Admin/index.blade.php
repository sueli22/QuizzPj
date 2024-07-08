@extends('admin.master')
@section('content')
<div class="page-wrapper mt-0 ">
    <div class="card   bg-dark text-white">
        <img class="w-100"  src="{{ asset('assets/img/2.jpg')}}" alt="Card image" style="height: 800px; filter: blur(80px); object-fit: cover;">
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
        <div style="height:100px">

        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <a href="" class="row no-gutters align-items-center text-decoration-none">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:rgb(70, 80, 70)">
                               <a href="{{route('student.list')}}" class="text-decoration-none text-black">ကျောင်းသားဦးရေ</a> </div>
                            <div class="font-weight-bold  text-uppercase mb-1"  style="color:rgb(70, 80, 70)"><p >{{count($students)}} ဦး</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users" style="color: rgba(80, 7, 43, 0.26); width :64px"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <a href="" class="row no-gutters align-items-center text-decoration-none">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:rgb(70, 80, 70)">
                              <a href="{{route('categories')}}"  class="text-decoration-none text-black" > မေးခွန်းကဏ္ဍ</a> </div>
                            <div class="font-weight-bold  text-uppercase mb-1"  style="color:rgb(70, 80, 70)"><p >{{count($categories)}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-globe" style="color: rgba(3, 1, 2, 0.26); width :100px"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <a href="" class="row no-gutters align-items-center text-decoration-none">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:green">
                               <a href="{{route('questions')}}"  class="text-decoration-none text-black" > မေးခွန်းအရေအတွက်</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($questions)}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-info-circle" style="color: rgb(50, 23, 75); width :64px"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <a href="" class="row no-gutters align-items-center text-decoration-none">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:rgb(31, 25, 80)">
                              <a href="{{route('options')}}" class="text-decoration-none text-black"> အဖြေအရေအတွက်</a> </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($scores)}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users" style="color: rgb(39, 36, 63); width :64px"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <a href="" class="row no-gutters align-items-center text-decoration-none">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:rgb(70, 80, 70)">
                                ရောက်ရှိနေသော mailများ</div>
                            <div class="font-weight-bold  text-uppercase mb-1"  style="color:rgb(70, 80, 70)"><p >{{count($mails)}} စောင်</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users" style="color: rgba(80, 7, 43, 0.26); width :64px"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <a href="" class="row no-gutters align-items-center text-decoration-none">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:rgb(70, 80, 70)">
                                Quizzဖြေဆိုမှူ</div>
                            <div class="font-weight-bold  text-uppercase mb-1"  style="color:rgb(70, 80, 70)"><p >{{count($scores)}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-globe" style="color: rgba(3, 1, 2, 0.26); width :100px"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->


        <!-- Pending Requests Card Example -->

    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">

        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">

        </div>
    </div>
</div>


    </div></div>
@endsection
