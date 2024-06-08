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
                    <h3 class="page-title">Question</h3>
                </div>
            </div>
        </div>
<a href="{{route('add.question')}}" class="btn btn-sm wbtn text-white mb-3"><i class="fas fa-plus"></i>Add</a>




    @if ($questions->isEmpty())
        <p class="text-white fw-bold border p-2 rounded text-center my-5">No Questions has found  !  <a href="{{route('add.question')}}" class="text-decoration-underline"> Click here to create</a></p>
    @else
        <table class="table  border-success table-hover">
        <thead class=" border-success">
            <tr>
                <th>No</th>
                <th>QusetionName</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class=" border-success">
            @foreach ($questions as $index => $q)
            <tr>
                <td>{{ ++ $index}}</td>
                <td>{{ $q->name}}</td>
                <td>{{ $q->category->name ?? 'N/A'}}</td>
                <td>
                    <form action="" method="POST"> @csrf @method('delete')
                        <a href="" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
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
