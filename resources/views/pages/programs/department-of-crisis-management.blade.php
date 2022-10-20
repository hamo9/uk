@extends('layouts.master')
@section('title')
    {{ __('programs.Department of Crisis Management') }}
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
                    <li>{{ __('programs.Department of Crisis Management') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->

    <section class="programs_box deploma_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 text-center title_department">
                {{ __('programs.Department of Crisis Management') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <img src="assets/img/programs/p1.jpeg" alt="{{ __('programs.Department of Crisis Management') }}" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p class="lead">
                                {{ __('programs.The specialization ofCrisis management') }}
                            </p>
                        </div>

                        <hr>

                        <div class="col-md-2">
                            <h4><span>{{ __('programs.who should attend?') }}</span></h4>
                        </div>
                        <div class="col-md-10">
                            <p>{{ __('programs.Staff in embassies and diplomatic institutions') }}</p>
                            <p>{{ __('programs.Employees in public relations departments in companies and institutions') }}</p>
                            <p>{{ __('programs.Presidents and members of political parties') }}</p>
                            <p>{{ __('programs.Those wishing to join politics') }}</p>
                            <p>{{ __('programs.Who wants to develop his') }}</p>
                            
                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.objective') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.This program aims to:') }}
                            </p>
                            <p>{{ __('programs.Introducing participants to political systems, functions and objectives') }}</p>
                            <p>{{ __('programs.Preparing specialized cadres to') }}</p>
                            <p>{{ __('programs.Develop ing the skills of') }}</p>
                            <p>{{ __('programs.Enabling the recipient to') }}</p>
                            <p>{{ __('programs.Develop participants’ capabilities to') }}</p>
                            <p>{{ __('programs.Developing the competence of') }}</p>

                            <br>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.content') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.This course deals with the following topics:') }}
                            </p>
                            <p>
                                {{ __('programs.The first unit: the crisis') }}
                            </p>
                            <p>
                                {{ __('programs.The second unit: studies') }}
                            </p>

                            <p>
                                {{ __('programs.The third unit: studies the material') }}
                            </p>
                                
                                <p>{{ __('programs.Fourth unit: Discussing the role of information in facing crises.') }}</p>
                                <p>{{ __('programs.Module Five: Tradition and Modern Crisis Management.') }}</p>
                                <p>{{ __('programs.Unit Six: Characteristics of crisis') }}</p>

                               

                        </div>


                    </div>
                </div>

            </div>

           @include('pages.programs.looking')

        </div>
    </section>


@endsection
