@extends('ui.master')

@section('content')
    <div class="page-wrapper mt-5">
        <div class="card bg-dark text-white">
            <img class="w-100" src="{{ asset('ui-images/q1.jpg') }}" alt="Card image"
                style="height: auto; filter: blur(90px); object-fit: cover;"> <!-- Reduced blur -->
            <div class="card-img-overlay">
                <div class="container ">
                    <div class="mt-5">
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-10  ">
                                <div class="card">
                                    <div class="card-header">သင်ဖြေဆိုထားသော အမှတ်များ </div>

                                    <div class="card-body">
                                        <h6 class="mt-0 fw-bolds"> သင်ရွေးချယ်ထားသော မေးခွန်းအမျိုးအစား မှာ:
                                            {{ $result->category->name ?? 'ERROR' }} ဖြစ်သည်</h6>
                                        <table class="table table-bordered mt-2">
                                            <thead>
                                                <tr>
                                                    <th>အမည်</th>
                                                    <th>{{ $result->user->name }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr class="fw-bold">
                                                    <td>ရမှတ်: </td>
                                                    <td>{{ $result->total_points ?? '0' }} </td>
                                                </tr>

                                            </tbody>

                                        </table>
                                    </div>
                                    <div class="card p-3">
                                        <h6>ဖြေခဲ့သော မေးခွန်းများ</h6>
                                        @foreach ($result->category->questions as $q)
                                            <p style="font-size: 12px;">{{ $q->name }} </p>
                                         @foreach ($q->options as $key=>$o)
                                                <p style="font-size: 12px;">No.{{$key++}} - {{ $o->answer }} <span>  /  {{ $o->points }} mark</span></p>
                                            @endforeach
                                           <hr style="color: red; border: 1px solid black;">
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
