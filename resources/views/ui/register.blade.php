@extends('ui.master')
@section('content')

<div class="page-wrapper mt-0 ">

    <div class="row d-flex justify-content-center">
    <div class="col-md-4">
        <form action="{{route('register')}}" method="post"> @csrf
            <h4 class="mt-5 mb-4"><b>Register</b></h4>

            <div class="border card-body mt-3 p-4  shadow" >
                <div class="mb-3">
                    <label for="name" class="mb-2"><b>Name</b></label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control border-0 shadow @error('name') is-invalid @enderror" id="email" placeholder="Enter your name">
                    @error('email')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="mb-2"><b>Email</b></label>
                    <input type="text" name="email" value="{{old('email')}}" class="form-control border-0 shadow @error('email') is-invalid @enderror" id="email" placeholder="Enter your email">
                    @error('email')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="mb-2"><b>Password</b></label>
                    <input type="password" name="password" class="form-control border-0 shadow @error('password') is-invalid @enderror" id="password" placeholder="Enter your password">
                    @error('password')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
                </div>
                <div class="my-2">
                    <button class="btn btn-sm wbtn text-white border mb-3 shadow">Register</button>
                    <div class="text-white">Do You have Account? <a href="{{route('login')}}"><b class="btn btn-sm wbtn text-white border mb-3 shadow">Login</b></a></div>
                </div>
            </div>
        </form>
    </div>
</div>
        
@endsection
