@extends('ui.master')
@section('content')

    <div class="row d-flex justify-content-center">
    <div class="col-md-4">
        <form action="{{route('login')}}" method="post"> @csrf
            <h4 class="mt-5 mb-4"><b>အကောင့်၀င်ရန်</b></h4>

            <div class="border card-body mt-3 p-4  shadow" >
                <div class="mb-3">
                    <label for="email" class="mb-2"><b>Email</b></label>
                    <input type="text" name="email" value="{{old('email')}}" class="form-control border-0 shadow @error('email') is-invalid @enderror" id="email" placeholder="Enter your email">
                    @error('email')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="mb-2"><b>လျှိုဝှက်နံပါတ်ထည့်ရန်</b></label>
                    <input type="password" name="password" class="form-control border-0 shadow @error('password') is-invalid @enderror" id="password" placeholder="Enter your password">
                    @error('password')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
                </div>
                <div class="my-2">
                    <button class="btn btn-sm wbtn text-white border mb-3 shadow">၀င်မည်</button>
                    <div class="text-white">အကောင့်မရှိဘူးလား? <a href="{{route('register')}}"><b class="btn btn-sm wbtn text-white border mb-3 shadow">အကောင့်သစ် Register လုပ်ရန်</b></a></div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
