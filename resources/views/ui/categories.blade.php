@extends('ui.master')
@section('content')
<style>
    .box {
  border: 1px solid #cccccc;
  box-shadow: 5px 5px 15px rgba(14, 192, 192, 0.3);
  transition: box-shadow 0.3s ease;
}
.box:hover {
  box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.5);
}

</style>
    <div class="page-wrapper mt-5 ">
        <div class="card  bg-dark  text-white">
            <img class="w-100" src="{{ asset('ui-images/q1.jpg') }}" alt="Card image"
                style="height: 640px; filter: blur(50px); object-fit: cover;">
            <div class="card-img-overlay mt-5">
                <h1 style="font-family: 'Freckle Face', cursive;" class="text-center mb-4">Choose Categories </h1>
            @if (!$categories->isEmpty())
            <div class="row">
             @foreach ($categories as $c)

                <a href="{{route('test.start',$c->id)}}" class=" col-md-7 text-decoration-none text-white mx-auto border box mb-1   rounded-lg p-2" style="font-family: 'Freckle Face', cursive;">
                    <h4>{{$c->name}}</h4>

                </a>


             @endforeach
            </div>

              @endif

            </div>
        </div>
    </div>
@endsection
