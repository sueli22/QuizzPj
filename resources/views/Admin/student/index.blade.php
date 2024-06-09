@extends('admin.master')
@section('content')

    <div class="page-wrapper mt-0">
        <div class="card  bg-dark text-white">
            <img class="w-100" src="{{ asset('ui-images/bgg.jpg') }}" alt="Card image"
                style="height:720px; filter: blur(60px); object-fit: cover;">
            <div class="card-img-overlay">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-8 ">
                            <form
                                class="d-none  d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <form action="">@csrf
                                        <input type="text" name="search" class="form-control   border-success small "
                                            aria-label="Search" aria-describedby="basic-addon2"
                                            value="">
                                        <div class="input-group-append">
                                            <button class="btn wbtn" type="submit">
                                                <i class="fas fa-search fa-sm text-white"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </form>

                        </div>

                    </div>
                    <div class="row">
                        @foreach ($students as $stu)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 hover-grow-card">
                                <div class="border pt-3 rounded shadow-lg h-100">

                                    <div class="card-body text-center">
                                        <h5 class="text-sm text-white" style="font-size: 15px;">{{ $stu->name }}</h5>
                                        <a href="" class="btn wbtn text-white border "
                                            style="padding: 5px 10px; font-size: 10px;">ကြည့်ရန်</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center custom-pagination pagination">
                            {{ $students->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
