<!-- resources/views/category/questions.blade.php -->
@extends('ui.master')

@section('content')
<style>
     .box {
      border: 1px solid #ccc;
      box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1); /* Extra small shadow */
      transition: box-shadow 0.3s ease;
    }
 .box:hover {
      box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2); /* Extra small hover shadow */
    }
</style>
<div class="page-wrapper mt-5">
    <div class="card bg-dark text-white">
        <img class="w-100" src="{{ asset('ui-images/q1.jpg') }}" alt="Card image" style="height: auto; filter: blur(90px); object-fit: cover;"> <!-- Reduced blur -->
        <div class="card-img-overlay">
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <div>
                            <h1 style="font-family: 'Freckle Face', cursive;" class="card-header">Let Start Testing</h1>
                            <div class="card-body" style="font-family: 'Freckle Face', cursive;">
                                <form method="POST" action="{{route('client.test.store')}}">
                                    @csrf
                                    <div class="mb-1">
                                        <div class="card-header">Your Choice Category - {{ $category->name }}</div>
                                        <div class="card-body">
                                            @foreach($category->questions as $question)
                                                <div class="border @if(!$loop->last) mb-1 @endif">
                                                    <div class="card-header">{{ $question->name }}</div>
                                                    <div class="card-body box">
                                                        <input type="hidden" name="questions[{{ $question->id }}]" value="">
                                                        <input type="hidden" name="category_id" value="{{$category->id}}">
                                                        @foreach($question->options as $option)
                                                            <div class="form-check">
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
                                            <button type="submit" class="btn btn-primary">
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
        </div>
    </div>
</div>
@endsection
