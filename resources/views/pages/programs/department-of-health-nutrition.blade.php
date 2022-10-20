@extends('layouts.master')
@section('title')
    {{ __('programs.Department of Health Nutrition') }}
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
                    <li>{{ __('programs.Department of Health Nutrition') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->


    <section class="programs_box deploma_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 text-center title_department">
                {{ __('programs.Department of Health Nutrition') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <img src="assets/img/programs/p4.jpeg" alt="{{ __('programs.Department of Health Nutrition') }}" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p class="lead">
                                {{ __('programs.This program provides nutritional') }}
                            </p>


                        </div>

                        <hr>

                        <div class="col-md-2">
                            <h4><span>{{ __('programs.who should attend?') }}</span></h4>
                        </div>
                        <div class="col-md-10">
                            <p>{{ __('programs.Nutrition science workers') }}</p>
                            <p>{{ __('programs.Specialist in Sports Medicine and Physiotherapy') }}</p>
                            <p>{{ __('programs.Herbalist and Alternative Medicine') }}</p>
                            <p>{{ __('programs.All fitness workers') }}</p>
                            <p>{{ __('programs.All food manufacturers') }}</p>
                            <p>{{ __('programs.Who want to enter the field') }}</p>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.objective') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.This program aims to:') }}
                            </p>
                            <p>{{ __('programs.Identify and deliver healthy') }}</p>
                            <p>{{ __('programs.Learn about the relationship') }}</p>
                            <p>{{ __('programs.Explaining the concept of a') }}</p>
                            <p>{{ __('programs.Know the body’s energy requirements') }}</p>
                            <br>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.content') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.subjects included in the curriculum:') }}
                            </p>
                            <p>
                                {{ __('programs.1. Food therapy:') }}
                            </p>
                            <p>
                                {{ __('programs.This course introduces nutritional') }}
                            </p>

                            <p>
                                {{ __('programs.It also explains the natural') }}
                            </p>

                                <p>
                                    {{ __('programs.2. Nutritional evaluation:') }}
                                </p>
                                <p>
                                    {{ __('programs.This course reviews the biochemical') }}
                                </p>

                                <p>
                                    {{ __('programs.It also works on analyzing') }}
                                </p>

                                <p>{{ __('programs.3. Holistic Nutrition:') }}</p>
                                <p>{{ __('programs.This course explores the role of nutrition in the body, mind, and spirit') }}</p>
                                <p>{{ __('programs.It also deals with the role of the diet in disease prevention') }}</p>
                                <p>{{ __('programs.4. Food by molecular correction:') }}</p>
                                <p>{{ __('programs.This course analyzes the causes of disease') }}</p>
                                <p>{{ __('programs.It also explains how to pick up the') }}</p>
                                <p>{{ __('programs.5. Bioremediation through products:') }}</p>
                                <p>{{ __('programs.This course introduces principles of chemistry') }}</p>
                                <p>{{ __('programs.In designing systems for the') }}</p>
                                <p>{{ __('programs.6. Renewable energy:') }}</p>
                                <p>{{ __('programs.This course examines a new model for') }}</p>



                        </div>


                    </div>
                </div>

            </div>

           @include('pages.programs.looking')

        </div>
    </section>

@endsection
