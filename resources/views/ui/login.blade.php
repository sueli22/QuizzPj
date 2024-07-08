@extends('ui.master')

@section('content')

<div class="container col-7 mx-auto">
    <div style="height: 80px">

    </div>
    <div class="card mt-5 mb-3 card-small">
        <div class="row g-0 d-flex align-items-center">
            <div class="col-lg-5 d-none d-lg-flex ">
                <img src="{{asset('assets/img/login.jpg')}}"
                        alt="MADB logo" class="w-80 ml-5 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" style="height: 300px" />
            </div>
            <div class="col-lg-7">
                <div class="mr-5">
                    <form action="{{ route('login') }}" method="post"> @csrf
                        <h4 class="mt-5 mb-4 pcolor"><b>အကောင့်၀င်ရန်</b></h4>
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @elseif(session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session()->get('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class=" p-4 border-0 " >
                            <div class="mb-3">
                                <label for="email" class="mb-2 pcolor"><b>Email</b></label>
                                <input type="text" name="email" value="{{ old('email') }}"
                                    class="form-control border-0 shadow @error('email') is-invalid @enderror"
                                    id="email" placeholder="Enter your email">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="mb-2 pcolor"><b>လျှိုဝှက်နံပါတ်ထည့်ရန်</b></label>
                                <input type="password" name="password"
                                    class="form-control border-0 shadow @error('password') is-invalid @enderror"
                                    id="password" placeholder="Enter your password">
                                @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <button class="btn btn-sm wbtn pcolor border mb-3 shadow ">၀င်မည်</button>
                                <div class="text-black">အကောင့်မရှိဘူးလား? <a href="{{ route('register') }}"><b
                                            class="btn btn-sm wbtn pcolor  border mb-3 shadow">အကောင့်သစ်
                                            Register လုပ်ရန်</b></a></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
        @endsection
