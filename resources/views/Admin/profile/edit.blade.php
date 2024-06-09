@extends('admin.master')
@section('content')
    <div class="page-wrapper mt-0 ">
        <div class="card  bg-dark text-white">
            <img class="w-100" src="{{ asset('ui-images/bgg.jpg') }}" alt="Card image"
                style="height: 640px; filter: blur(40px); object-fit: cover;">
            <div class="card-img-overlay">
                <!-- Page Content -->
                <div class="content container">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-5 mb-5">
                            <h4>Profile Edit Form</h4>

                            <div class="border mt-3">
                                <form action="{{route('update.admin.profile',$user->id)}}" method="POST"
                                    enctype="multipart/form-data">@csrf @method('put')
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="name"><b>Name</b></label>
                                            <input type="text" name="name" id="title"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name') ?? $user->name }}">
                                            @error('name')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="email"><b>Email</b></label>
                                            <input type="text" name="email" id="title"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') ?? $user->email }}">

                                            @error('email')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="password"><b>Password</b></label>
                                            <input type="password" name="password" id="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                value="{{ old('password') ?? $user->password }}">

                                            @error('password')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label><b>Image</b></label>
                                            <input type="file" name="image"
                                                class="form-control @error('image') is-invalid @enderror">
                                            @error('image')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror

                                            @if ($user->image)
                                                <img src="{{ asset('storage/profile-images/' . $user->image) }}"
                                                    class="rounded-circle mt-4"
                                                    style="width: 80px; height:80px; object-fit:cover">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="  p-3">
                                        <button class="btn btn-sm btn-primary">Update</button>
                                        <a href="{{route('profile.admin')}}" class="btn btn-sm wbtn text-white ">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
