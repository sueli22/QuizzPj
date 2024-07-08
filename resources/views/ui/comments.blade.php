@extends('ui.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX=" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .scrollable-container {
        max-height: 75vh; /* Adjust the percentage or pixel value as needed */
        overflow-y: auto;
    }
</style>

        <div style="height: 50px"></div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="container mt-5 scrollable-container ">

                <div class="row border mt-4" style="box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.5); padding: 50px;">
                    <div class="col-12 col-md-4 col-lg-2 mt-3">
                        <img src="{{ asset('storage/posts-images/'.$post->image) }}"
                            class="mt-3 rounded img-fluid" style="width: 500px;height:200px">
                    </div>
                    <div class="col-12 col-md-8 col-lg-10 mt-5">
                        <ul>
                            <i class="fas fa-user"></i> <span class="pcolor">&nbsp;&nbsp;ရေးသားသူ - {{ $post->user->name }} <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i
                                        class="fas fa-clock"></i>  &nbsp;&nbsp;{{ $post->created_at->diffForHumans() }} <a href="{{route('user.posts')}}" class="btn btn-sm button-color">Back</a></span></li>
                            <p> <span class="pcolor">{{ $post->description }}</span></p>

                        </ul>
                        <div>
                            <div class="mt-4">
                                <p class="pcolor">မန့်ထားသောကွန့်မန့် များ </p>

                                @if ($comments->count() > 0)
                                    <ul class="">
                                        @foreach ($comments as $comment)

                                                <strong><img src="{{asset('storage/images/'.$comment->user->image)}}"  class="rounded-circle" style="width: 30px;height:30px">  &nbsp;&nbsp;{{ $comment->user->name }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>{{ $comment->created_at->diffForHumans() }}  </span></strong>
                                                <p class="pcolor">{{ $comment->comment }} <a href="{{route('user.comment.delete',$comment->id)}}" class="text-decoration-none"> <i class="fas fa-trash" style="color: red"></i></a> </p>

                                                <hr style="border-color: rgb(211, 207, 207);">

                                        @endforeach
                                    </ul>
                                @else
                                    <p class="pcolor">No comments yet.</p>
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
