  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/new/logo.jpeg" alt="logo" width="80px" height="80px">
        <h1></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url('/') }}">{{ __('home.home') }}</a></li>
          <li class="dropdown"><a href="#"><span>{{ __('home.about') }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/about-us') }}">{{ __('home.about us') }}</a></li>
              <li><a href="#">{{ __('home.Agents') }}</a></li>
              <li><a href="#">{{ __('home.Founders') }}</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ url('/programs') }}">{{ __('home.All Programs') }}</a></li>
          <li class="dropdown"><a href="#"><span>{{ __('home.Verifecation Code') }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">{{ __('home.Certificales') }}</a></li>
              <li><a href="#">{{ __('home.Centers And Instrueters') }}</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>{{ __('home.Aeeridilaion') }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>{{ __('home.Center') }}</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">{{ __('home.Certified center') }}</a></li>
                  <li><a href="#">{{ __('home.Qualifications') }}</a></li>
                  <li><a href="#">{{ __('home.Advantages') }}</a></li>
                  <li><a href="#">{{ __('home.Register') }}</a></li>

                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>{{ __('home.Instructors') }}</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">{{ __('home.Certified Instructors') }}</a></li>
                  <li><a href="#">{{ __('home.Advantages') }}</a></li>
                  <li><a href="#">{{ __('home.Register') }}</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="{{ url('/contact-us') }}">{{ __('home.Contact Us') }}</a></li>
          <li class="dropdown"><a href="#"><span>{{ __('home.language') }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

            @if(App::getLocale() == 'ar')
            <a href="{{ url('lang/en') }}" class="nav-item nav-link">English</a>
            @else
            <a href="{{ url('lang/ar') }}" class="nav-item nav-link">عربي</a>
            @endif
            </ul>
          </li>
          <li><a href="{{ url('/login') }}">{{ __('home.login') }}</a></li>

        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="{{ url('register') }}">{{ __('home.Registration') }}</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
