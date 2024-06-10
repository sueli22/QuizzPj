<!-- resources/views/category/questions.blade.php -->
@extends('ui.master')

@section('content')
<style>
     .box {


      border: 1px solid #ccc;
      box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
      transition: box-shadow 0.3s ease;
    }

    .box:hover {
      box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.5);
    }
</style>
<div class="page-wrapper mt-5 ">
    <div class="card  bg-dark  text-white">
        <img class="w-100" src="{{asset('ui-images/q1.jpg')}}" alt="Card image" style="height: autopx; filter: blur(50px); object-fit: cover;">
        <div class="card-img-overlay">
<div class="container">

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="">
                <h1  style="font-family: 'Freckle Face', cursive;" class="card-header ">Let Start Testing</h1>

                <div class="card-body"  style="font-family: 'Freckle Face', cursive;">
                    <form method="get" action="" >
                        @csrf

                        <div class="= mb-3">
                            <div class="card-header ">Your Choice Category - {{ $category->name }}</div>

                            <div class="card-body ">
                                @foreach($category->questions as $question)
                                    <div class="border @if(!$loop->last)mb-3 @endif">
                                        <div class="card-header">{{ $question->name }}</div>

                                        <div class="card-body box">
                                            <input type="hidden" name="questions[{{ $question->id }}]" value="">
                                            @foreach($question->options as $option)
                                                <div class="form-check" >
                                                    <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]" id="option-{{ $option->id }}" value="{{ $option->id }}" @if(old("questions.$question->id") == $option->id) checked @endif>
                                                    <label class="form-check-label" for="option-{{ $option->id }}">
                                                        {{ $option->answer }}
                                                    </label>
                                                </div>
                                            @endforeach

                                            @if($errors->has("questions.$question->id"))
                                                <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                                    <strong>{{ $errors->first("questions.$question->id") }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </div></div>
@endsection
