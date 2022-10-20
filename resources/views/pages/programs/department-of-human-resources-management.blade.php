@extends('layouts.master')
@section('title')
    {{ __('programs.Department of Human Resources Management') }}
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
                    <li>{{ __('programs.Department of Human Resources Management') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->

    <section class="programs_box deploma_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 text-center title_department">
                {{ __('programs.Department of Human Resources Management') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <img src="assets/img/programs/p9.jpeg" alt="{{ __('programs.Department of Crisis Management') }}" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p class="lead">
                                {{ __('programs.Human resources are defined as') }}
                            </p>
                        </div>

                        <hr>

                        <div class="col-md-2">
                            <h4><span>{{ __('programs.who should attend?') }}</span></h4>
                        </div>
                        <div class="col-md-10">
                            <p>{{ __('programs.This program is an opportunity to learn everything') }}</p>
                            <p>{{ __('programs.It also increases the efficiency of the') }}</p>
                            <p>{{ __('programs.And the directors of the heads') }}</p>
                            <p>{{ __('programs.And development and modernization managers') }}</p>
                            <p>{{ __('programs.And those seeking to enter the') }}</p>
                            <p>{{ __('programs.And administrative officers.') }}</p>


                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.objective') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.This program is designed to:') }}
                            </p>
                            <p>{{ __('programs.Preparing specialized cadres in human ') }}</p>
                            <p>{{ __('programs.Enhanced capacity to assess human') }}</p>
                            <p>{{ __('programs.Providing participants with technical methods') }}</p>
                            <p>{{ __('programs.Introducing participants to employee motivation') }}</p>

                            <br>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.content') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.Now let’s get to know the detailed study') }}
                            </p>
                            <p>{{ __('programs.Human resources (personnel management)') }}</p>
                            <ul>
                                <li>{{ __('programs.Access to human resources management') }}</li>
                                <li>{{ __('programs.Human resources management responsibilities') }}</li>
                                <li>{{ __('programs.Responsibility and role of human resources manager') }}</li>

                            </ul>
                            <br>
                            <p>{{ __('programs.2- Recruitment and personnel: Getting') }}</p>
                            <ul>
                                <li>{{ __('programs.How to select employees and evaluate their performance ') }}</li>
                                <li>{{ __('programs.Choose the perfect employee') }}</li>
                                <li>{{ __('programs.Personal interview techniques, types') }}</li>
                                <li>{{ __('programs.Job description for each job') }}</li>
                                <li>{{ __('programs.Motivating staff') }}</li>
                                <li>{{ __('programs.Motivation alais theories') }}</li>
                                <li>{{ __('programs.Setting up a wage system') }}</li>
                                <br>
                            </ul>
                            <p>{{ __('programs.3- Development and training: The most') }}</p>
                            <ul>
                                <li>{{ __('programs.Training and development of human resources') }}</li>
                                <li>{{ __('programs.Design an effective training program') }}</li>
                                <li>{{ __('programs.Establishing programs to develop executive leadership ') }}</li>
                                <li>{{ __('programs.Developing training systems ') }}</li>
                                <li>{{ __('programs.Identifying the company’s training needs') }}</li>
                                <li>{{ __('programs.Social responsibility for the company') }}</li>
                                <li>{{ __('programs.Appreciation and reward') }}</li>
                                <li>{{ __('programs.Participation and future planning of the company') }}</li>
                                <br>
                            </ul>

                            
                            <p>{{ __('programs.4-The organization of human resources') }}</p>
                            <ul>
                                <li>{{ __('programs.Preparing organizational structures for the company') }}</li>
                                <li>{{ __('programs.Evaluation of organizational structures') }}</li>
                                <li>{{ __('programs.Establishinership ') }}</li>
                                <li>{{ __('programs.The benefits of regulatory structures') }}</li>
                                <li>{{ __('programs.Models of organizational structures') }}</li>
                                <br>
                            </ul>

                        </div>


                    </div>
                </div>

            </div>

           @include('pages.programs.looking')

        </div>
    </section>


@endsection
