@extends('ui.master')

@section('content')
<style>
    .scrollable-container {
        max-height: 40vh; /* Adjust the percentage or pixel value as needed */
        overflow-y: auto;
    }
</style>

<div class="container">
    <div class="mt-5">
        <div class="row justify-content-center  mb-5">
            <div class="col-md-10 mt-5">
                <div class="border">
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

                    <div class=" p-3 scrollable-container">
                        <h6>ဖြေခဲ့သော မေးခွန်းများ</h6>
                        @foreach ($result->category->questions as $q)
                            <p style="font-size: 12px;">{{ $q->name }} </p>
                            @foreach ($q->options as $key => $o)
                                <p style="font-size: 12px;">No.{{ $key + 1 }} - {{ $o->answer }} <span> / {{ $o->points }} mark</span></p>
                            @endforeach
                            <hr style="color: red; border: 1px solid black;">
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
