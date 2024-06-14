@extends('ui.master')
@section('content')

    <!-- slider section -->
    <section class=" slider_section position-relative mt-5">
      <div class="container mt-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row"  data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2 style=" color:rgb(14, 47, 48)">
                        welcome to

                      </h2>
                      <h1 style="font-family: 'Bangers', cursive; color:rgb(14, 47, 48);font-weight: bold;font-size:6rem">
                        Quizz Management System
                       </h1>
                      <h5 class="mt-4 fw-bold" style="font-family: 'Bangers', cursive; color:rgb(14, 47, 48) ">
                        စူးစမ်းချင်စိတ်ကို တိုးပွားစေပြီး သင်ယူမှုကို ဂုဏ်ပြုသော နည်းပညာဖြင့် ပံ့ပိုးထားသော အသိပညာရှာဖွေမှုကို အတူတကွ စတင်လိုက်ကြပါစို့
                      </h5>
                      <div class="">
                        <a href="{{route('login')}}">
                         Login
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row" >
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2  style="font-family: 'Bangers', cursive; color:rgb(59, 10, 18)">


                      </h2>
                      <h1 class="mb-5" style="font-family: 'Bangers', cursive; color:rgb(14, 47, 48);font-weight: bold;">
                        ညဏ်စမ်းအဖြေ ရှာကြည့်ရအောင်
                      </h1 >
                      <p style=" color:rgb(58, 70, 17)">
                        စူးစမ်းချင်စိတ်ကို တိုးပွားစေပြီး သင်ယူမှုကို ဂုဏ်ပြုသော နည်းပညာဖြင့် ပံ့ပိုးထားသော အသိပညာရှာဖွေမှုကို အတူတကွ စတင်လိုက်ကြပါစို့
                      </p>
                      <div class="">
                        <a href="{{route('login')}}">
                            Login
                           </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
               <section class="do_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>

        </h2>
        <h3 style="font-family: 'Bangers', cursive; color:rgb(14, 47, 48);font-weight: bold;">

Enhancing Education through Interactive Quizzes</h3>

      </div>
      <div class="do_container">
        <div class="box arrow-start arrow_bg">
          <div class="img-box">
            <img class="rounded-circle" src="{{asset('ui-images/download.jpg')}}" style="width:100px;height:100px">
          </div>
          <div class="detail-box">
            <h6 style="color:rgb(14, 47, 48);font-weight: bold;">
              Thinking
            </h6>
          </div>
        </div>
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img class="rounded-circle" src="{{asset('ui-images/t1.jpg')}}" style="width:100px;height:100px">
          </div>
          <div class="detail-box">
            <h6 style="color:rgb(14, 47, 48);font-weight: bold;">
              Make
            </h6>
          </div>
        </div>
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img class="rounded-circle" src="{{asset('ui-images/t2.jpg')}}" style="width:100px;height:100px">
          </div>
          <div class="detail-box">
            <h6 style="color:rgb(14, 47, 48);font-weight: bold;">
             Your
            </h6>
          </div>
        </div>
        <div class="box arrow-end arrow_bg">
          <div class="img-box">
            <img class="rounded-circle" src="{{asset('ui-images/t3.jpg')}}" style="width:100px;height:100px">
          </div>
          <div class="detail-box">
            <h6 style="color:rgb(14, 47, 48);font-weight: bold;">
             Skill
            </h6>
          </div>
        </div>
        <div class="box ">
          <div class="img-box">
            <img class="rounded-circle" src="{{asset('ui-images/u.jpg')}}" style="width:100px;height:100px">
          </div>
          <div class="detail-box">
            <h6 style="color:rgb(14, 47, 48);font-weight: bold;">
             better
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>
            </div>
          </div>
        </div>

      </div>


    </section>
    <!-- end slider section -->
  </div>
@endsection
