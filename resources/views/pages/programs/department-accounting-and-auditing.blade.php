@extends('layouts.master')
@section('title')
    {{ __('programs.Department - Accounting and Auditing') }}
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
                    <li>{{ __('programs.Department - Accounting and Auditing') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->

    <section class="programs_box deploma_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 text-center title_department">
                {{ __('programs.Department - Accounting and Auditing') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <img src="assets/img/programs/p11.jpeg" alt="{{ __('programs.Department - Accounting and Auditing') }}" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p class="lead">
                                {{ __('programs.Accounting is defined as a tool for measuring') }}
                            </p>
                        </div>

                        <hr>

                        <div class="col-md-2">
                            <h4><span>{{ __('programs.who should attend?') }}</span></h4>
                        </div>
                        <div class="col-md-10">
                            <p>{{ __('programs.Directors of all companies and institutions') }}</p>
                            <p>{{ __('programs.Directors of financial divisions in companies ') }}</p>
                            <p>{{ __('programs.Accountants in all companies, institutions and bodies') }}</p>
                            <p>{{ __('programs.Officials in the management accounting department of the company') }}</p>
                            <p>{{ __('programs.Students and graduates of the Faculties of Economics and Finance ') }}</p>
                            <p>{{ __('programs.Anyone who has an ambition to learn the accounting program') }}</p>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.objective') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.This program aims to:') }}
                            </p>
                            <p>{{ __('programs.To give participants the necessary expertise in') }}</p>
                            <p>{{ __('programs.How to deal with financial statements') }}</p>
                            <p>{{ __('programs.Providing participants with sufficient experience') }}</p>
                            <p>{{ __('programs.Work to implement, review and audit all financial procedures') }}</p>

                            <br>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.content') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.Specialized materials in accounting and auditing:') }}
                            </p>
                            <ol>
                                <li>{{ __('programs.Financial accounting') }}</li>
                                <li>{{ __('programs.Administrative accounting') }}</li>
                                <li>{{ __('programs.Government accounting') }}</li>
                                <li>{{ __('programs.Audit and audit') }}</li>
                                <li>{{ __('programs.Accounting systems') }}</li>
                            </ol>
                            <p>{{ __('programs.About materials:') }}</p>
                            <p>{{ __('programs.1- Financial accounting: the most important branches') }}</p>

                            <p>{{ __('programs.Our main themes for this specialty are:') }}</p>
                            <ul>
                                <li>{{ __('programs.Analysis of financial statements') }}</li>
                                <li>{{ __('programs.Record financial transactions in the journal') }}</li>
                                <li>{{ __('programs.Balance of review') }}</li>
                                <li>{{ __('programs.Budget') }}</li>
                                <li>{{ __('programs.Closing accounts') }}</li>
                            </ul>

                            <p>{{ __('programs.2-Administrative accounting: financial') }}</p>
                            <p>{{ __('programs.The main themes of this specialty are:') }}</p>
                            <ul>
                                <li>{{ __('programs.Financial planning') }}</li>
                                <li>{{ __('programs.Analysis and feasibility studies') }}</li>
                                <li>{{ __('programs.Statistical analysis') }}</li>
                                <li>{{ __('programs.Standard costs Internal control') }}</li>
                            </ul>

                            <p>{{ __('programs.3-Government Accounting: A branch of') }}</p>
                            <p>{{ __('programs.Our main themes in this specialty are:') }}</p>
                            <ul>
                                <li>{{ __('programs.Accounting measurement in government accounting') }}</li>
                                <li>{{ __('programs.Cost system in government units') }}</li>
                                <li>{{ __('programs.Preparing the budgets of government departments') }}</li>
                                <li>{{ __('programs.Financial statements and their uses') }}</li>
                                <li>{{ __('programs.Accounting adjustments') }}</li>
                                <li>{{ __('programs.Balance of review after settlement') }}</li>
                            </ul>

                            <p>{{ __('programs.4- Audit and audit: Audit of what') }}</p>
                            <p>{{ __('programs.The main themes of this specialty are:') }}</p>
                            <ul>
                                <li>{{ __('programs.Financial review') }}</li>
                                <li>{{ __('programs.Examining the calculation of financial transactions') }}</li>
                                <li>{{ __('programs.Tax return') }}</li>
                                <li>{{ __('programs.Internal control') }}</li>
                                <li>{{ __('programs.Planning the audit process') }}</li>
                            </ul>

                            <p>{{ __('programs.5-Accounting systems: one of the areas') }}</p>
                            <ul>
                                <li>{{ __('programs.Financial statements') }}</li>
                                <li>{{ __('programs.Support documents') }}</li>
                                <li>{{ __('programs.Account receipt') }}</li>
                                <li>{{ __('programs.Accounting books') }}</li>
                            </ul>


                        </div>


                    </div>
                </div>

            </div>

           @include('pages.programs.looking')

        </div>
    </section>


@endsection
