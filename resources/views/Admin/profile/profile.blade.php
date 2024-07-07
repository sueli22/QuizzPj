@extends('admin.master')
@section('content')
<style>

</style>
<div class="">
    <div class="page-wrapper mt-0 ">
        <div class="card  bg-dark ">
            <img class="w-100" src="{{ asset('assets/img/2.jpg')}}" alt="Card image" style="height: 640px; filter: blur(40px); object-fit: cover;">
            <div class="card-img-overlay">
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-5">
                        <div class="border hover-grow-card pt-3 mt-5 rounded shadow-lg">
                            <ul class="list-group list-group-flush p-3">
                                <div class="mb-3 text-center">
                                    @if($user->image)
                                        <img src="{{ asset('storage/profile-images/'. $user->image) }}" class="profileimg" style="width: 200px; height:200px; object-fit:cover">
                                    @else
                                        <p class="text-white"><b>No photo available !</b></p>
                                    @endif
                                </div>

                                <li class="list-group-item bg-transparent text-white text-sm"><b>အမည် :</b>&nbsp; {{ $user->name }}</li>
                                <li class="list-group-item bg-transparent text-white text-sm"><b>Email :</b>&nbsp; {{ $user->email }}</li>
                                <li class="list-group-item bg-transparent text-white text-sm"><b>ရာထူး :</b>&nbsp; {{ $user->role }}</li>
                                <li class="list-group-item bg-transparent">
                                    <a href="{{route('edit.profile.admin',$user->id)}}" class="btn btn-sm btn-primary float-end ml-4 border-success"> Edit Profile</a>
                                    <a href="{{route('admin.index')}}" class="btn btn-sm wbtn text-white float-end border-success">Back</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Image</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                {{--
                                <form action="{{ route('profileUpdate', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="file" name="image" required class="form-control">
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                                    </div>
                                </form>
                                --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
