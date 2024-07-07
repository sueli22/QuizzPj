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
                        <h4>Postအသစ်တစ်ခုဖန်တီးမည်</h4>
                        <a href="{{ route('admin.posts.list') }}" class="btn btn-sm wbtn text-white mb-3">Back</a>
                    </div>
                    <div class="card mt-3">
                        <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">@csrf
                            <div class="card-body">
                                <label for="name"><b>ပုံထည့်ရန်</b></label>
                                <input type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror"
                                    placeholder="ပုံထည့်ရန်">
                                @error('image')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="card-body">
                                <label for="name"><b>စာသားထည့်ရန်န်</b></label>
                                <textarea name="description"  class="form-control @error('name') is-invalid @enderror"
                                placeholder="Enter category name"></textarea>
                                @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror

                            </div>
                            <div class="card-footer border-0">
                                <button class="btn btn-sm wbtn text-white ">ဖန်တီးမည်</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
