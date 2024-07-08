@extends('ui.master')
@section('content')

<style>
    .border-buttom {
  border-bottom: 1px solid white;
}
</style>

             <!-- Services Section -->

            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-md-12 mt-3 p-3">
                    <div class="container ">
                        <div class="row mx-auto ">
                            <div class="col-12 mt-5 ">
                                <h2 style="font-family: 'Freckle Face', cursive;color: rgb(14, 8, 8)"
                                    class="text-center mb-4 fw-bold" style="color: rgb(1, 14, 14)">နှစ်သက်ရာ မေးခွန်း ကဏ္ဍတစ်ခုကို ရွေးချယ်နိုင်ပါသည် </h2>
                                @if (!$categories->isEmpty())
                                    <div class="row ">
                                        @foreach ($categories as $c)
                                            <a href="{{ route('test.start', $c->id) }}"
                                                class="mb-2 col-md-12 text-decoration-none text-white mx-auto border-buttom box rounded-lg p-2"
                                                style="font-family: 'Freckle Face', cursive; color: rgb(1, 14, 14)"  >
                                                <h4 class="">{{ $c->name }}</h4>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>

            </div>
        </div></div>
        @endsection
