@extends('ui.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX=" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .scrollable-container {
        max-height: 75vh; /* Adjust the percentage or pixel value as needed */
        overflow-y: auto;
    }
</style>
<div class="card bg-dark text-white">
    <img class="card-img" src="{{ asset('assets/img/2.jpg') }}" alt="Card image"
        style="height:900px; filter: blur(40px); object-fit: cover;">
    <div class="card-img-overlay">
        <div style="height: 50px"></div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="container mt-5 scrollable-container border">

                <div class="row  mt-4">
                    <div class="col-12 col-md-4 col-lg-2 mt-3">
                        <img src="{{ asset('storage/posts-images/'.$post->image) }}"
                            class="mt-3 rounded img-fluid" style="width: 500px;height:200px">
                    </div>
                    <div class="col-12 col-md-8 col-lg-10 mt-5">
                        <ul>
                            <i class="fas fa-user"></i> &nbsp;&nbsp;ရေးသားသူ - {{ $post->user->name }} <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i
                                        class="fas fa-clock"></i>  &nbsp;&nbsp;{{ $post->created_at->diffForHumans() }} <a href="{{route('user.posts')}}" class="btn btn-sm border text-white">Back</a></span></li>
                            <li><i class="bi bi-check2-all"></i> <span>{{ $post->description }}</span></li>

                        </ul>
                        <div>
                            <div class="mt-4">
                                <p>မန့်ထားသောကွန့်မန့် များ </p>

                                @if ($comments->count() > 0)
                                    <ul class="">
                                        @foreach ($comments as $comment)

                                                <strong><img src="{{ asset('storage/profile-images/'.$comment->user->image) }}"  class="rounded-circle" style="width: 30px;height:30px">  &nbsp;&nbsp;{{ $comment->user->name }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>{{ $comment->created_at->diffForHumans() }}  </span></strong>
                                                <p>{{ $comment->comment }} <a href="{{route('user.comment.delete',$comment->id)}}" class="text-decoration-none"> <i class="fas fa-trash" style="color: red"></i></a> </p>

                                                <hr style="border-color: rgb(211, 207, 207);">

                                        @endforeach
                                    </ul>
                                @else
                                    <p>No comments yet.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection
