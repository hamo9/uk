@extends('layouts.master_user')
@section('title')
    {{ __('register.complete register') }}
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{ __('register.complete register') }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">{{ __('register.Profile') }}</a></li>
                    <li class="breadcrumb-item active"> {{ __('register.complete register') }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            @if (auth()->user()->personal_photo == null)
                                <img src="assets/img/male.png" alt="Profile" class="rounded-circle" width="200px"
                                    height="200px">
                            @else
                                <img src="{{ auth()->user()->personal_photo }}" alt="Profile" class="rounded-circle"
                                    width="200px" height="200px">
                            @endif

                            <h2>{{ auth()->user()->first_name }} {{ auth()->user()->father_name }}</h2>
                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ url('/completeRegister') }}" role="form" data-aos="fade-up"
                                enctype="multipart/form-data" data-aos-delay="100">
                                @csrf

                                <div class="row mb-3">
                                    <label for="inputNumber"
                                        class="col-form-label">{{ __('register.Attach a personal photo') }}</label>
                                    <div class="">
                                        <input name="personal_photo" class="form-control" type="file" id="formFile"
                                            >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber"
                                        class="col-form-label">{{ __('register.Attach National Number Card') }}</label>
                                    <div class="">
                                        <input name="national_number_card" class="form-control" type="file"
                                            id="formFile">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber"
                                        class="col-form-label">{{ __('register.Attachment Certificate of Graduation') }}</label>
                                    <div class="">
                                        <input name="certificate_graduation" class="form-control" type="file"
                                            id="formFile">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber"
                                        class="col-form-label">{{ __('register.Attach experience certificates (optional)') }}</label>
                                    <div class="">
                                        <input name="experience_certificates" class="form-control" type="file"
                                            id="formFile">
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-dark">{{ __('register.send') }}</button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>





    </main><!-- End #main -->
@endsection
