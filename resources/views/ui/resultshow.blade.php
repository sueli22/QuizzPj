{{-- @extends('ui.master')
@section('content')
<style>
 .my-table {
    background-color: #f0f0f0;
}
</style>
<div class="page-wrapper mt-5 ">
    <div class="card  bg-dark  text-white">
        <img class="w-100" src="{{asset('ui-images/q1.jpg')}}" alt="Card image" style="height: autopx; filter: blur(50px); object-fit: cover;">
        <div class="card-img-overlay">
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 mt-5">
            <div class="border mt-5">
                <div class="card-header">Results of your test</div>

                <div class="card-body ">

                    <table class="table my-table  table-bordered">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>{{ $result->user->name ?? 'N/A' }}</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr class="fw-bold">
                                    <td>Total points:</td>
                                    <td>{{ $result->total_points ??'0' }} points</td>

                                </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div></div>
    </div>
</div>
@endsection --}}
