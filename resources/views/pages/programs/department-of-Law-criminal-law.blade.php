@extends('layouts.master')
@section('title')
    {{ __('programs.Department of Law - Criminal Law') }}
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
                    <li>{{ __('programs.Department of Law - Criminal Law') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->


    <section class="programs_box deploma_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 text-center title_department">
                {{ __('programs.Department of Law - Criminal Law') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <img src="assets/img/programs/p5.jpeg" alt=" {{ __('programs.Department of International Relations and Diplomacy') }}" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p class="lead">
                                {{ __('programs.The Criminal Law is a branch') }}
                            </p>
                        </div>

                        <hr>

                        <div class="col-md-2">
                            <h4><span>{{ __('programs.who should attend?') }}</span></h4>
                        </div>
                        <div class="col-md-10">
                            <p>{{ __('programs.This program is aimed to:') }}</p>
                            <p>{{ __('programs.-All law workers') }}</p>
                            <p>{{ __('programs.-Judges, lawyers and legal practitioners') }}</p>
                            <p>{{ __('programs.-Students and graduates of law and law schools') }}</p>
                            <p>{{ __('programs.– Students specializing in') }}</p>
                            <p>{{ __('programs.-Legal workers in ministries and institutions') }}</p>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.objective') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>{{ __('programs.The criminal law programme will') }}</p>
                            <p>{{ __('programs.Chapter 1: Crime Legally:') }}</p>
                            <p>{{ __('programs.The offence is an act or omission') }}</p>
                            <ul>
                                <li>{{ __('programs.Understanding the crime') }}</li>
                                <li>{{ __('programs.Crime prevention') }}</li>
                                <li>{{ __('programs.Elements of the crime') }}</li>
                                <li>{{ __('programs.Criminal contribution') }}</li>
                                <li>{{ __('programs.Criminal proceedings') }}</li>
                                <li>{{ __('programs.Types and forms of international') }}</li>
                                <li>{{ __('programs.Reasons for legalization') }}</li>
                                <li>{{ __('programs.Criminal liability prohibitions') }}</li>

                            </ul>
                            <br>

                            <p>{{ __('programs.Chapter 2: Criminal Law:') }}</p>
                            <p>{{ __('programs.We have also known that criminal') }}</p>
                            <ul>
                                <li>{{ __('programs.The concept of criminal law') }}</li>
                                <li>{{ __('programs.Criminal law sections') }}</li>
                                <li>{{ __('programs.Criminal law methods') }}</li>
                                <li>{{ __('programs.Criminal law legislation') }}</li>
                                <li>{{ __('programs.Criminal legal terms') }}</li>
                                <li>{{ __('programs.Sources of criminal law') }}</li>
                                <li>{{ __('programs.Legal interpretation') }}</li>
                                <li>{{ __('programs.The difference between criminal') }}</li>
                                <li>{{ __('programs.The principle of legitimacy') }}</li>
                                <li>{{ __('programs.The principle of regionalism') }}</li>
                                <li>{{ __('programs.Examples of some criminal offences') }}</li>

                            </ul>
                            <br>
                            <p>{{ __('programs.Chapter 3: Methods of criminal investigation:') }}</p>
                            <p>{{ __('programs.A criminal investigation involves') }}</p>
                            <ul>
                                <li>{{ __('programs.The qualities of the investigator') }}</li>
                                <li>{{ __('programs.Criminal evidence methods') }}</li>
                                <li>{{ __('programs.Judicial control') }}</li>
                                <li>{{ __('programs.Detection of drug use and dealing with detainees') }}</li>
                                <li>{{ __('programs.Crime scene preparation') }}</li>
                                <li>{{ __('programs.Protection of evidence at the crime scene') }}</li>
                                <li>{{ __('programs.Gathering evidence at the crime scene') }}</li>
                                <li>{{ __('programs.Dealing with blood stains at the crime scene.') }}</li>
                              
                            </ul>
                            <br>



                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.content') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.About materials:') }}
                            </p>
                            <p>
                                {{ __('programs.1-Corporate Governance: A set') }}
                            </p>
                            <p>
                                {{ __('programs.The main themes of this article are:') }}
                            </p>

                                <ul>
                                    <li>{{ __('programs.Setting company standards.') }}</li>
                                    <li>{{ __('programs.Pay attention to the client’s expectations.') }}</li>
                                    <li>{{ __('programs.How to plan well to manage the company.') }}</li>
                                    <li>{{ __('programs.The right marketing strategy.') }}</li>
                                </ul>
                                <br>
                                <p>
                                    {{ __('programs.2-Human resources management:') }}
                                </p>
                                <p>
                                    {{ __('programs.Human resources management can') }}
                                </p>

                                <p>
                                    {{ __('programs.The most important topics that') }}
                                </p>

                                <ul>
                                    <li>{{ __('programs.Management understanding.') }}</li>
                                </ul>
                                <br>
                                <p>{{ __('programs.Human resources planning.') }}</p>
                                <p>{{ __('programs.The importance and objectives') }}</p>

                                <p>{{ __('programs.3-Quality management:') }}</p>

                                <p>{{ __('programs.Quality management can be defined') }}</p>

                                <p>{{ __('programs.The most important topics we') }}</p>

                                
                                <ul>
                                    <li>{{ __('programs.Quality management principles.') }}</li>
                                    <li>{{ __('programs.The benefits of applying quality management.') }}</li>
                                    <li>{{ __('programs.The concept of comprehensive quality management.') }}</li>
                                   
                                </ul>
                              
                                <p>{{ __('programs.4-Customer Service Management:') }}</p>
                                <p>{{ __('programs.Our interlocutors in this article are:') }}</p>

                                <ul>
                                    <li>{{ __('programs.Customer search strategy.') }}</li>
                                    <li>{{ __('programs.Dealing with customers and') }}</li>
                                    <li>{{ __('programs.Customer relationship management in banks.') }}</li>
                                    <li>{{ __('programs.The organizational structure') }}</li>

                                </ul>

                                <p>{{ __('programs.5-Managing production processes') }}</p>
                                <p>{{ __('programs.Sales Management: Sales management is') }}</p>
                                <p>{{ __('programs.The main themes of this article:') }}</p>
                                <ul>
                                    <li>{{ __('programs.The functions and skills of the sales manager.') }}</li>
                                    <li>{{ __('programs.How to succeed in running a business.') }}</li>
                                    <li>{{ __('programs.The importance of the sales management department.') }}</li>
                                    <li>{{ __('programs.Sales traffic reports.') }}</li>
                                </ul>

                                <p>{{ __('programs.6-Negotiating skills:') }}</p>
                                <p>{{ __('programs.Understanding this skill is the') }}</p>
                                <p>{{ __('programs.Negotiations are one of the most') }}</p>
                                <p>{{ __('programs.Important topics in this article:') }}</p>
                                
                                <ul>
                                    <li>{{ __('programs.Effective communication skills.') }}</li>
                                    <li>{{ __('programs.Persuasion skills.') }}</li>
                                    <li>{{ __('programs.Planning.') }}</li>
                                    <li>{{ __('programs.Aphoristhinking.') }}</li>
                                </ul>

                                <p>{{ __('programs.7-Financial management and accounting:') }}</p>
                                <p>{{ __('programs.Accounting and financial management is') }}</p>
                                <p>{{ __('programs.So we’ll study this article together through these themes:') }}</p>
                      
                                <ul>
                                    <li>{{ __('programs.Basic financial statements') }}</li>
                                </ul>

                                <p>{{ __('programs.The most common financial') }}</p>
                                <p>{{ __('programs.Investment instruments in financial markets.') }}</p>
                             
                                <ul>
                                    <li>{{ __('programs.Sound monetary management.') }}</li>
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
                                </ul>


                        </div>


                    </div>
                </div>

            </div>

           @include('pages.programs.looking')

        </div>
    </section>

@endsection
