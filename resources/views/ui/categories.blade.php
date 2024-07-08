@extends('ui.master')
@section('content')

<style>
    .border-buttom {
        border-bottom: 1px solid white;
    }

    .card {
        transition: transform 0.7s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 18px 16px rgba(2, 127, 136, 0.2);
    }
</style>

<!-- Services Section -->
<div style="height: 5px"></div>
<div class="row mt-2 d-flex justify-content-center">
    <div class="col-md-12 mt-3 p-3">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-12 mt-5">
                    <h2 style="font-family: 'Freckle Face', cursive; color: rgb(13, 87, 136)"
                        class="text-center mb-4 fw-bold">နှစ်သက်ရာ မေးခွန်း ကဏ္ဍတစ်ခုကို ရွေးချယ်နိုင်ပါသည်</h2>
                    @if (!$categories->isEmpty())
                    <div class="row mt-5">
                        @foreach ($categories as $c)
                        <div class="col-4 mb-3">
                            <div class="card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1)">
                                <a href="{{ route('test.start', $c->id) }}">
                                    <div class="container p-5 text-center">
                                        <h4 class="pcolor"><b>{{ $c->name }}</b></h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
