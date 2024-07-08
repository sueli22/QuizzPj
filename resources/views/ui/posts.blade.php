@extends('ui.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX=" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .scrollable-container {
        max-height: 90vh; /* Adjust the percentage or pixel value as needed */
        overflow-y: auto;
    }
</style>

        <div style="height: 50px"></div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="container mt-5 scrollable-container">
                @foreach ($posts as $post)
                <div class="row mt-4" style="box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.5); padding: 50px;">
                    <div class="col-12 col-md-4 col-lg-2 mt-3">
                        <img src="{{ asset('storage/posts-images/'.$post->image) }}"
                             class="mt-3 rounded img-fluid" style="width: 500px; height: 200px;">
                    </div>
                    <div class="col-12 col-md-8 col-lg-10 mt-5">
                        <ul>
                            <li class="pcolor">
                                ရေးသားသူ - {{ $post->user->name }}
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fas fa-clock"></i>{{ $post->created_at->diffForHumans() }}
                                </span>
                            </li>
                            <p>
                                <i class="bi bi-check2-all"></i>
                                <span class="pcolor">{{ $post->description }}</span>
                            </p>
                        </ul>
                        <div style="box-shadow: 0px 5px 10px -5px rgba(0, 0, 0, 0.5); padding: 15px;">
                            <!-- Comment form -->
                            <form action="{{ route('comment.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <textarea name="comment" class="form-control mb-2" style="width: 500px;" placeholder="Write your comment here..." required></textarea>
                                <button type="submit" class="btn btn-sm button-color" style="box-shadow: 0px 3px 6px -3px rgba(0, 0, 0, 0.5);">Post Comment</button>
                                <a href="{{ route('user.comment.list', $post->id) }}" class="btn btn-sm button-color" style="box-shadow: 0px 3px 6px -3px rgba(0, 0, 0, 0.5);">မန့်ထားသော comment များကိုကြည့်မည်</a>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


</div>
@endsection
