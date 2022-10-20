@extends('layouts.master_user')
@section('title')
    {{ __('register.Profile') }}
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>{{ __('register.Profile') }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">{{ __('user.profile') }}</a></li>
                <li class="breadcrumb-item active">{{ __('register.Profile') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        @if (auth()->user()->personal_photo == null)
                        <img src="assets/img/male.png" alt="Profile" class="rounded-circle" width="200px" height="200px">
                        @else
                        <img src="{{ auth()->user()->personal_photo }}" alt="Profile" class="rounded-circle" width="200px" height="200px">
                        @endif
                        
                        <h2>{{ auth()->user()->first_name }} {{ auth()->user()->father_name }}</h2>
                     
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered mb-4">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">{{ __('user.Profile Details') }}</button>
                            </li>


                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">


                                <div class="row">
                                    <div class="col-md-4 label ">{{ __('register.First Name') }}</div>
                                    <div class="col-md-8">{{ auth()->user()->first_name }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 label">{{ __("register.Father's Name") }}</div>
                                    <div class="col-md-8">{{ auth()->user()->father_name }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 label">{{ __("register.Family Name") }}</div>
                                    <div class="col-md-8">{{ auth()->user()->family_name }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 label">{{ __("register.Grandfather's Name") }}</div>
                                    <div class="col-md-8">{{ auth()->user()->grandfather_name }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 label">{{ __("register.Telephone Number") }}</div>
                                    <div class="col-md-8">{{ auth()->user()->telephone_number }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 label">{{ __("register.Email") }}</div>
                                    <div class="col-md-8">{{ auth()->user()->email }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 label">{{ __("register.Date of Birth") }}</div>
                                    <div class="col-md-8">{{ auth()->user()->date_of_birth }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 label">{{ __("register.Address") }}</div>
                                    <div class="col-md-8">{{ auth()->user()->address }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 label">{{ __("register.Specialization to be registered") }}</div>
                                    <div class="col-md-8">{{ auth()->user()->specialization }}</div>
                                </div>
                                <hr>


                                <div class="row">
                                    <div class="col-md-4 label mt-4">{{ __("register.personal photo") }}</div>
                                    <div class="col-md-8">
                                        <img src="{{ auth()->user()->personal_photo }}" alt="{{ __("register.personal photo") }}" class="rounded" width="200px">
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-md-4 label mt-4">{{ __("register.National Number Card") }}</div>
                                    <div class="col-md-8">
                                        <img src="{{ auth()->user()->national_number_card }}" alt="{{ __("register.National Number Card") }}" class="rounded" width="200px">
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-md-4 label mt-4">{{ __("register.Certificate of Graduation") }}</div>
                                    <div class="col-md-8">
                                        <img src="{{ auth()->user()->certificate_graduation }}" alt="{{ __("register.Certificate of Graduation") }}" class="rounded" width="200px">
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-md-4 label mt-4">{{ __("register.experience certificates") }}</div>
                                    <div class="col-md-8">
                                        <img src="{{ auth()->user()->experience_certificates }}" alt="{{ __("register.experience certificates") }}" class="rounded" width="200px">
                                    </div>
                                </div>


                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection




