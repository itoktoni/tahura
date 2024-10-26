<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>{{ config('app.name') }}</title>

    <meta name="author" content="{{ config('app.name') }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @stack('meta')

    @vite(['resources/zunzo/stylesheets/style.css'])

    <!-- Favicon and touch icons  -->
    <link href="{{ asset('zunzo/images/icon/favicon.png') }}" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{ asset('zunzo/images/icon/favicon.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('zunzo/images/icon/favicon.png') }}" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>

<body class="header-sticky">

    <header id="header" class="header style1 clearfix">
        <div class="themeflat-container">
            <div class="header-inner">
                <div id="logo" class="logo">
                    <a href="{{ url('/') }}" rel="home">
                        <img id="a2"
                            src="{{ env('APP_LOGO') ? url('storage/' . env('APP_LOGO')) : url('assets/media/image/logo.png') }}">
                    </a>
                </div><!-- /.logo -->
                <div class="nav-wrap">
                    <div class="btn-menu">
                        <span class="line-1"></span>
                    </div><!-- //mobile menu button -->
                    <nav id="mainnav" class="mainnav d-none d-lg-block">
                        <div id="logo-mobie" class="logo">
                            <a href="{{ url('/') }}" rel="home">
                                <img id="a2"
                                    src="{{ env('APP_LOGO') ? url('storage/' . env('APP_LOGO')) : url('assets/media/image/logo.png') }}">
                            </a>
                        </div><!-- /.logo -->
                        <ul class="menu">
                            <li>
                                <a href="{{ url('/') }}">Home page</a>
                            </li>

                            @foreach ($pages as $page)
                            <li><a href="{{ route('page', ['slug' => $page->page_slug]) }}">{{ $page->page_title }}</a></li>
                            @endforeach

                            <li>
                                <a href="{{ route('events') }}">Race</a>
                                <ul class="submenu">
                                    @foreach ($events as $event)
                                    <li>
                                        <a href="{{ route('event-detail', ['code' => $event->event_slug]) }}">
                                            {{ $event->field_name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul><!-- /.submenu -->
                            </li>

                            <li><a href="{{ route('participants') }}">Participants</a></li>

                            @auth
                            <li><a href="{{ route('profile') }}">[ Profile ]</a></li>
                            @endauth

                            @if (auth()->check())
                                @if (auth()->user()->payment_status != 'PAID')
                                <li style="margin-left: 5rem">
                                @include('public.cart')
                                </li>
                                @endif
                            <li>
                                <a class="btn-contact button-signout" href="{{ route('signout') }}" role="button">Sign out</a>
                            </li>
                            </li>
                            @else
                                <a class="btn-contact button-login" href="{{ route('login') }}" role="button">
                                    Login
                                </a>
                            @endif

                        </ul><!-- /.menu -->
                    </nav><!-- /.mainnav -->
                </div><!-- /.nav-wrap -->



            </div><!-- /.header-inner -->
        </div>
    </header><!-- /.header -->

    <div class="overlay-menu-mobie">
        <div class="close-btn">
            <span class="close-menus"></span>
        </div>

        <nav id="mainnav" class="mainnav">
            <div id="logo-mobie" class="logo">
                <a href="{{ url('/') }}" rel="home">
                    <img id="a2"
                        src="{{ env('APP_LOGO') ? url('storage/' . env('APP_LOGO')) : url('assets/media/image/logo.png') }}">
                </a>
            </div><!-- /.logo -->
            <ul class="menu">
                <li>
                    <a href="#">Home page</a>
                </li>
                <li><a href="about.html">About us</a></li>
                <li><a href="#">Our Events</a>
                    <ul class="submenu">
                        <li><a href="event.html">Events</a></li>
                        <li><a href="event-details.html">Events Details</a></li>
                    </ul><!-- /.submenu -->
                </li>

                <li><a href="#">Latest News</a>
                    <ul class="submenu">
                        <li><a href="blog.html">Blogs</a></li>
                        <li><a href="blog-single.html">Blogs Single</a></li>
                    </ul><!-- /.submenu -->
                </li>
                <li><a href="contact.html">Contact us</a></li>
            </ul><!-- /.menu -->
        </nav><!-- /.mainnav -->

    </div>

    @yield('content')

    <!-- Footer -->
    <footer class="footer background-black">
        <div class="footer-widgets">
            <div class="themeflat-container">
                <div class="row footer-top">
                    <div class="col-xxl-2 col-lg-2 col-xl-2 col-md-2 col-sm-12 logo-footer">
                        <div class="widget text-center">
                            <div class="textwidget">
                                <a href="{{ url('/') }}" rel="home">
                                    <img id="a2"
                                        src="{{ asset('zunzo/images/organized.png') }}">
                                </a>

                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-xxl-2 col-lg-2 col-xl-2 col-md-2 col-sm-12 logo-footer">
                        <div class="widget">
                            <div class="textwidget">
                                <a href="{{ url('/') }}" rel="home">
                                    <img id="a2"
                                        src="{{ asset('zunzo/images/system.png') }}">
                                </a>

                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-xxl-4 col-lg-4 col-xl-4 col-md-4 col-sm-12 mt-1">
                        <div class="widget">
                            <div class="textwidget mt-4">

                                <p>
                                    {{ env('APP_DESCRIPTION') }}
                                </p>

                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->


                    <div class="col-xxl-4 col-lg-4 col-xl-4 col-md-4 col-sm-12 new-letter mt-2">
                        <div class="widget widget_text">
                            <div class="text-phone">
                                <svg width="36" height="37" viewBox="0 0 36 37" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M26.43 16.3754C25.785 16.3754 25.275 15.8504 25.275 15.2204C25.275 14.6654 24.72 13.5104 23.79 12.5054C22.875 11.5304 21.87 10.9604 21.03 10.9604C20.385 10.9604 19.875 10.4354 19.875 9.80539C19.875 9.17539 20.4 8.65039 21.03 8.65039C22.53 8.65039 24.105 9.46039 25.485 10.9154C26.775 12.2804 27.6 13.9754 27.6 15.2054C27.6 15.8504 27.075 16.3754 26.43 16.3754Z"
                                        fill="white" />
                                    <path
                                        d="M31.8456 16.375C31.2006 16.375 30.6906 15.85 30.6906 15.22C30.6906 9.895 26.3556 5.575 21.0456 5.575C20.4006 5.575 19.8906 5.05 19.8906 4.42C19.8906 3.79 20.4006 3.25 21.0306 3.25C27.6306 3.25 33.0006 8.62 33.0006 15.22C33.0006 15.85 32.4756 16.375 31.8456 16.375Z"
                                        fill="#C3E92D" />
                                    <path
                                        d="M17.685 21.565L12.78 26.47C12.24 25.99 11.715 25.495 11.205 24.985C9.66 23.425 8.265 21.79 7.02 20.08C5.79 18.37 4.8 16.66 4.08 14.965C3.36 13.255 3 11.62 3 10.06C3 9.04 3.18 8.065 3.54 7.165C3.9 6.25 4.47 5.41 5.265 4.66C6.225 3.715 7.275 3.25 8.385 3.25C8.805 3.25 9.225 3.34 9.6 3.52C9.99 3.7 10.335 3.97 10.605 4.36L14.085 9.265C14.355 9.64 14.55 9.985 14.685 10.315C14.82 10.63 14.895 10.945 14.895 11.23C14.895 11.59 14.79 11.95 14.58 12.295C14.385 12.64 14.1 13 13.74 13.36L12.6 14.545C12.435 14.71 12.36 14.905 12.36 15.145C12.36 15.265 12.375 15.37 12.405 15.49C12.45 15.61 12.495 15.7 12.525 15.79C12.795 16.285 13.26 16.93 13.92 17.71C14.595 18.49 15.315 19.285 16.095 20.08C16.635 20.605 17.16 21.115 17.685 21.565Z"
                                        fill="#C3E92D" />
                                    <path
                                        d="M32.9554 27.7436C32.9554 28.1636 32.8804 28.5986 32.7304 29.0186C32.6854 29.1386 32.6404 29.2586 32.5804 29.3786C32.3254 29.9186 31.9954 30.4286 31.5604 30.9086C30.8254 31.7186 30.0154 32.3036 29.1004 32.6786C29.0854 32.6786 29.0704 32.6936 29.0554 32.6936C28.1704 33.0536 27.2104 33.2486 26.1754 33.2486C24.6454 33.2486 23.0104 32.8886 21.2854 32.1536C19.5604 31.4186 17.8354 30.4286 16.1254 29.1836C15.5404 28.7486 14.9554 28.3136 14.4004 27.8486L19.3054 22.9436C19.7254 23.2586 20.1004 23.4986 20.4154 23.6636C20.4904 23.6936 20.5804 23.7386 20.6854 23.7836C20.8054 23.8286 20.9254 23.8436 21.0604 23.8436C21.3154 23.8436 21.5104 23.7536 21.6754 23.5886L22.8154 22.4636C23.1904 22.0886 23.5504 21.8036 23.8954 21.6236C24.2404 21.4136 24.5854 21.3086 24.9604 21.3086C25.2454 21.3086 25.5454 21.3686 25.8754 21.5036C26.2054 21.6386 26.5504 21.8336 26.9254 22.0886L31.8904 25.6136C32.2804 25.8836 32.5504 26.1986 32.7154 26.5736C32.8654 26.9486 32.9554 27.3236 32.9554 27.7436Z"
                                        fill="white" />
                                </svg>
                                <div class="address">
                                    <p>Contact Us</p>
                                    <span>{{ env('APP_PHONE') }}</span>
                                </div>
                            </div>
                            <p><i class="icon-MapPin"></i>{{ env('APP_ADDRESS') }}</p>

                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->

                </div><!-- /.row -->
                <div class="row footer-bottom">
                    <div class="col-md-6 col-sm-12">
                        <div class="copyright">
                            <p>©2024 <a href="{{ url('/') }}" target="_blank"> {{ config('app.name') }}.</a> All Rights
                                Reserved.
                            </p>
                        </div>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-widgets -->
    </footer>

    <!-- Go Top -->
    <a class="go-top">
        <i class="icon-ctrl"></i>
    </a>
    <!-- Modal-login -->
    <div class="modal fade modal-login" id="exampleModalToggle" aria-hidden="true"
        aria-label="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="tfre_login-form">
                    <h2>Login:</h2>
                    <div class="error_message tfre_message"></div>
                    <form class="tfre_login" method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="container">
                            <div class="form-group">
                                <label for="username">User Name:</label>
                                <input type="text" name="login" id="username" placeholder="Email or user name"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" placeholder="Your password"
                                    required="">
                            </div>
                            <div>
                                <a href="#" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"
                                    data-bs-dismiss="modal" class="tfre-reset-password"
                                    id="tfre-reset-password">Forgot
                                    password?</a>
                            </div>
                            <input type="hidden" name="action" value="tfre_login_ajax">
                            <button type="submit" class="flat-button">Login</button>
                        </div>
                    </form>
                </div>
                <div class="container tfre_register" id="tfre_register_redirect">
                    <p>Don't you have an account? <a href="#" data-bs-target="#exampleModalToggle2"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Register.</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-login" id="exampleModalToggle2" aria-hidden="true"
        aria-label="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="tfre_registration-form">
                    <h2>Register:</h2>
                    <div class="error_message tfre_message"></div>
                    <form class="tfre_register" action="{{ route('register') }}" method="post"
                        enctype="multipart/form-data" id="tfre_custom-register-form">
                        <div class="container">
                            <div class="form-group">
                                <label for="username">User Name:</label>
                                <input type="text" name="username" id="usernames" placeholder="User name"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email-modal" placeholder="Email "
                                    required="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="passwords" placeholder="Your passsword"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password:</label>
                                <input type="password" name="confirm_password" id="confirm_password"
                                    placeholder="Confirm password" required="">
                            </div>
                            <input type="hidden" name="action" value="tfre_register_ajax">
                            <button type="submit" class="flat-button">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="container tfre_signin tfre_login_redirect" id="tfre_login_redirect">
                    <button type="submit" class="flat-button">Register</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-login" id="exampleModalToggle3" aria-hidden="true"
        aria-label="exampleModalToggleLabel3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="tfre-resset-password container">
                    <div class="tfre_messages message tfre_messages_reset_password"></div>
                    <form method="post" enctype="multipart/form-data">
                        <h4>Forgot your password?</h4>
                        <div class="form-group control-username">
                            <input name="user_login" class="form-control control-icon reset_password_user_login"
                                placeholder="Enter your username or email">
                            <input type="hidden" name="tfre_security_reset_password" value="667584e015">
                            <input type="hidden" name="action" value="tfre_reset_password_ajax">
                            <button type="submit" class="btn flat-button btn-block tfre_forgetpass">Get new
                                password</button>
                        </div>
                    </form>
                </div>
                <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                    data-bs-dismiss="modal" class="tfre_login_redirect">Back to Login</a>
            </div>
        </div>
    </div>
    <!-- Modal-login -->

    <script type="text/javascript" src="{{ asset('zunzo/javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/count-down.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/map.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/map.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/jquery-waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/jquery-countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/main.js') }}"></script>

    @stack('js')
</body>

</html>
