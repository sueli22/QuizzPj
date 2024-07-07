@extends('ui.master')
@section('content')

<section id="hero" class="hero section">

    <img src="assets/img/1.jpg" alt="" data-aos="fade-in">

    <div class="container">

      <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-6 col-lg-8">
          <h2>KnowLeage Is Power<span>.</span></h2>
          <p>ညဏ်စမ်းအတူဖြေရအောင်</p>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
              <i class="bi bi-patch-question-fill"></i>

            <p style="font-size: 0.8rem">မေးခွန်းတစ်ခုချင်းစီကို သေချာဖတ်ပြီး ပေးထားသောရွေးချယ်မှုများမှ အကောင်းဆုံးအဖြေကို ရွေးချယ်ပါ။</p>
          </div>
        </div>

        <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <i class="bi bi-fullscreen-exit"></i>
            <p style="font-size: 0.8rem">ရွေးချယ်ထားသောမေးခွန်းများကိုဖြေဆိုရန် အချိန်မီးနစ်၂၀ရပါတယ်</p>
          </div>
        </div>

        <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="700">
          <div class="icon-box">
            <i class="bi bi-gem"></i>
            <p style="font-size: 0.8rem">Category  တစ်ခုတွင်ဖြေဆိုရန်မေးခွန်း ၁၀ ခုရှိသည်။</p>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="about section" style="height: 700px">

    <div class="container mt-5" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/about.jpg" class="" style="width: 500px;height:500px" alt="">
        </div>
        <div class="col-lg-6 order-2 order-lg-1 content">
          <h3>ရည်ရွယ်ချက်</h3>

          <ul style="font-family: 'Bangers', cursive;color:rgb(14, 47, 48)">
              <li class="mb-1"> ကျွန်ုပ်တို့သည် ဉာဏ်စမ်းပဟေဠိများကို ထိရောက်စွာ စီစဉ်ပေးရန်အတွက် ခိုင်မာသော
                  ပလက်ဖောင်းတစ်ခု ပံ့ပိုးပေးနိုင်ရန် ရည်စူးပါသည်။
                  ဉာဏ်စမ်းပဟေဋ္ဌိများကို ပံ့ပိုးပေးသည့် အသုံးပြုရလွယ်ကူသော User Inter faceကို ပေးဆောင်ပါသည်။
              </li>
              <li class="mb-1">
                  လွယ်ကူချောမွေ့စေရန်နှင့် အသေးစိတ်ခွဲခြမ်းစိတ်ဖြာခြင်းနှင့် အစီရင်ခံခြင်းကိရိယာများမှတစ်ဆင့်
                  စွမ်းဆောင်ရည်ဆိုင်ရာ ထိုးထွင်းသိမြင်မှုများကို ပေးဆောင်ရန် ဒီဇိုင်းထုတ်ထားပါသည်။
              </li>
              <li>
                  ပဟေဠိစီမံခန့်ခွဲမှုကို ရိုးရှင်းစေပြီး သင်ယူမှုအတွေ့အကြုံများကို မြှင့်တင်ရာတွင်
                  ကျွန်ုပ်တို့နှင့် ပူးပေါင်းပါ။

              </li>
              <li>
                  သင်သည် စာသင်ခန်းတွင်း သင်ယူမှုကို မြှင့်တင်ရန် ကြိုးစားနေသော ဆရာတစ်ဦးဖြစ်စေ သို့မဟုတ်
                  သင့်အသိပညာကို စမ်းသပ်ရန် စိတ်အားထက်သန်သော ကျောင်းသားဖြစ်စေ၊ ကျွန်ုပ်တို့၏စနစ်သည် သင့်ခရီးအတွက်
                  အသုံးပြုရလွယ်ကူသော User Inter faceနှင့် ပြည့်စုံသောကိရိယာများကို ပေးဆောင်ပါသည်။

              </li>
          </ul>

        </div>
      </div>

    </div>

  </section><!-- /About Section -->
    <!-- Features Section -->
    <section id="features" class="features section">

        <div class="container">

          <div class="row gy-4">
            <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/6.jpg" class="p-4" alt=""></div>
            <div class="col-lg-6">

              <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-archive flex-shrink-0"></i>
                <div>

                  <p>"မေးခွန်းတိုင်းသည် ဝေဖန်ပိုင်းခြားစိတ်ဖြာပြီး အသစ်အဆန်းတစ်ခုကို သင်ယူရန် အခွင့်အရေးတစ်ခုဖြစ်သည်။"</p>
                </div>
              </div><!-- End Features Item-->

              <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-basket flex-shrink-0"></i>
                <div>

                  <p>"မင်းရဲ့အသိပညာနဲ့ စဉ်းစားတွေးခေါ်မှုစွမ်းရည်ကို စမ်းသပ်ဖို့ ဒီဇိုင်းထုတ်ထားတဲ့ လှုံ့ဆော်မှုမေးခွန်း ၁၀ ခု စတင်ပါ"</p>
                </div>
              </div><!-- End Features Item-->

              <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-broadcast flex-shrink-0"></i>
                <div>

                  <p>
                    "ဝေဖန်ပိုင်းခြားတွေးခေါ်မှုနှင့် အသိပညာကို အသုံးချခြင်းအားဖြင့် ကျွန်ုပ်တို့သည် ရှုပ်ထွေးသောပြဿနာများကို ဖြေရှင်းနိုင်ပြီး အနာဂတ်အတွက် ဆန်းသစ်တီထွင်နိုင်သည်"
                    </p>
                </div>
              </div><!-- End Features Item-->

              <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-camera-reels flex-shrink-0"></i>
                <div>

                  <p>
                    "ကျယ်ပြန့်သောအသိပညာကို ဗျူဟာမြောက်တွေးခေါ်မှုဖြင့် ပေါင်းစပ်ခြင်းဖြင့် ခေါင်းဆောင်များသည် အောင်မြင်မှုကို ဖြစ်ပေါ်စေသည့် အသိဉာဏ်ဖြင့် ဆုံးဖြတ်ချက်များချနိုင်သည်"</p>
                </div>
              </div><!-- End Features Item-->

            </div>
          </div>

        </div>

      </section><!-- /Features Section -->
 <!-- About Section -->
 <section id="learn" class="learn section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{asset('assets/img/learn.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 order-2 order-lg-1 content">
          <h3 class="mb-5">ကျွန်ုပ်တို့နှင့်အတူလေ့လာပါ</h3>
          <p class="fst-italic">
            သင်၏ဖတ်စာအုပ်များ၏ စာမျက်နှာများသည် သင်၏အလားအလာကို ကြီးမြတ်မှုအဖြစ်သို့ ပြောင်းလဲရန် အခွင့်အလမ်းတစ်ခုဖစ်ပါသည်
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i> <span>မေးခွန်းတိုင်းက သင့်ဉာဏ်ရည်ဉာဏ်သွေးကို ချဲ့ထွင်နိုင်စေမယ့် အခွင့်အရေးတစ်ခုပါ.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>သင်၏ သင်ယူမှုသည် မနက်ဖြန်အတွက် ပိုမိုတောက်ပသောလမ်းကို လင်းစေမည်ဖြစ်သည်</span></li>

          </ul>
          <p>
            အောက်ပါလင့်များတွင် ဘာသာရပ်တစ်ခုချင်းစီ၏ ကျယ်ပြန့်သော Documentation များကို စုစည်းဖော်ပြပေးထားပါသည်
          </p>
        </div>
      </div>

    </div>

</section><!-- /About Section -->
  <!-- Clients Section -->
  <section id="clients" class="clients section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "spaceBetween": 40
              },
              "480": {
                "slidesPerView": 3,
                "spaceBetween": 60
              },
              "640": {
                "slidesPerView": 4,
                "spaceBetween": 80
              },
              "992": {
                "slidesPerView": 6,
                "spaceBetween": 120
              }
            }
          }
        </script>
        <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
                <a href="https://www.w3schools.com/html/default.asp"><img src="assets/img/clients/1.png" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://www.w3schools.com/css/default.asp"><img src="assets/img/clients/2.png" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://www.w3schools.com/js/default.asp"><img src="{{asset('assets/img/clients/3.png')}}" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://www.php.net/"><img src="{{asset('assets/img/clients/4.png')}}" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://laravel.com/docs/11.x/readme"><img src="assets/img/clients/5.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://en.wikipedia.org/wiki/C_Sharp_(programming_language)#:~:text=C%23%20(%2F%CB%8Csi%CB%90%20%CB%88,Paradigm"><img src="assets/img/clients/6.png" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://www.java.com/en/"><img src="assets/img/clients/7.png" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="https://www.python.org/"><img src="assets/img/clients/8.png" class="img-fluid" alt=""></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Clients Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">


        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.8876929468115!2d95.4553865735922!3d17.6554773950298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c0c112588a0061%3A0xf5c6f212a9320ba7!2sUniversity%20of%20Computer%20Studies%2C%20Hinthada!5e0!3m2!1sen!2smm!4v1719460424160!5m2!1sen!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          </div><!-- End Google Maps -->

          <div class="row gy-4">

            <div class="col-lg-4">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Computer University Hinthada</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+959 898 293 349</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>naingwinko22@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>

            <div class="col-lg-8">
                <form action="{{ route('user.send.mail') }}" method="POST">
                    @csrf
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div><!-- End Contact Form -->

          </div>

        </div>

      </section><!-- /Contact Section -->

@endsection
