@extends('layouts.master')
@section('title')
    {{ __('programs.Department of Business Administration') }}
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
                    <li>{{ __('programs.Department of Business Administration') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->

    <section class="programs_box deploma_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 text-center title_department">
                {{ __('programs.Department of Business Administration') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <img src="assets/img/programs/p13.jpeg"
                                alt="{{ __('programs.Department of Business Administration') }}" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p class="lead">
                                {{ __('programs.The business department is known as') }}
                            </p>
                        </div>

                        <hr>

                        <div class="col-md-2">
                            <h4><span>{{ __('programs.who should attend?') }}</span></h4>
                        </div>
                        <div class="col-md-10">
                            <p>{{ __('programs.Employees in the management of sectors in enterprises') }}</p>
                            <p>{{ __('programs.Human resources and development workers in all organizations') }}</p>
                            <p>{{ __('programs.Those wishing to work in the field') }}</p>
                            <p>{{ __('programs.Those wishing to qualify themselves') }}</p>
                            <p>{{ __('programs.Businessmen') }}</p>
                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.objective') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.The program aims to:') }}
                            </p>
                            <p>{{ __('Introducing participants to the concept of') }}</p>
                            <p>{{ __('programs.Preparing participants and qualifying them') }}</p>
                            <p>{{ __('programs.Hone the skills of managers to manage their') }}</p>
                            <p>{{ __('programs.Preparing individuals to run their own projects') }}</p>

                            <br>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.content') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>{{ __('programs.About materials:') }}</p>
                            <p>{{ __('programs.1-Corporate Governance: A set') }}</p>
                            <p>{{ __('programs.The main themes of this article are:') }}</p>

                            <ul>
                                <li>{{ __('programs.Setting company standards.') }}</li>
                                <li>{{ __('programs.Pay attention to the client’s expectations.') }}</li>
                                <li>{{ __('programs.How to plan well to manage the company.') }}</li>
                                <li>{{ __('programs.The right marketing strategy.') }}</li>
                            </ul>
                            <br>
                            <p>{{ __('programs.2-Human resources management:') }}</p>
                            <p>{{ __('programs.Human resources management can be considered one of') }}</p>
                            <p>{{ __('programs.The most important topics that we will address in this article:') }}</p>

                            <ul>
                                <li>{{ __('programs.Management understanding.') }}</li>
                                <br>
                            </ul>
                            <p>{{ __('programs.Human resources planning.') }}</p>
                            <p>{{ __('programs.The importance and objectives of human resources management.') }}</p>
                            <p>{{ __('programs.3-Quality management:') }}</p>
                            <p>{{ __('programs. Quality management can be defined as') }}</p>
                            <p>{{ __('programs.The most important topics we will discuss in this') }}</p>

                            <ul>
                                <li>{{ __('programs.Quality management principles.') }}</li>
                                <li>{{ __('programs.The benefits of applying quality management.') }}</li>
                                <li>{{ __('programs.The concept of comprehensive quality management.') }}</li>
                                <br>
                            </ul>


                            <p>{{ __('programs.4-Customer Service Management:') }}</p>
                            <p>{{ __('programs.This approach analyzes customer history data') }}</p>
                            <p>{{ __('programs.Our interlocutors in this article are:') }}</p>

                            <ul>
                                <li>{{ __('programs.Customer search strategy.') }}</li>
                                <li>{{ __('programs.Dealing with customers and finding solutions to their problems.') }}</li>
                                <li>{{ __('programs.Customer relationship management in banks.') }}</li>
                                <li>{{ __('programs.The organizational structure of customer service management.') }}</li>
                                <br>
                            </ul>

                            <p>{{ __('programs.5-Managing production processes and developing') }}</p>
                            <p>{{ __('programs.Sales Management: Sales management') }}</p>
                            <p>{{ __('programs.The main themes of this article:') }}</p>
                            <ul>
                                <li>{{ __('programs.The functions and skills of the sales manager.') }}</li>
                                <li>{{ __('programs.How to succeed in running a business.') }}</li>
                                <li>{{ __('programs.The importance of the sales management department.') }}</li>
                                <li>{{ __('programs.Sales traffic reports.') }}</li>
                                <br>
                            </ul>

                            <p>{{ __('programs.6-Negotiating skills:') }}</p>
                            <p>{{ __('programs.Understanding this skill is') }}</p>
                            <p>{{ __('programs.Negotiations are one of the most ') }}</p>
                            <p>{{ __('programs.Important topics in this article:') }}</p>
                            <ul>
                                <li>{{ __('programs.Effective communication skills.') }}</li>
                                <li>{{ __('programs.Persuasion skills.') }}</li>
                                <li>{{ __('programs.Planning.') }}</li>
                                <li>{{ __('programs.Aphoristhinking.') }}</li>
                                <br>
                            </ul>

                            <p>{{ __('programs.7-Financial management and accounting:') }}</p>
                            <p>{{ __('programs.Accounting and financial management is the main nerve') }}</p>
                            <p>{{ __('programs.So we’ll study this article together through these themes:') }}</p>
                            <ul>
                                <li>{{ __('programs.Basic financial statements (income list, balance sheet, cash flow list)') }}</li>
                                <br>
                            </ul>
                            <p>{{ __('programs.The most common financial analysis tools') }}</p>
                            <p>{{ __('programs.Investment instruments in financial markets.') }}</p>
                            <ul>
                                <li>{{ __('programs.Sound monetary management.') }}</li>
                                <br>
                            </ul>

                            <p>{{ __('programs.Areas of work in this field:') }}</p>
                            <ul>
                                <li>{{ __('programs.Production manager.') }}</li>
                                <li>{{ __('programs.Sales manager.') }}</li>
                                <li>{{ __('programs.Logistics Manager.') }}</li>
                                <li>{{ __('programs.Human Resources Manager.') }}</li>
                                <li>{{ __('programs.Marketing Manager.') }}</li>
                                <li>{{ __('programs.CFO.') }}</li>
                                <li>{{ __('programs.Operations Manager.') }}</li>
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
