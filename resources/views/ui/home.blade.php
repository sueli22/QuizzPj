@extends('ui.master')
@section('content')
<style>

</style>
    <!-- /Hero Section -->
<div style="height: 50px">

</div>



    <!-- About Section -->
   <!-- /About Section -->
    <!-- Features Section -->
    <section id="features" class="features section">

        <div class="container">
            <div style="height: 50px">

            </div>

            <div class="row gy-4">
                <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="{{asset('assets/img/code2.png')}}"
                        class="p-4" alt=""></div>
                <div class="col-lg-6">
                    <div style="height: 50px">

                    </div>

                    <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <i class="fas fa-code"  style=" color: rgb(4, 44, 71)"></i>
                        <div>

                            <p class="pcolor fw-bold" style=" color: rgb(4, 44, 71)">"Progranming Quizz Management System မှ ကြိုဆိုပါတယ်"</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <i class="fas fa-laptop-code" style=" color: rgb(4, 44, 71)"></i>
                        <div>

                            <p class="pcolor fw-bold" style=" color: rgb(4, 44, 71)">"Practice စတင်ရန်အတွက်
                                Get start ကို နိုပ်ပီးကြိုက်နှစ်သက်ရာ Category တစ်ခုကို ရွေးချယ်နိုင်ပါသည်"</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <i class="fas fa-terminal"  style=" color: rgb(4, 44, 71)"></i>
                        <div>

                            <p class="pcolor fw-bold" style=" color: rgb(4, 44, 71)">
                                "Category တစ်ခုစီအတွက် မေးခွန်း ၁၀စီ ပြင်ဆင်ပေးထားပီး
                                မေးခွန်းများဖြေဆိုနိုင်ရန်  ၁၀မီးနစ် အချိန်ရပါသည်"
                            </p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <i class="fas fa-code-branch"  style=" color: rgb(4, 44, 71)"></i>
                        <div>

                            <p class="pcolor fw-bold" style=" color: rgb(4, 44, 71)">
                                "ကောင်းမွန်သော Practice လုပ်ရန်အတွက် စတင်လိုက်ပါ"</p>
                        </div>
                    </div><!-- End Features Item-->

                </div>
            </div>

        </div>


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
                        <a href="https://www.w3schools.com/html/default.asp"><img src="assets/img/clients/1.png"
                                class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.w3schools.com/css/default.asp"><img src="assets/img/clients/2.png"
                                class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.w3schools.com/js/default.asp"><img
                                src="{{ asset('assets/img/clients/3.png') }}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.php.net/"><img src="{{ asset('assets/img/clients/4.png') }}" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://laravel.com/docs/11.x/readme"><img src="assets/img/clients/5.jpg" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a
                            href="https://en.wikipedia.org/wiki/C_Sharp_(programming_language)#:~:text=C%23%20(%2F%CB%8Csi%CB%90%20%CB%88,Paradigm"><img
                                src="assets/img/clients/6.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.java.com/en/"><img src="assets/img/clients/7.png" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.python.org/"><img src="assets/img/clients/8.png" class="img-fluid"
                                alt=""></a>
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
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.8876929468115!2d95.4553865735922!3d17.6554773950298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c0c112588a0061%3A0xf5c6f212a9320ba7!2sUniversity%20of%20Computer%20Studies%2C%20Hinthada!5e0!3m2!1sen!2smm!4v1719460424160!5m2!1sen!2smm"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

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

                <div class="col-lg-8" style="padding: 20px; background-color: #f9f9f9; border-radius: 8px;">
                    <form action="{{ route('user.send.mail') }}" method="POST">
                        @csrf
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required
                            style="margin-bottom: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required
                            style="margin-bottom: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
                        <button type="submit" class="btn btn-primary"
                            style="padding: 10px 20px; background-color: #007bff; border: none; border-radius: 4px;">Send</button>
                    </form>
                </div>

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
