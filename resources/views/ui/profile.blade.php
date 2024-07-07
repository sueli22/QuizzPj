@extends('ui.master')
@section('content')
<div class="card bg-dark text-white">
    <img class="w-100" src="{{ asset('assets/img/2.jpg') }}" alt="Card image" style="height: 640px; filter: blur(10px); object-fit: cover;">
    <div class="card-img-overlay">
    <div class="container my-3 d-flex justify-content-center mt-5">


    </div>
    <div class="mt-5">

            <div class="row justify-content-center">
                <div class="col-md-4 mb-5">
                    <div class="border  pt-3 mt-3 rounded shadow">

                        <ul class="list-group  list-group-flush p-3">

                            <div class="mb-3 text-center">
                                @if($user->image)
                                    <img src="{{ asset('storage/images/'.$user->image) }}" class="profileimg rounded-circle" style="width: 200px; height:200px; object-fit:cover">
                                @else
                                    <p class="text-white"><b>No photo available !</b></p>
                                @endif
                            </div>

                            <li class="list-group-item bg-transparent  text-white"><b>Name :</b>&nbsp; {{$user->name}}</li>
                            <li class="list-group-item bg-transparent text-white"><b>Email :</b>&nbsp; {{$user->email}}</li>
                            <li class="list-group-item bg-transparent text-white"><b>Role :</b>&nbsp; {{$user->role}}</li>
                            <li class="list-group-item bg-transparent text-white"><a href="{{route('user.update.password',$user->id)}}"><b>Change Password :</b>&nbsp;Click</a></li>
                            <li class="list-group-item bg-transparent text-white">
                                <button type="button" class="btn btn-sm wbtn border text-white fw-bold float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    @if($user->image)
                                        Update
                                    @else
                                        Upload
                                    @endif
                                </button>

                                <div>
                                    <a href="{{url()->previous()}}" class="btn btn-sm text-white border">Back</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Image</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{route('photo.update', Auth::user()->id)}}" method="POST" enctype="multipart/form-data"> @csrf
                            <div class="modal-body">
                                <input type="file" name="image" required class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>

            </div>
    </div></div>
    </div>
@endsection
