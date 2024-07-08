@extends('ui.master')

@section('content')

<div class="container">
    <div style="height: 50px">

    </div>
    <div class="col-8 mx-auto mt-5">
        <div class="card mt-5 mb-3 card-small">
            <div class="row g-0 d-flex align-items-center shadow-2xl">
                <div class="col-lg-5 d-none d-lg-flex ">
                    <img src="{{asset('assets/img/login.jpg')}}"
                        alt="MADB logo" class="w-80 ml-5 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" style="height: 300px" />
                </div>
                <div class="col-lg-7">
                    <div class="mr-5">
                        <form action="{{ route('register')}}" method="post"> @csrf
                            <h4 class="mt-5 mb-4 text-center pcolor" ><b>အကောင့်သစ် Register လုပ်ရန်</b></h4>

                            <div class=" mt-3 p-4 border-0 " >
                                <div class="mb-3">
                                    <label for="name" class="mb-2 pcolor"><b>အမည်</b></label>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control border-0 shadow @error('name') is-invalid @enderror" id="name" placeholder="Enter your name">
                                    @error('name')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="mb-2 pcolor"><b>Email</b></label>
                                    <input type="text" name="email" value="{{old('email')}}" class="form-control border-0 shadow @error('email') is-invalid @enderror" id="email" placeholder="Enter your email">
                                    @error('email')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="mb-2 pcolor"><b>လျှိုဝှက်နံပါတ်ထည့်ရန်</b></label>
                                    <input type="password" name="password" class="form-control border-0 shadow @error('password') is-invalid @enderror" id="password" placeholder="Enter your password">
                                    @error('password')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                                </div>

                                <div class="my-2">
                                    <button class="btn btn-sm  wbtn pcolor border mb-3 shadow">အကောင့် လုပ်မည်</button>
                                    <div class="text-black">အကောင့်ရှိပီးသားလား?? <a href="{{route('login')}}" class="btn btn-sm  wbtn pcolor border mb-3 shadow"><b>အကောင့်၀င်ရန်</b></a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>



@endsection
