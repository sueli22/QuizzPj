@extends('ui.master')

@section('content')
<div class="page-wrapper mt-5">
    <div class="card bg-dark text-white">
        <img class="w-100" src="{{ asset('ui-images/q1.jpg') }}" alt="Card image" style="height: auto; filter: blur(90px); object-fit: cover;"> <!-- Reduced blur -->
        <div class="card-img-overlay">
<div class="container ">
   <div class="mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8  ">
            <div class="card">
                <div class="card-header">သင့်ဖြေဆိုထားသော အမှတ်များ </div>

                <div class="card-body">
                    <h4 class="mt-2 fw-bolds mb-5"> သင်ရွေးချယ်ထားသော မေးခွန်းအမျိုးအစား မှာ: {{ $result->category->name ?? 'ERROR'}} ဖြစ်သည်</h4>
                    <table class="table table-bordered mt-2">
                        <thead>
                            <tr>
                                <th>အမည်</th>
                                <th>{{$result->user->name}}</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr class="fw-bold">
                                    <td >ရမှတ်: </td>
                                    <td>{{ $result->total_points ?? '0'}} </td>
                                </tr>

                        </tbody>

                    </table>
                </div>
                <div class=" card p-3">
                    <h5>ဖြေခဲ့သော မေးခွန်းများ</h5>
                    @foreach ($result->category->questions as $q )

                     <p>{{$q->name}} </p>



                    @endforeach
                </div>
            </div>
        </div>
    </div>
   </div>
</div></div>
</div>
@endsection
