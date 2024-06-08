@extends('ui.master')
@section('content')

<div class="page-wrapper mt-5 ">
    <div class="card  bg-dark  text-white">
        <img class="w-100" src="{{asset('ui-images/q1.jpg')}}" alt="Card image" style="height: 640px; filter: blur(50px); object-fit: cover;">
        <div class="card-img-overlay">
        <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-3 mb-5">
        <div class="border  pt-3 mt-3 rounded shadow">

            <ul class="list-group  list-group-flush p-3 text-center ">
                <h5 class="text-center  mb-2" >Contact</h5>
                <img src="{{asset('ui-images/pf.jpg')}}" class="profileimg mb-4" style="width: 200px; height:200px; object-fit:cover">

                <li class="list-group-item bg-transparent  text-white"><b>Name :</b>&nbsp; NaingWinKo</li>
                <li class="list-group-item bg-transparent text-white"><b>Email :</b>&nbsp; 0989 829 3349</li>
                <li class="list-group-item bg-transparent text-white"><b>Role :</b>&nbsp; nwk@gmail.com</li>
                <li class="list-group-item bg-transparent text-white">

                </li>
            </ul>
        </div>
    </div>
</div>
        </div></div>
@endsection
