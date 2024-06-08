@extends('ui.master')
@section('content')
<style>
    .text-small {
    font-size: 12px;
    font-style: italic;
}

</style>
    <div class="page-wrapper mt-0 ">
        <div class="card  bg-dark  text-white">
            <img class="w-100" src="{{ asset('ui-images/q1.jpg') }}" alt="Card image"
                style="height: 640px; filter: blur(70px); object-fit: cover;">
            <div class="card-img-overlay">
                <div class="container mt-5">
                    <div class="row" style="">
                        <div class="col-12 col-md-12 text-center" >
                            <h1 class="mt-2 " > <span style="color:rgb(125, 245, 245);text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);   font-family: 'Freckle Face', cursive; ">Online Quizz</span></h1>

                        </div>
                    </div>

                <div class="d-flex mt-5 justify-content-center gap-5 p-5" style="   font-family: 'Freckle Face', cursive;">
                    <div class="col-3 border rounded p-2">
                        <img class="card-img-top rounded border" src="{{ asset('ui-images/t2.jpg') }}" alt="Card image cap" style="width: 230px;height:200px;">
                        <p class="text-small mt-4">Question Types: Support for various question formats, including multiple-choice, true/false, short answer, and essay.</p>

                    </div>
                    <div class="col-3 border rounded p-2">
                        <img class="card-img-top rounded border" src="{{ asset('ui-images/q2.jpg') }}" alt="Card image cap" style="width: 230px;height:200px;">
                        <p class="text-small mt-4">Randomization: Randomize questions and answer options to minimize cheating.
                            .</p>

                    </div>
                    <div class="col-3 border rounded p-2">
                        <img class="card-img-top rounded border" src="{{ asset('ui-images/download.jpg') }}" alt="Card image cap" style="width: 230px;height:200px;">
                        <p class="text-small mt-4">Feedback Mechanism: Provide detailed feedback and explanations for correct and incorrect answers.
                        </p>

                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
@endsection
