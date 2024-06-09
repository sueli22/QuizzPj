@extends('admin.master')
@section('content')
    <div class="page-wrapper mt-0 ">
        <div class="card  bg-dark  text-white">
            <img class="w-100" src="{{ asset('ui-images/bgg.jpg') }}" alt="Card image"
                style="height:720px; filter: blur(60px); object-fit: cover;">
            <div class="card-img-overlay">
                <!-- Page Content -->
                <div class="content container-fluid">
                    <!-- Page Header -->

                    <div class="d-flex justify-content-between">
                        <h4>To Edit Answer options </h4>
                        <a href="{{ route('options') }}" class="btn btn-sm wbtn text-white mb-3">Back</a>
                    </div>
                    <div class="card mt-3">
                        <form action="{{route('update.option', $option->id)}}" method="POST">@csrf @method('put')
                            <div class="card-body">
                                <label for="name"><b>Answer</b></label>
                                <input type="text" name="answer" id="answer"
                                    class="form-control @error('answer') is-invalid @enderror"
                                    value="{{ $option->answer }}">
                                @error('answer')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="number_input" class="text-muted"><b>Points</b></label>
                                    <input type="number" min="0" name="points" id="pointst"
                                        value="{{ $option->points ?? old('points') }}" class="form-control" />
                                </div>
                                @error('is_correct')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="card-body">
                                <label for="category"><b>Questions</b></label>
                                <select name="question_id" id="question_id" class="form-control">
                                    <option>Select Questions</option>
                                    @foreach ($questions as $question)
                                        <option value="{{ $question->id }}"
                                            {{ $question->id == $question->id ? 'selected' : '' }}>{{ $question->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-footer border-0">
                                <button class="btn btn-sm wbtn text-white">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
