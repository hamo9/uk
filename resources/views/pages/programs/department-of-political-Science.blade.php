@extends('layouts.master')
@section('title')
    {{ __('programs.Department of Political Science') }}
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
                    <li>{{ __('programs.Department of Political Science') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->


    <section class="programs_box deploma_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 text-center title_department">
                {{ __('programs.Department of Political Science') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <img src="assets/img/programs/p6.jpeg" alt=" {{ __('programs.Department of International Relations and Diplomacy') }}" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p class="lead">
                                {{ __('programs.The specialization of political') }}
                            </p>


                        </div>

                        <hr>

                        <div class="col-md-2">
                            <h4><span>{{ __('programs.who should attend?') }}</span></h4>
                        </div>
                        <div class="col-md-10">
                            <p>{{ __('programs.Staff in embassies and diplomatic institutions') }}</p>
                            <p>{{ __('programs.Employees in public relations') }}</p>
                            <p>{{ __('programs.Presidents and members of political parties') }}</p>
                            <p>{{ __('programs.Those wishing to join politics') }}</p>
                            <p>{{ __('programs.Who wants to develop his skills and enter') }}</p>
                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.objective') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.This program aims to:') }}
                            </p>
                            <p>{{ __('programs.Introducing participants to') }}</p>
                            <p>{{ __('programs.Preparing specialized cadres') }}</p>
                            <p>{{ __('programs.Develop ing the skills of participants') }}</p>
                            <p>{{ __('programs.Enabling the recipient to think') }}</p>
                            <p>{{ __('programs.Develop participants’ capabilities') }}</p>
                            <p>{{ __('programs.Developing the competence of') }}</p>

                            <br>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.content') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.Majors in political science and crisis management:') }}
                            </p>
                            <ol>
                                <li>{{ __('programs.Political science.') }}</li>
                                <li>{{ __('programs.International relations.') }}</li>
                                <li>{{ __('programs.Political systems.') }}</li>
                                <li>{{ __('programs.Political sociology.') }}</li>
                                <li>{{ __('programs.Crisis and disaster management.') }}</li>
                                <li>{{ __('programs.Leadership and leadership') }}</li>

                            </ol>

                            <p>
                                {{ __('programs.About materials:') }}
                            </p>

                            <p>
                                {{ __('programs.1- Political Science: As') }}
                            </p>
                                <ul>
                                    <li>{{ __('programs.International relations.') }}</li>
                                    <li>{{ __('programs.Political systems.') }}</li>
                                    <li>{{ __('programs.Political development.') }}</li>

                                </ul>
                                <br>
                                <p>
                                    {{ __('programs.2-International Relations: International') }}
                                </p>
                               
                                <ul>
                                    <li>{{ __('programs.Social innovation.') }}</li>
                                    <li>{{ __('programs.Social work') }}</li>
                                    <li>{{ __('programs.Sociology') }}</li>
                                </ul>
                                <br>
                                <p>{{ __('programs.3- Political systems: All') }}</p>


                                <ul>
                                    <li>{{ __('programs.The parliamentary system.') }}</li>
                                    <li>{{ __('programs.The quasi-presidential system.') }}</li>
                                    <li>{{ __('programs.Presidential system.') }}</li>
                                </ul>

                                <p>{{ __('programs.4- Political sociology: Political') }}</p>
                                
                                <ul>
                                    <li>{{ __('programs.Ideological conflicts between political elites.') }}</li>
                                    <li>{{ __('programs.Theories of political sociology. ') }}</li>
                                    <li>{{ __('programs.Career direction. Marxist trend.') }}</li>

                                </ul>

                                <p>{{ __('programs.5-Crisis and Disaster Management:') }}</p>
                                <ul>
                                    <li>{{ __('programs.The evolution of crisis management science.') }}</li>
                                    <li>{{ __('programs.International crisis management.') }}</li>
                                    <li>{{ __('programs.Managing crises of social change.') }}</li>
                                    <li>{{ __('programs.Natural disaster management.') }}</li>
                                    <li>{{ __('programs.Industrial crisis management.') }}</li>
                                </ul>

                                <p>{{ __('programs.6-Leadership and leadership in') }}</p>
                                
                                <ul>
                                    <li>{{ __('programs.Disaster management planning') }}</li>
                                    <li>{{ __('programs.Negotiating in crises and emergency situations.') }}</li>
                                    <li>{{ __('programs.Information and communication systems') }}</li>
                                </ul>


                        </div>


                    </div>
                </div>

            </div>

           @include('pages.programs.looking')

        </div>
    </section>

@endsection
