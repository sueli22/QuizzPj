
            @extends('ui.master')

            @section('content')

            <div class="container">
                <div style="height: 90px">

                </div>
                <div class="col-8 mx-auto mt-5">
                    <div class="card mt-5 mb-3 card-small" style="box-shadow: 20px">
                        <div class="row g-0 d-flex align-items-center shadow-2xl">
                            <div class="col-lg-5 d-none d-lg-flex ">
                                <img src="{{asset('assets/img/login.jpg')}}"
                                    alt="MADB logo" class="w-80 ml-5 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" style="height: 300px" />
                            </div>
                            <div class="col-lg-7">
                                <div class="mr-5">
                                    <form action="{{ route('user.ps.update.done') }}" method="POST">
                                        @csrf
                                        <div class="card-body p-5" >
                                            <div class="mb-3">
                                                <label for="old_password"><b>Old Password</b></label>
                                                <input type="password" name="old_password"
                                                    class="form-control @error('old_password') is-invalid @enderror">
                                                @error('old_password')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="new_password"><b>New Password</b></label>
                                                <input type="password" name="new_password"
                                                    class="form-control @error('new_password') is-invalid @enderror">
                                                @error('new_password')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="new_password_confirmation"><b>Confirm New Password</b></label>
                                                <input type="password" name="new_password_confirmation" class="form-control">
                                            </div>
                                        </div>
                                        <div class="card-footer border-0">
                                            <button type="submit" class="btn text-white border-bottom btn-primary">Update</button>

                                            <a href="{{url()->previous()}}" class="btn text-white border-bottom btn-primary">Back</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>



            @endsection
