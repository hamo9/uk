    <!-- ======= Sidebar; ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            @auth
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/profile') }}">
                        <i class="bi bi-grid"></i>
                        <span>{{ __('user.profile') }}</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav0" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span>{{ __('user.settings') }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav0" class="nav-content collapse" data-bs-parent="#sidebar-nav">


                        <li>
                            <a href="{{ url('/complete-register') }}">
                                <i class="bi bi-circle"></i><span>{{ __('user.Complete information') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('edit-profile') }}">
                                <i class="bi bi-circle"></i><span>{{ __('register.Edit Profile') }}</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/change-pass') }}">
                                <i class="bi bi-circle"></i><span>{{ __('user.Change Password') }}</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span>{{ __('home.language') }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">


                        <li>
                            <a href="{{ url('lang/en') }}">
                                <i class="bi bi-circle"></i><span>English</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('lang/ar') }}">
                                <i class="bi bi-circle"></i><span>عربي</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- End Tables Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#">
                        <i class="bi bi-envelope"></i>
                        <span>{{ __('user.Contact') }}</span>
                    </a>
                </li><!-- End Contact Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>{{ __('user.Sign Out') }}</span>

                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @else

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/') }}">
                        <i class="bi bi-grid"></i>
                        <span>{{ __('home.home') }}</span>
                    </a>
                </li><!-- End Dashboard Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/register') }}">
                        <i class="bi bi-grid"></i>
                        <span>{{ __('home.Registration') }}</span>
                    </a>
                </li><!-- End Dashboard Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/login') }}">
                        <i class="bi bi-grid"></i>
                        <span>{{ __('home.login') }}</span>
                    </a>
                </li><!-- End Dashboard Nav -->



                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span>{{ __('home.language') }}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">


                        <li>
                            <a href="{{ url('lang/en') }}">
                                <i class="bi bi-circle"></i><span>English</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('lang/ar') }}">
                                <i class="bi bi-circle"></i><span>عربي</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- End Tables Nav -->

            @endauth



        </ul>

    </aside><!-- End Sidebar-->
