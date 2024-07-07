@extends('admin.master')
@section('content')
<div class="page-wrapper mt-0 ">
    <div class="card  bg-dark text-white">
        <img class="w-100"  src="{{ asset('assets/img/2.jpg')}}" alt="Card image"
        style="height:720px; filter: blur(60px); object-fit: cover;">
        <div class="card-img-overlay">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3 class="page-title">မေးခွန်းကဏ္ဍ</h3>
                </div>
            </div>
        </div>
<a href="{{route('add.category')}}" class="btn btn-sm wbtn text-white mb-3"><i class="fas fa-plus"></i>အသစ်ထည့်ရန်</a>




    @if ($categories->isEmpty())
        <p class="text-danger fw-bold border p-2 rounded text-center my-5">No categories has found  !  <a href="{{route('add.category')}}" class="text-decoration-underline"> Click here to create</a></p>
    @else
        <table class="custom-table  border-success table-hover">
        <thead class=" border-success">
            <tr>
                <th>စဉ်</th>
                <th>ကဏ္ဍအမည်</th>
                <th>ဆက်နွယ်‌သောမေးခွန်းများ</th>
                <th>စီမံရန်</th>
            </tr>
        </thead>
        <tbody class=" border-success">
            @php
            $offset = ($categories->currentPage() - 1) * $categories->perPage();
            @endphp
            @foreach ($categories as $index => $category)
            <tr>
                <td>{{ $offset + $loop->iteration }}</td>
                <td>{{ $category->name}}</td>
                <th><a href="{{route('see.questions', $category->id)}}" class="text-white">See Questions</a></th>
                <td>
                    <form action="{{route('delete.category',$category->id)}}" method="POST"> @csrf @method('delete')
                        <a href="{{route('edit.category',$category->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are u sure to delete?')"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        <div class="row mt-2 mb-5">
            <div class="col-12 d-flex justify-content-center custom-pagination pagination">
                {{ $categories->links() }}
            </div>
        </div>
    </div></div>
    @endif
@endsection
