@extends('layouts.master')
@section('title')
    {{ __('programs.Department of Business Consulting') }}
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
                    <li>{{ __('programs.Department of Business Consulting') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->


    <section class="programs_box deploma_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 text-center title_department">
                {{ __('programs.Department of Business Consulting') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <img src="assets/img/programs/p8.jpeg" alt=" {{ __('programs.Department of International Relations and Diplomacy') }}" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p class="lead">
                                {{ __('programs.Business consulting has become an') }}
                            </p>


                        </div>

                        <hr>

                        <div class="col-md-2">
                            <h4><span>{{ __('programs.who should attend?') }}</span></h4>
                        </div>
                        <div class="col-md-10">
                            <p>{{ __('programs.This program is suitable:') }}</p>
                            <ul>
                                <li>{{ __('programs.For accounting workers who') }}</li>
                                <li>{{ __('programs.For business consulting workers') }}</li>
                                <li>{{ __('programs.For those who want to enter') }}</li>
                            </ul>
                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.objective') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.This program aims to:') }}
                            </p>
                            <p>{{ __('programs.Providing the student with important') }}</p>
                            <p>{{ __('programs.Covering all aspects of business consulting') }}</p>
                            <p>{{ __('programs.A comprehensive understanding of') }}</p>
                           <br>
                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.content') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.The program consists of twelve units:') }}
                            </p>
                            <br>
                            <p>
                                {{ __('programs.Unit 1: Introduction to Business Consultancy') }}
                            </p>
                            <br>
                            <p>
                                {{ __('programs.Unit 2: Learn about the work environment') }}
                            </p>
                            <br>
                            <p>
                                {{ __('programs.Unit 3: Key Consulting Skills') }}
                            </p>
                            <br>
                            <p>
                                {{ __('programs.Unit 4: Effective Management') }}
                            </p>
                            <br>
                            <p>
                                {{ __('programs.Unit 5: Project Task Management') }}
                            </p>
                            <br>
                            <p>
                                {{ __('programs.Unit 6- Team Management') }}
                            </p>
                            <br>
                            <p>
                                {{ __('programs.Unit 7- Skills of Rational Persuasion') }}
                            </p>
                            <br>
                            <p>
                                {{ __('programs.Unit 8 – Time, Tension and Crisis Management') }}
                            </p>
                            <br>
                            <p>
                                {{ __('programs.Unit 9- Data collection and analysis') }}
                            </p>
                            <br>
                            <p>
                                {{ __('programs.Unit 10. Business communication skills and reporting') }}
                            </p>
                            <br>

                            <p>
                                {{ __('programs.Unit 11 – Customer Offers') }}
                            </p>
                            <br>

                            <p>
                                {{ __('programs.Unit 12- Start-up of business') }}
                            </p>
                            <br>


                        </div>


                    </div>
                </div>

            </div>

           @include('pages.programs.looking')

        </div>
    </section>

@endsection
