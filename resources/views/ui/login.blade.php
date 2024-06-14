@extends('ui.master')
@section('content')
<style>
    .cartoon{
        font-family: 'Bangers', cursive; color:rgb(14, 47, 48);font-weight: bold;
    }
</style>
    <div class="row d-flex justify-content-center">
    <div class="col-md-4 border p-3 mt-5">
        <form action="{{route('login')}}" method="post"> @csrf

            <div class=" card-body mt-3 p-4  shadow" >
                <h2 class="cartoon-font text-center" style="font-family: 'Bangers', cursive; color:rgb(14, 47, 48);font-weight: bold;">Login Form</h2>


                <div class="mb-3">
                    <label for="email "  class="cartoon mt-2 mb-2"><b>Email</b></label>
                    <input type="text" name="email" value="{{old('email')}}" class="form-control border-0 shadow @error('email') is-invalid @enderror" id="email" placeholder="Enter your email">
                    @error('email')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password " class="cartoon mt-2 mb-2"><b>လျှိုဝှက်နံပါတ်ထည့်ရန်</b></label>
                    <input type="password" name="password" class="form-control border-0 shadow @error('password') is-invalid @enderror" id="password" placeholder="Enter your password">
                    @error('password')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
                </div>
                <div class="my-2">
                    <button class="btn btn-sm  cartoon  border mb-3 shadow">Login</button>
                    <a href="{{route('home')}}"><b class="btn btn-sm wbtn cartoon border mb-3 shadow">Home</b></a>
                    <div class="cartoon">အကောင့်မရှိဘူးလား? <a href="{{route('register')}}"><b class="btn btn-sm wbtn cartoon border mb-3 shadow">အကောင့်သစ် Register လုပ်ရန်</b></a></div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
