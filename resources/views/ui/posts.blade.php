@extends('ui.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX=" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .scrollable-container {
        max-height: 90vh; /* Adjust the percentage or pixel value as needed */
        overflow-y: auto;
    }
</style>
<div class="card bg-dark text-white">
    <img class="card-img" src="{{ asset('assets/img/2.jpg') }}" alt="Card image"
        style="height:900px; filter: blur(40px); object-fit: cover;">
    <div class="card-img-overlay">
        <div style="height: 50px"></div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="container mt-5 scrollable-container">
                @foreach ($posts as $post)
                <div class="row mt-4">
                    <div class="col-12 col-md-4 col-lg-2 mt-3">
                        <img src="{{ asset('storage/posts-images/'.$post->image) }}"
                            class="mt-3 rounded img-fluid" style="width: 500px;height:200px">
                    </div>
                    <div class="col-12 col-md-8 col-lg-10 mt-5">
                        <ul>
                            <li>ရေးသားသူ - {{ $post->user->name }} <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i
                                        class="fas fa-clock"></i>{{ $post->created_at->diffForHumans() }}</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>{{ $post->description }}</span></li>
                        </ul>
                        <div>
                            <!-- Comment form -->
                            <form action="{{ route('comment.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <textarea name="comment" class="form-control mb-2" placeholder="Write your comment here..." required></textarea>
                                <button type="submit" class="btn btn-sm btn-primary">Post Comment</button>
                                <a href="{{route('user.comment.list',$post->id)}}"  class="btn btn-sm btn-primary">မန့်ထားသော comment များကိုကြည့်မည်</a>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>
</div>
@endsection
