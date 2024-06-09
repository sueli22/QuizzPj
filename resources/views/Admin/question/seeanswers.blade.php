@extends('admin.master')
@section('content')
<div class="page-wrapper mt-0 ">
    <div class="card  bg-dark text-white">
        <img class="w-100" src="{{asset('ui-images/w.jpg')}}" alt="Card image" style="height: 640px; filter: blur(10px); object-fit: cover;">
        <div class="card-img-overlay">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-md-12"><h3> Anwer Of  - {{$question->name}}</h3></div>
                <div class="col-md-6">

                    <a href="{{route('questions')}}" class="btn btn-sm wbtn text-white mb-3">Back</a>
                </div>
            </div>
        </div>
<a href="{{route('add.option')}}" class="btn btn-sm wbtn text-white mb-3"><i class="fas fa-plus"></i>Add Answers</a>





    @if ($options->isEmpty())
        <p class="text-danger fw-bold border p-2 rounded text-center my-5">No Answers has found  !  <a href="{{route('add.option')}}" class="text-decoration-underline"> Click here to create</a></p>
    @else
        <table class="table  border-success table-hover">
        <thead class=" border-success">
            <tr>
                <th>No</th>
                <th>Answers</th>
                <th>Is_correct</th>

            </tr>
        </thead>
        <tbody class=" border-success">
            @foreach ($options as $index => $a)
            <tr>
                <td>{{ ++ $index}}</td>
                <td>{{ $a->answer}}</td>
                <td>{{ $a->is_correct}}</td>

            </tr>
            @endforeach
        </tbody>
        </table>

    </div></div>
    @endif
@endsection
