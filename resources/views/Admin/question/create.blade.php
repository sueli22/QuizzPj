@extends('admin.master')
@section('content')

<style>
    /* Add your custom styles here */
</style>
<div class="page-wrapper mt-0 ">
    <div class="card bg-dark text-white">
        <img class="w-100" src="{{ asset('assets/img/2.jpg')}}" alt="Card image"
        style="height:720px; filter: blur(60px); object-fit: cover;">
        <div class="card-img-overlay">
            <!-- Page Content -->
            <div class="content container">
                <!-- Page Header -->
                <div class="d-flex justify-content-between">
                    <a href="{{ route('questions') }}" class="btn btn-sm wbtn text-white mb-3 border-success">Back</a>
                </div>
                <div class="card mt-3">
                    <form action="{{route('store.question')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="text-center text-muted font-weight-bold">Add New Question</h4>
                            <div class="mb-3">
                                <label for="question_text" class="text-muted"><b>Question Text</b></label>
                                <input type="text" value="{{ old('name') }}" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter question text">
                                @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category_id" class="text-muted"><b>Category</b></label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                      <option value="{{ $category->id}}">{{  $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-footer border-0">
                            <button type="submit" class="btn btn-sm wbtn text-white border-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
