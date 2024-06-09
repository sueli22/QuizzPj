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
                <div class="col-md-6">

                    <a href="{{route('categories')}}" class="btn btn-sm wbtn text-white mb-3">Back</a>
                </div>
            </div>
        </div>
<a href="{{route('add.question')}}" class="btn btn-sm wbtn text-white mb-3"><i class="fas fa-plus"></i>Add Question</a>





    @if ($questions->isEmpty())
        <p class="text-danger fw-bold border p-2 rounded text-center my-5">No Questions has found  !  <a href="{{route('add.question')}}" class="text-decoration-underline"> Click here to create</a></p>
    @else
        <table class="table  border-success table-hover">
        <thead class=" border-success">
            <tr>
                <th>No</th>
                <th>Questions</th>
                <th>SeeAnswer</th>

            </tr>
        </thead>
        <tbody class=" border-success">
            @foreach ($questions as $index => $question)
            <tr>
                <td>{{ ++ $index}}</td>
                <td>{{ $question->name}}</td>
                <th><a href="{{route('see.answers', $question->id)}}">See Answers</a></th>

            </tr>
            @endforeach
        </tbody>
        </table>

    </div></div>
    @endif
@endsection
