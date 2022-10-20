@extends('layouts.master')
@section('title')
    {{ __('programs.Department International Arbitration and International Law') }}
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
                    <li>{{ __('programs.Department International Arbitration and International Law') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->

    <section class="programs_box deploma_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 text-center title_department">
                {{ __('programs.Department International Arbitration and International Law') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <img src="assets/img/programs/p3.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p class="lead">
                                {{ __('programs.International law: set') }}
                            </p>


                        </div>

                        <hr>

                        <div class="col-md-2">
                            <h4><span>{{ __('programs.who should attend?') }}</span></h4>
                        </div>
                        <div class="col-md-10">
                            <p>{{ __('programs.Lawyers – judges and prosecutors') }}</p>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.objective') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.The program aims to:') }}
                                <br>
                                {{ __('programs.Learn about the judicial system and its competences') }}
                                <br>
                                {{ __('programs.Preparing participants on how to apply the law') }}<br>
                                {{ __('programs.Use knowledge of arbitration to negotiate the terms') }}<br>
                                {{ __('programs.Qualification of arbitrators in all fields and lawyers interested in the field of arbitration') }}<br>
                            </p>
                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.content') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.Materials specializing in international') }}<br>
                                {{ __('programs.Civil law') }}<br>
                                {{ __('programs.Commercial law') }}<br>
                                {{ __('programs.Civil and commercial litigation law') }}<br>
                                {{ __('programs.International commercial arbitration') }}<br>
                                {{ __('programs.About materials:') }}<br><br>
                                {{ __('programs.1. Civil Law is one') }}<br>
                                <ul>
                                    <li>{{ __('programs.-Law and its application.') }}</li>
                                    <li>{{ __('programs.– Conflict of laws.') }}</li>
                                    <li>{{ __('programs.-Personal obligations or rights.') }}</li>

                                </ul>
                                {{ __('programs.2- Commercial Law: Is a set') }}<br>
                                {{ __('programs.Our interlocutors in this article:') }}<br>
                                <ul>
                                    <li>{{ __('programs.– Trade in general.') }}</li>
                                    <li>{{ __('programs.-Registration in the commercial register.') }}</li>
                                    <li>{{ __('programs.– Commercial agency contract.') }}</li>
                                    <li>{{ __('programs.– Avoidance and avoidance of sale.') }}</li>
                                    <li>{{ __('programs.Provisions for the provision of the shop') }}</li>

                                </ul>

                                {{ __('programs.3. Civil and Commercial') }}<br>
                                <ul>
                                    <li>{{ __('programs.-The judicial system.') }}</li>
                                    <li>{{ __('programs.-Conflict of laws in private international law.') }}</li>
                                    <li>{{ __('programs.-Jurisdiction.') }}</li>
                                    <li>{{ __('programs.– Rules of the Law of Pleadings.') }}</li>

                                </ul>

                                {{ __('programs.4.International Commercial') }}<br>
                                {{ __('programs.The main themes of this article:') }} <br>
                                <ul>
                                    <li>{{ __('programs.– International arbitration resources.') }}</li>
                                    <li>{{ __('programs.– Model arbitration clauses.') }}</li>
                                    <li>{{ __('programs.– Arbitration laws.') }}</li>
                                    <li>{{ __('programs.– The search method is for international arbitrators.') }}</li>

                                </ul>
                            </p>
                        </div>


                    </div>
                </div>


            </div>
            @include('pages.programs.looking')

        </div>
    </section>
@endsection
