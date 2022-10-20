@extends('layouts.master')
@section('title')
    {{ __('programs.pageName') }}
@endsection

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('programs.pageName') }}</h2>
                <ol>
                    <li><a href="{{ url('/') }}">{{ __('home.home') }}</a></li>
                    <li>{{ __('programs.pageName') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->

    <section class="programs_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 title_department">{{ __('programs.Our Professional Programs') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">

                        <a href="{{ url('/programs/department-of-crisis-management') }}" class="col-xl-4" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="icon-box d-flex flex-column">
                                <img src="assets/img/programs/p1.jpeg"
                                    alt="{{ __('programs.Department of Crisis Management') }}" class="img-fluid">
                                <div class="overlay">
                                    <h4>{{ __('programs.Department of Crisis Management') }}</h4>
                                </div>
                            </div>
                        </a><!-- End Icon Box -->

                        <a href="{{ url('programs/department-of-international-relations-and-diplomacy') }}" class="col-xl-4"
                            data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box d-flex flex-column">
                                <img src="assets/img/programs/p2.jpeg"
                                    alt="{{ __('programs.Department of International Relations and Diplomacy') }}"
                                    class="img-fluid">
                                <div class="overlay">
                                    <h4>{{ __('programs.Department of International Relations and Diplomacy') }}</h4>
                                </div>
                            </div>
                        </a><!-- End Icon Box -->

                        <a href="{{ url('/programs/department-international-arbitration-and-international-law') }}"
                            class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box d-flex flex-column">
                                <img src="assets/img/programs/p3.jpeg" alt="" class="img-fluid">

                                <div class="overlay">
                                    <h4>{{ __('programs.Department International Arbitration and International Law') }}
                                    </h4>
                                </div>
                            </div>
                        </a><!-- End Icon Box -->

                        <a href="{{ url('/programs/department-of-health-nutrition') }}" class="col-xl-4" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="icon-box d-flex flex-column">
                                <img src="assets/img/programs/p4.jpeg"
                                    alt="{{ __('programs.Department of Health Nutrition') }}" class="img-fluid">

                                <div class="overlay">
                                    <h4>{{ __('programs.Department of Health Nutrition') }}</h4>
                                </div>
                            </div>
                        </a><!-- End Icon Box -->

                        <a href="{{ url('programs/department-of-Law-criminal-law') }}" class="col-xl-4" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="icon-box d-flex flex-column">
                                <img src="assets/img/programs/p5.jpeg" alt="{{ __('programs.Department of Law - Criminal Law') }}"
                                    class="img-fluid">

                                <div class="overlay">
                                    <h4>{{ __('programs.Department of Law - Criminal Law') }}</h4>
                                </div>
                            </div>
                        </a><!-- End Icon Box -->

                        <a href="{{ url('/programs/department-of-political-Science') }}" class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box d-flex flex-column">
                                <img src="assets/img/programs/p6.jpeg" alt="{{ __('programs.Department of Political Science') }}" class="img-fluid">

                                <div class="overlay">
                                    <h4>{{ __('programs.Department of Political Science') }}</h4>
                                </div>
                            </div>
                        </a><!-- End Icon Box -->
                        <a href="{{ url('/programs/department-of-integrated-quality-management-system') }}" class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box d-flex flex-column">
                                <img src="assets/img/programs/p7.jpeg" alt="{{ __('programs.Department of Integrated Quality Management System') }}" class="img-fluid">

                                <div class="overlay">
                                    <h4>{{ __('programs.Department of Integrated Quality Management System') }}</h4>
                                </div>
                            </div>
                        </a><!-- End Icon Box -->
                        <a href="{{ url('/programs/department-of-business-consulting') }}" class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box d-flex flex-column">
                                <img src="assets/img/programs/p8.jpeg" alt="{{ __('programs.Department of Business Consulting') }}" class="img-fluid">

                                <div class="overlay">
                                    <h4>{{ __('programs.Department of Business Consulting') }}</h4>
                                </div>
                            </div>
                        </a><!-- End Icon Box -->
                        {{-- ==================================================== --}}
                        <a href="{{ url('/programs/department-of-human-resources-management') }}" class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box d-flex flex-column">
                                <img src="assets/img/programs/p9.jpeg" alt="{{ __('programs.Department of Human Resources Management') }}" class="img-fluid">

                                <div class="overlay">
                                    <h4>{{ __('programs.Department of Human Resources Management') }}</h4>
                                </div>
                            </div>
                        </a><!-- End Icon Box -->

                        <a href="{{ url('/programs/department-accounting-and-auditing') }}" class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box d-flex flex-column">
                                <img src="assets/img/programs/p11.jpeg" alt="{{ __('programs.Department - Accounting and Auditing') }}" class="img-fluid">

                                <div class="overlay">
                                    <h4>{{ __('programs.Department - Accounting and Auditing') }}</h4>
                                </div>
                            </div>
                        </a><!-- End Icon Box -->
                        <a href="{{ url('/programs/department-of-physical-education') }}" class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box d-flex flex-column">
                                <img src="assets/img/programs/p12.jpeg" alt="{{ __('programs.Department of Physical Education') }}" class="img-fluid">
                                <div class="overlay">
                                    <h4>{{ __('programs.Department of Physical Education') }}</h4>
                                </div>
                            </div>
                        </a><!-- End Icon Box -->
                        <a href="{{ url('/programs/department-of-business-administration') }}" class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box d-flex flex-column">
                                <img src="assets/img/programs/p13.jpeg"
                                    alt="{{ __('programs.Department of Business Administration') }}" class="img-fluid">

                                <div class="overlay">
                                    <h4>{{ __('programs.Department of Business Administration') }}</h4>
                                </div>
                            </div>
                        </a><!-- End Icon Box -->
                        <a href="{{ url('/programs/department-of-integrated-non-surgical-aesthetic-medicine') }}" class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box d-flex flex-column">
                                <img src="assets/img/programs/p14.jpeg"
                                    alt="{{ __('programs.Department of Integrated Non-Surgical Aesthetic Medicine') }}"
                                    class="img-fluid">

                                <div class="overlay">
                                    <h4>{{ __('programs.Department of Integrated Non-Surgical Aesthetic Medicine') }}</h4>
                                </div>
                            </div>
                        </a><!-- End Icon Box -->

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
