@extends('admin.master')
@section('content')
    <div class="page-wrapper mt-0 ">
        <div class="card  bg-dark  text-white">
            <img class="w-100"  src="{{ asset('assets/img/2.jpg')}}" alt="Card image"
            style="height:720px; filter: blur(60px); object-fit: cover;">
            <div class="card-img-overlay">
                <!-- Page Content -->
                <div class="content container">
                    <!-- Page Header -->

                    <div class="d-flex justify-content-between">
                        <h4>Add New Qusetion Category</h4>
                        <a href="{{ route('categories') }}" class="btn btn-sm wbtn text-white mb-3">Back</a>
                    </div>
                    <div class="card mt-3">
                        <form action="{{ route('store.category') }}" method="POST">@csrf
                            <div class="card-body">
                                <label for="name"><b>Name</b></label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Enter category name">
                                @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="card-footer border-0">
                                <button class="btn btn-sm wbtn text-white ">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
