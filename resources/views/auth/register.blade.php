@extends('layouts.master')
@section('title')
    {{ __('home.Registration') }}
@endsection

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('home.Registration') }}</h2>
                <ol>
                    <li><a href="{{ url('/') }}">{{ __('home.home') }}</a></li>
                    <li><a href="{{ url('/register') }}"> {{ __('home.Registration') }} </a> </li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->



    <main id="main">

        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">

                {{-- <div class="section-header">
                    <p><span>{{ __('home.Registration') }}</span></p>
                </div>
 --}}

                <div class="row">

                    <div class="col-md-4 text-center">
                        <img src="assets/img/register.png" alt="" class="img-fluid m-auto mt-md-5">
                    </div>


                    <div class="col-md-8">

                        <form method="POST" action="{{ route('register') }}" role="form" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="100">
                            @csrf

                            <div class="row gy-4">

                                <div class="col-lg-4 col-md-6">
                                    <input type="text" name="first_name" class="form-control" id="name"
                                        placeholder="{{ __('register.First Name') }}" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" autofocus :value="old('first_name')">
                                    <x-input-error :messages="$errors->get('first_name')" class="mt-2 text-danger" />
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <input type="text" name="father_name" class="form-control" id="name"
                                        placeholder="{{ __("register.Father's Name") }}" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" required :value="old('father_name')">
                                    <x-input-error :messages="$errors->get('father_name')" class="mt-2 text-danger" />
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <input type="text" name="grandfather_name" class="form-control" id="name"
                                        placeholder="{{ __("register.Grandfather's Name") }}" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" required>
                                    <x-input-error :messages="$errors->get('grandfather_name')" class="mt-2 text-danger" />
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <input type="text" name="family_name" class="form-control" id="name"
                                        placeholder="{{ __('register.Family Name') }}" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" required>
                                    <x-input-error :messages="$errors->get('family_name')" class="mt-2 text-danger" />
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control" name="telephone_number" id="phone"
                                        placeholder="{{ __('register.Telephone Number') }}" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" required>
                                    <x-input-error :messages="$errors->get('telephone_number')" class="mt-2 text-danger" />
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <input type="date" name="date_of_birth" class="form-control" id="date"
                                        placeholder="{{ __('register.Date of Birth') }}" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" required>
                                    <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2 text-danger" />
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" name="address"
                                        placeholder="{{ __('register.Address') }}" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" required>
                                    <x-input-error :messages="$errors->get('address')" class="mt-2 text-danger" />
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" name="specialization" id="people"
                                        placeholder="{{ __('register.Specialization to be registered') }}"
                                        data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
                                    <x-input-error :messages="$errors->get('specialization')" class="mt-2 text-danger" />
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="{{ __('register.Email') }}" data-rule="email"
                                        data-msg="Please enter a valid email" required>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="{{ __('register.password') }}" data-rule="password"
                                        data-msg="Please enter a valid email" required>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                </div>

                            </div>



                            <div class="text-center mt-4"><button type="submit">{{ __('register.send') }}</button></div>
                        </form>
                    </div><!-- End Reservation Form -->

                </div>

            </div>
        </section><!-- End Book A Table Section -->


    </main><!-- End #main -->
@endsection
