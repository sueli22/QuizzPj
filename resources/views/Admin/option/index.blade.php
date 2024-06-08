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
                    <h3 class="page-title">Options</h3>
                </div>
            </div>
        </div>
<a href="{{route('add.option')}}" class="btn btn-sm wbtn text-white mb-3"><i class="fas fa-plus"></i>Add</a>




    @if ($options->isEmpty())
        <p class="text-white fw-bold border p-2 rounded text-center my-5">No Answer Options has found  !  <a href="{{route('add.option')}}" class="text-decoration-underline"> Click here to create</a></p>
    @else
        <table class="table  border-success table-hover">
        <thead class=" border-success">
            <tr>
                <th>No</th>
                <th>Answer</th>
                <th>Qusetion</th>
                <th>Is_correct?</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class=" border-success">
            @foreach ($options as $index => $o)
            <tr>
                <td>{{ ++ $index}}</td>
                <td>{{ $o->answer}}</td>
                <td>{{ $o->question->name ?? 'N/A'}}</td>
                <td>{{ $o->is_correct}}</td>
                <td>
                    <form action="{{route('delete.option',$o->id)}}" method="POST"> @csrf @method('delete')
                        <a href="{{route('edit.option',$o->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are u sure to delete?')"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div></div>
    @endif
@endsection
