@extends('layouts.master')
@section('title')
    {{ __('programs.Department of Physical Education') }}
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
                    <li>{{ __('programs.Department of Physical Education') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->

    <section class="programs_box deploma_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 text-center title_department">
                {{ __('programs.Department of Physical Education') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <img src="assets/img/programs/p12.jpeg"
                                alt="{{ __('programs.Department of Physical Education') }}" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p class="lead">
                                {{ __('programs.Nowadays, the specialization of physical education has') }}
                            </p>
                        </div>

                        <hr>

                        <div class="col-md-2">
                            <h4><span>{{ __('programs.who should attend?') }}</span></h4>
                        </div>
                        <div class="col-md-10">
                            <p>{{ __('programs.This program is prompted:') }}</p>
                            <p>{{ __('programs.For students and graduates of the faculties of physical education') }}</p>
                            <p>{{ __('programs.Sports coaches') }}</p>
                            <p>{{ __('programs.Physical education teachers') }}</p>
                            <p>{{ __('programs.Those wishing to work in the field of health clubs') }}</p>
                            <p>{{ __('programs.Those wishing to work in the field of') }}</p>
                            <p>{{ __('programs.Those wishing to transform their careers and enter') }}</p>
                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.objective') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.This program aims to:') }}
                            </p>
                            <p>{{ __('programs.Preparing graduates for a professional qualification in physical education') }}
                            </p>
                            <p>{{ __('programs.Preparing the various teams and sports teams required in the fields of sports') }}
                            </p>
                            <p>{{ __('programs.Preparing professional cadres capable of applying') }}</p>
                            <p>{{ __('programs.Developing sports skills and achieving leadership') }}</p>
                            <p>{{ __('programs.Training in modern sports equipment and training') }}</p>
                            <br>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.content') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>{{ __('programs.Curriculum:') }}</p>
                            <p>{{ __('programs.We will study the following topics:') }}</p>
                            <p>{{ __('programs. 1- Sports Physiology: Is the physiology') }}</p>

                            <ul>
                                <li>{{ __('programs.Anatomy and physiology') }}</li>
                                <li>{{ __('programs.Internal physiological responses') }}</li>
                                <li>{{ __('programs.The physiology of injury and the effect of disabilities') }}</li>
                                <li>{{ __('programs.Fatigue and stress') }}</li>
                            </ul>
                            <br>
                            <p>{{ __('programs.2- Fitness: Is the level of physical') }}</p>
                            <ul>
                                <li>{{ __('programs.Muscle strength and types') }}</li>
                                <li>{{ __('programs.Physiology of physical effort') }}</li>
                                <li>{{ __('programs.Physical effort and public health') }}</li>
                                <li>{{ __('programs.Biomechanics in Sports Science ') }}</li>
                                <li>{{ __('programs.Physiological calendar of athletic performance') }}</li>
                                <li>{{ __('programs.Nutrition for athletic performance') }}</li>
                                <li>{{ __('programs.Fitness programs for health') }}</li>
                                <li>{{ __('programs.Applications in weightlifting training') }}</li>
                            </ul>

                            <p>{{ __('programs.3- Sports Rehabilitation: Carried out by') }}</p>
                            <ul>
                                <li>{{ __('programs.The importance of the rehabilitation program') }}</li>
                                <li>{{ __('programs.Stages of rehabilitation ') }}</li>
                                <li>{{ __('programs.Design ing the rehabilitation program ') }}</li>
                                <li>{{ __('programs.The foundations of the use of sports motor therapy') }}</li>
                                <li>{{ __('programs.The importance of natural elements in rehabilitation') }}</li>

                            </ul>

                            <p>{{ __('programs.4- The foundations of modern sports training:') }}</p>
                            <ul>
                                <li>{{ __('programs.Steps for the establishment and design of the training plan') }}</li>
                                <li>{{ __('programs.What is the training program ') }}</li>
                                <li>{{ __('programs.Principles and foundations of sports training') }}</li>
                                <li>{{ __('programs.Planning the training program') }}</li>
                                <li>{{ __('programs.Formation of the training unit') }}</li>
                                <li>{{ __('programs.Carrying training') }}</li>
                            </ul>

                            <p>{{ __('programs.5- TRX Exercises: Exercises similar') }}</p>
                            <ul>
                                <li>{{ __('programs.TRX hardware specifications') }}</li>
                                <li>{{ __('programs.The difference between traditional and TRX exercises') }}</li>
                                <li>{{ __('programs.TRX training') }}</li>
                            </ul>

                            <p>{{ __('programs.6- VIPR Exercises: A system that combines') }}</p>
                            <ul>
                                <li>{{ __('programs.What is VIPR') }}</li>
                                <li>{{ __('programs.VIPR Basic Rules') }}</li>
                                <li>{{ __('programs.VIPR training models') }}</li>
                            </ul>

                            <p>{{ __('programs.7- Common injuries during sports training') }}</p>
                            <ul>
                                <li>{{ __('programs.Tension and muscle tear') }}</li>
                                <li>{{ __('programs.Twists') }}</li>
                                <li>{{ __('programs.Dislocation') }}</li>
                                <li>{{ __('programs.Bruises') }}</li>
                                <li>{{ __('programs.Prevention of sports injuries') }}</li>
                            </ul>

                            <p>{{ __('programs.8- Testing, measurement and physical') }}</p>
                            <ul>
                                <li>{{ __('programs.The relationship between testing, measurement and evaluation') }}</li>
                                <li>{{ __('programs.Conditions of tests and measurement') }}</li>
                                <li>{{ __('programs.Strength test') }}</li>
                                <li>{{ __('programs.Balance test') }}</li>
                            </ul>

                        </div>


                    </div>
                </div>

            </div>

            @include('pages.programs.looking')

        </div>
    </section>
@endsection
