@extends('ui.master')
@section('content')


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>


.header__container h1 {
  margin-bottom: 7rem;
  font-size: 7rem;
  font-weight: 700;
  line-height: 5rem;
  color: var(--text-dark);
}



    </style>

<div class="page-wrapper mt-0 ">
    <div class="card  bg-dark text-white">
        <img class="w-100" src="{{asset('ui-images/q1.jpg')}}" alt="Card image" style="height: 550px; filter: blur(40px); object-fit: cover;">
        <div class="card-img-overlay">
    <header class="container mt-5  header__content header__container">

      <div class="row mt-5 align-item-center"  data-aos="fade-up"  data-aos-anchor-placement="top-center"  data-aos-duration="1000" data-aos-delay="400" data-aos-offset="50">
           <div class="col-md-12 col-12 mt-5 " style="font-family: 'Freckle Face', cursive; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            <h1 class="mt-5 " >Quizz <span style="color:rgb(125, 245, 245); "> Management </span></h1>
            <h1 class="text-right  fst-italic" style="color:rgb(209, 243, 14);">System</h1>
          </div>

      </div>
    </div>
    </div>
    </header>

      <script src="https://unpkg.com/scrollreveal"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
    </script>

    </body>
  </html>

@endsection
