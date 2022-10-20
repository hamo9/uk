@extends('layouts.master')
@section('title')
    {{ __('home.Contact Us') }}
@endsection

@section('content')
    @if (\Session::has('success'))
        @php alert()->success('Success', \Session::get('success')); @endphp
    @endif
    @if (\Session::has('error'))
    @php alert()->success('error', \Session::get('error')); @endphp
@endif

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('home.Contact Us') }}</h2>
                <ol>
                    <li><a href="{{ url('/') }}">{{ __('home.home') }}</a></li>
                    <li>{{ __('home.Contact Us') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>{{ __('home.Contact') }}</h2>
                <p>{{ __('home.Need Help?') }} <span>{{ __('home.Contact Us') }}</span></p>
            </div>

            <div class="mb-3">
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-map flex-shrink-0"></i>
                        <div>
                            <h3>{{ __('home.Our Address') }}</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>{{ __('home.Email Us') }}</h3>
                            <p>enuuniveristy.uk@gmail.com</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>{{ __('home.Call Us') }}</h3>
                            <p>+44 7405 261906</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->


            </div>

            <form action="{{ url('send-contact') }}" method="post" role="form" class="php-email-form p-3 p-md-4">
                @csrf
                <div class="row">
                    <div class="col-xl-6 form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="{{ __('home.Your Name') }}" required>
                    </div>
                    <div class="col-xl-6 form-group">
                        <input type="text" class="form-control" name="email" placeholder="{{ __('home.Your Email') }}"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject"
                        placeholder="{{ __('home.Subject') }}" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="{{ __('home.Message') }}" required></textarea>
                </div>
                {{-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> --}}
                <div class="text-center"><button type="submit">{{ __('home.Send Message') }}</button></div>
            </form>


        </div>
    </section><!-- End Contact Section -->
@endsection
