@extends('ui.master')
@section('content')


        <div class="row d-flex justify-content-center mt-5">
        <div class=" mb-5">
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

            </section><
    </div>
</div>

@endsection
