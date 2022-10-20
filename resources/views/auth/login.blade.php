@extends('layouts.master')
@section('title')
    {{ __('login.Log in') }}
@endsection

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('login.Log in') }}</h2>
                <ol>
                    <li><a href="{{ url('/') }}">{{ __('home.home') }}</a></li>
                    <li><a href="{{ url('/login') }}"> {{ __('login.Log in') }} </a> </li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->



    <main id="main">

        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">


                <div class="row">

                    <div class="col-md-4 text-center">
                        <img src="assets/img/login.png" alt="" class="img-fluid m-auto">
                    </div>


                    <div class="col-md-7 mt-4">

                        <form method="POST" action="{{ route('login') }}" role="form" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="100">
                            @csrf

                            <div class="row gy-4">

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="email" id="email"
                                        placeholder="{{ __('login.email') }}" data-rule="email"
                                        data-msg="Please enter a valid email" required>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                </div>

                                <div class="col-md-12">
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="{{ __('login.password') }}" data-rule="password"
                                        data-msg="Please enter a valid email" required>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                </div>

                            </div>


                            <div class="text-center mt-4"><button type="submit">{{ __('login.Log in') }}</button></div>
                        </form>
                    </div><!-- End Reservation Form -->

                </div>

            </div>
        </section><!-- End Book A Table Section -->


    </main><!-- End #main -->
@endsection


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ url('/') }}">
                <img src="assets/img/new/logo.jpeg" alt="logo" width="80px" height="80px">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('login.email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('login.password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('login.remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('login.Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
