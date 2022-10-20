@extends('layouts.master')
@section('title')
    {{ __('programs.Department of Integrated Non-Surgical Aesthetic Medicine') }}
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
                    <li>{{ __('programs.Department of Integrated Non-Surgical Aesthetic Medicine') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->

    <section class="programs_box deploma_box section-bg">
        <div class="container" data-aos="fade-up">

            <h1 class="h2 mb-4 text-center title_department">
                {{ __('programs.Department of Integrated Non-Surgical Aesthetic Medicine') }}</h1>
            <div class="row gy-4">

                <div class="d-flex align-items-center">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <img src="assets/img/programs/p14.jpeg"
                                alt="{{ __('programs.Department of Integrated Non-Surgical Aesthetic Medicine') }}" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p class="lead">
                                {{ __('programs.Cosmetic medicine: Cosmetic medicine is known') }}
                            </p>
                        </div>

                        <hr>

                        <div class="col-md-2">
                            <h4><span>{{ __('programs.who should attend?') }}</span></h4>
                        </div>
                        <div class="col-md-10">
                            <p>{{ __('programs.Cosmetic specialists in medical and cosmetic centers and anyone') }}</p>
                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.objective') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <p>
                                {{ __('programs.This program aims to:') }}
                            </p>
                            <p>{{ __('programs.Developing basic knowledge in aesthetic principles and ') }}</p>
                            <p>{{ __('programs.Introducing participants to the concepts of cosmetic medicine') }}</p>
                            <p>{{ __('programs.Providing high-level training in required') }}</p>
                            <p>{{ __('programs.The individual acquires the skill to perform') }}</p>
                            <br>

                        </div>

                        <div class="col-md-2 mt-4">
                            <h4>{{ __('programs.content') }}</h4>
                        </div>
                        <div class="col-md-10 mt-1 mt-md-4 ">
                            <h6>{{ __('programs.Botox') }}</h6>

                            <ul>
                                <li>{{ __('programs.Distthe facial muscles and recognize') }}</li>
                                <li>{{ __('programs.Treatment of the upper third of the face with Botox') }}</li>
                                <li>{{ __('programs.treatment of so-called rabbit wrinkles') }}</li>
                                <li>{{ __('programs.treatment of neck wrinkles') }}</li>
                                <li>{{ __('programs.treatment of gummy smile') }}</li>
                                <li>{{ __('programs.treatment of hyperhidrosis') }}</li>
                                <li>{{ __('programs.treatment of rosacea in the cheeks') }}</li>
                                <li>{{ __('programs.Treatment of sad face') }}</li>
                                <li>{{ __('programs.Nefertiti Nick Leaf') }}</li>
                                <li>{{ __('programs.treatment of neck wrinkles') }}</li>
                                <li>{{ __('programs.Meso Botox.') }}</li>
                                <li>{{ __('programs.Treatment of muscles') }}</li>
                                <li>{{ __('programs.the face is slimmed with botox.') }}</li>
                                <li>{{ __('programs.Treatment of lower eyelid wrinkles.') }}</li>
                                <li>{{ __('programs.Processing smoker lines') }}</li>
                                <li>{{ __('programs.different types of Botox and the differences between them.') }}</li>
                                <li>{{ __('programs.Botox mixtures and management.') }}</li>
                            </ul>
                            <br>
                            <h6>{{ __('programs.Filler') }}</h6>
                            <ul>
                                <li>{{ __('programs.identify the multiple ways to inject the filler feller') }}</li>
                                <li>{{ __('programs.lips') }}</li>
                                <li>{{ __('programs.Feller down the eye.') }}</li>
                                <li>{{ __('programs.Feller Cheeks') }}</li>
                                <li>{{ __('programs.the injection of the filler with Texas technology Filler injection') }}</li>
                                <li>{{ __('programs.to modify the shape of the nose') }}</li>
                                <li>{{ __('programs.feller injection of laughing lines') }}</li>
                                <li>{{ __('programs.Filler injection of the temple area.') }}</li>
                                <li>{{ __('programs.Filler injection to raise eyebrow.') }}</li>
                                <li>{{ __('programs.Filler injection of hands.') }}</li>
                                <li>{{ __('programs.The filler is injected into the chin.') }}</li>
                                <li>{{ __('programs.Filler injection of eyebrow confluence area') }}</li>
                                <li>{{ __('programs.Filler injection with caniola.') }}</li>
                                <li>{{ __('programs.treatment of more than one area of the face at the same time.') }}</li>
                                <li>{{ __('programs.Reproportion the face by injecting the filler.') }}</li>
                                <li>{{ __('programs.cases in which you should avoid filler injections') }}</li>
                                <li>{{ __('programs.The combinations of filler injections and the way they are managed.') }}</li>

                            </ul>

                            <h6>{{ __('programs.mesotherapy') }}</h6>
                            <p>{{ __('programs.definition, components, properties of mesotherapy chemicals') }}</p>

                            <ul>
                                <li>{{ __('programs.identification of miso, its ingredients and types') }}</li>
                                <li>{{ __('programs.identify the injection method and the') }}</li>
                                <li>{{ __('programs.use of mesotherapy to treat hair loss') }}</li>
                                <li>{{ __('programs.use of miso for skin freshness') }}</li>
                                <li>{{ __('programs.use miso to dissolve fat') }}</li>
                                <li>{{ __('programs.use of the dermapen device with miso') }}</li>
                                <li>{{ __('programs.Share of mesotherapy with filler and botox.') }}</li>
                                <li>{{ __('programs.optimal use of mesotherapy.') }}</li>
                                <li>{{ __('programs.Contras to use.') }}</li>
                                <li>{{ __('programs.mixand how they are managed. ') }}</li>

                            </ul>

                            <h6>{{ __('programs.plasma rich PRP') }}</h6>
                            <ul>
                                <li>{{ __('programs.the best way to draw blood while preserving platelets') }}</li>
                                <li>{{ __('programs.use of the tiff to separate platelets from the blood') }}</li>
                                <li>{{ __('programs.ways of injecting plasma by region') }}</li>
                                <li>{{ __('programs.the injection of plasma into the face plasma injection') }}</li>
                                <li>{{ __('programs.into the scalp') }}</li>
                                <li>{{ __('programs.the difference between the preparation') }}</li>
                                <li>{{ __('programs.PRPMatrix.') }}</li>
                                <li>{{ __('programs.Inhibits the application of plasma.') }}</li>
                                <li>{{ __('programs.mixand how they are managed.') }}</li>
                                <li>{{ __('programs.dark anomaly treatment.') }}</li>
                                <li>{{ __('programs.Share with mesotherapy in various applications.') }}</li>

                            </ul>

                            <h6>{{ __('programs.Threads screwing') }}</h6>
                            <ul>
                                <li>{{ __('programs.cases of the use of tensile filaments') }}</li>
                                <li>{{ __('programs.cases where tensile strands should be avoided') }}</li>
                                <li>{{ __('programs.how to use tensile filaments') }}</li>
                                <li>{{ __('programs.different types of threads.') }}</li>
                                <li>{{ __('programs.facelift techniques.') }}</li>
                                <li>{{ __('programs.eyebrow eyebrow-raising techniques.') }}</li>
                                <li>{{ __('programs.neck neck tightening techniques.') }}</li>
                                <li>{{ __('programs.possible mixes and the machine rye.') }}</li>
                                <li>{{ __('programs.anti-anti-bullying.') }}</li>
                                <li>{{ __('programs.Ideal cases for threading.') }}</li>
                                <li>{{ __('programs.instructions to be adhered to after the threads have been applied.') }}</li>

                            </ul>

                            <h6>{{ __('programs.plasmag device') }}</h6>
                            <ul>
                                <li>{{ __('programs.the importance of plasmag and how to use it') }}</li>
                                <li>{{ __('programs.tightening of the upper and lower eyelids using plasmag') }}</li>
                                <li>{{ __('programs.remove moles using plasmage') }}</li>
                                <li>{{ __('programs.Treatment of scar') }}</li>
                                <li>{{ __('programs.treatment of sagging skin') }}</li>
                                <li>{{ __('programs.processing starch marks.') }}</li>
                                <li>{{ __('programs.raising the eyebrow.') }}</li>
                                <li>{{ __('programs.lift the lip.') }}</li>
                                <li>{{ __('programs.the right way to use.') }}</li>
                                <li>{{ __('programs.Contras to use.') }}</li>
                                <li>{{ __('programs.possible mixtures.') }}</li>
                            </ul>


                        </div>


                    </div>
                </div>

            </div>

            @include('pages.programs.looking')

        </div>
    </section>
@endsection
