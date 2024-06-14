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

    <h1 style="font-family: 'Freckle Face', cursive;color: rgb(30, 77, 78)" class="text-center mb-4" style="color: cadetblue">Choose Categories </h1>
    @if (!$categories->isEmpty())
        <div class="row ">
            @foreach ($categories as $c)
                <a href="{{ route('test.start', $c->id) }}"
                    class="mb-2 col-md-7 text-decoration-none mx-auto border box   rounded-lg p-2"
                    style="font-family: 'Freckle Face', cursive; color: rgb(30, 77, 78)">
                    <h4>{{ $c->name }}</h4>

                </a>
            @endforeach
        </div>
    @endif

    </div>
@endsection
