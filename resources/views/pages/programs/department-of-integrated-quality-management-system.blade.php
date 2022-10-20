@extends('layouts.master')
@section('title')
    {{ __('programs.Department of Integrated Quality Management System') }}
@endsection

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                {{-- <h2>{{ __('programs.Department of business administration') }}</h2> --}}
                <ol>
                    <li><a href="{{ url('/') }}">{{ __('home.home') }}</a></li>
                    <li><a href="{{ url('/programs') }}">{{ __('programs.pageName') }}</a></li>
                    <li>{{ __('programs.Department of Integrated Quality Management System') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->


    <section class="programs_box deploma_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 text-center title_department">
                {{ __('programs.Department of Integrated Quality Management System') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <img src="assets/img/programs/p7.jpeg"
                                alt=" {{ __('programs.Department of International Relations and Diplomacy') }}"
                                class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p class="lead">
                                {{ __('programs.It is necessary to have an integrated management') }}
                            </p>


                        </div>

                        <hr>

                        <div class="col-md-2">
                            <h4><span>{{ __('programs.who should attend?') }}</span></h4>
                        </div>
                        <div class="col-md-10">
                            <p>{{ __('programs.This program is suitable for you if you:') }}</p>
                            <ul>
                                <li>{{ __('programs.Quality Manager, CEO of') }}</li>
                                <li>{{ __('programs.Responsible for implementing and') }}</li>
                                <li>{{ __('programs.You have interest in this') }}</li>
                            </ul>
                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.objective') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.This program aims to:') }}
                            </p>
                            <ul>
                                <li>{{ __('programs.Preparing students to be competent') }}</li>
                                <li>{{ __('programs.Applying the organization’s integrated quality') }}</li>
                                <li>{{ __('programs.Preparing students to be able to') }}</li>
                                <li>{{ __('programs.Introducing students to the concepts') }}</li>
                            </ul>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.content') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.The program addresses five main themes:') }}
                            </p>

                            <p>
                                {{ __('programs.Axis 1: Introduction to Quality and Quality Assurance') }}
                            </p>

                            <ul>
                                <li>{{ __('programs.What quality') }}</li>
                                <li>{{ __('programs.Quality standards in the organization') }}</li>
                                <li>{{ __('programs.Continuous quality improvement') }}</li>
                            </ul>
                            <br>
                            <p>
                                {{ __('programs.Axis 2: Comprehensive') }}
                            </p>

                            <ul>
                                <li>{{ __('programs.The concept and principles') }}</li>
                                <li>{{ __('programs.Creating and managing quality') }}</li>
                                <li>{{ __('programs.Comprehensive quality management tasks') }}</li>
                                <li>{{ __('programs.Marketing strategies for services and products') }}</li>
                                <li>{{ __('programs.Comprehensive quality applications') }}</li>
                                <li>{{ __('programs.Measure and improve quality performance') }}</li>
                            </ul>
                            <br>
                            <p>{{ __('programs.Axis 3: Comprehensive Quality') }}</p>

                            <ul>
                                <li>{{ __('programs.Quality system standards') }}</li>
                                <li>{{ __('programs.Concepts of using ISO 9001/2015 to develop quality') }}</li>
                                <li>{{ __('programs.Sigma6 concept and its relationship to quality') }}</li>
                            </ul>

                            <p>{{ __('programs.Axis 4: Application of') }}</p>

                            <ul>
                                <li>{{ __('programs.Barriers to the application') }}</li>
                                <li>{{ __('programs.Determining the stages of') }}</li>
                                <li>{{ __('programs.Quality indicators') }}</li>
                                <li>{{ __('programs.Comprehensive quality management') }}</li>
                                <li>{{ __('programs.Application on ISO 9001/2015') }}</li>
                            </ul>

                            <p>{{ __('programs.Axis 5: Quality Assessment') }}</p>
                            <ul>
                                <li>{{ __('programs.Quality measurement') }}</li>
                                <li>{{ __('programs.Quality assessment of the performance') }}</li>
                                <li>{{ __('programs.Analysis of customer satisfaction') }}</li>
                                <li>{{ __('programs.Study and analysis of quality costs') }}</li>
                            </ul>



                        </div>


                    </div>
                </div>

            </div>

            @include('pages.programs.looking')

        </div>
    </section>
@endsection
