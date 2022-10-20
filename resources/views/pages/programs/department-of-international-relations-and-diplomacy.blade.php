@extends('layouts.master')
@section('title')
    {{ __('programs.Department of International Relations and Diplomacy') }}
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
                    <li>{{ __('programs.Department of International Relations and Diplomacy') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->


    <section class="programs_box deploma_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 text-center title_department">
                {{ __('programs.Department of International Relations and Diplomacy') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <img src="assets/img/programs/p2.jpeg" alt=" {{ __('programs.Department of International Relations and Diplomacy') }}" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p class="lead">
                                {{ __('programs.The specialization “International') }}
                            </p>


                        </div>

                        <hr>

                        <div class="col-md-2">
                            <h4><span>{{ __('programs.who should attend?') }}</span></h4>
                        </div>
                        <div class="col-md-10">
                            <p>{{ __('programs.All political and diplomatic personnel') }}</p>
                            <p>{{ __('programs.Government employees holding an international position') }}</p>
                            <p>{{ __('programs.Government representatives and managers of organizations') }}</p>
                            <p>{{ __('programs.Public relations graduates') }}</p>
                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.objective') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.This program aims to:') }}
                            </p>
                            <p>{{ __('programs.Raising the efficiency of the diplomatic') }}</p>
                            <p>{{ __('programs.Preparing graduates in') }}</p>
                            <p>{{ __('programs.Preparing a cadre of') }}</p>
                            <br>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.content') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.Subjects in International Relations and Diplomacy:') }}
                            </p>
                            <p>
                                {{ __('programs.1- International Relations:') }}
                            </p>
                            <p>
                                {{ __('programs.The course talks about') }}
                            </p>

                            <p>
                                {{ __('programs.Through the following main axes:') }}
                            </p>
                                <ul>
                                    <li>{{ __('programs.Correlation between internal and external policy.') }}</li>
                                    <li>{{ __('programs.Reasons for studying international relations.') }}</li>
                                    <li>{{ __('programs.International relations and diplomatic history.') }}</li>
                                    <li>{{ __('programs.Crisis Management Strategy.') }}</li>
                                </ul>
                                <br>
                                <p>
                                    {{ __('programs.2- Political Science:') }}
                                </p>
                                <p>
                                    {{ __('programs.During this course, the importance') }}
                                </p>

                                <p>
                                    {{ __('programs.Through these axes:') }}
                                </p>

                                <ul>
                                    <li>{{ __('programs.Study political theory and philosophy.') }}</li>
                                    <li>{{ __('programs.Comparative political science.') }}</li>
                                    <li>{{ __('programs.Public Administration.') }}</li>
                                    <li>{{ __('programs.Political behavior.') }}</li>
                                </ul>
                                <br>
                                <p>{{ __('programs.3- Political Philosophy') }}</p>


                                <ul>
                                    <li>{{ __('programs.The concept of political philosophy') }}</li>
                                    <li>{{ __('programs.The emergence of political philosophy.') }}</li>
                                    <li>{{ __('programs.The social dimensions of political philosophy') }}</li>
                                </ul>

                                <p>{{ __('programs.4- Law:') }}</p>
                                <p>{{ __('programs.It is the set of rules') }}</p>
                                <p>{{ __('programs.Several axes will be addressed, the most important of which are:') }}</p>
                                <p>{{ __('programs.Defining the legal base.') }}</p>
                                <ul>
                                    <li>{{ __('programs.The difference between the legal base and the moral base.') }}</li>
                                    <li>{{ __('programs.Personal Status Law.') }}</li>
                                    <li>{{ __('programs.Public Law.') }}</li>
                                </ul>

                                <p>{{ __('programs.5- International Relations Theory -:') }}</p>
                                <p>{{ __('programs.This material talks about') }}</p>
                                <p>{{ __('programs.Through these axes: ') }}</p>
                                <ul>
                                    <li>{{ __('programs.The concept of international relations.') }}</li>
                                    <li>{{ __('programs.International Relations (Subject and Curriculum).') }}</li>
                                    <li>{{ __('programs.Major theoretical dialogues in international relations.') }}</li>
                                    <li>{{ __('programs.The international relationship as a historical phenomenon.') }}</li>
                                </ul>

                                <p>{{ __('programs.6-International Political Economic:') }}</p>
                                <p>{{ __('programs.This course studies the interaction and mutual') }}</p>
                                <p>{{ __('programs.Turning to the three ideologies (nationalism, liberalism, and Marxism).') }}</p>
                                <p>{{ __('programs.Through these axes:') }}</p>
                                <ul>
                                    <li>{{ __('programs.The international trade system.') }}</li>
                                    <li>{{ __('programs.The International Monetary System') }}</li>
                                    <li>{{ __('programs.Multinational companies.') }}</li>
                                    <li>{{ __('programs.economical development.') }}</li>
                                </ul>

                                <p>{{ __('programs.7- Diplomacy:') }}</p>
                                <p>{{ __('programs.The concept of diplomacy is') }}</p>
                                <p>{{ __('programs.Through the following axes:') }}</p>
                                
                                <ul>
                                    <li>{{ __('programs.The historical development of the concept of diplomacy.') }}</li>
                                    <li>{{ __('programs.Organizational approach.') }}</li>
                                    <li>{{ __('programs.Diplomacy and diplomatic history.') }}</li>
                                </ul>


                        </div>


                    </div>
                </div>

            </div>

           @include('pages.programs.looking')

        </div>
    </section>

@endsection
