<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Zunzo Html Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
                    <a href="index.html" rel="home">
                        <img id="a2" src="{{ asset('zunzo/images/logo.png') }}" alt="image">
                    </a>
                </div><!-- /.logo -->
                <div class="nav-wrap">
                    <div class="btn-menu">
                        <span class="line-1"></span>
                    </div><!-- //mobile menu button -->
                    <nav id="mainnav" class="mainnav">
                        <div id="logo-mobie" class="logo">
                            <a href="index.html" rel="home">
                                <img src="{{ asset('zunzo/images/logo.png') }}" alt="image">
                            </a>
                        </div><!-- /.logo -->
                        <ul class="menu">
                            <li>
                                <a href="#">Home page</a>
                                <ul class="submenu">
                                    <li class="current-menu-item"><a href="index.html">Home V.1</a></li>
                                    <li><a href="homev2.html">Home V.2</a></li>
                                    <li><a href="homev3.html">Home V.3</a></li>
                                </ul><!-- /.submenu -->
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
                </div><!-- /.nav-wrap -->
                <div class="header-right">
                    <div class="search">
                        <a class="show-search">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21.0004 21.0004L16.6504 16.6504" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="widget widget-search top-search">
                            <form action="#" id="searchform" method="get">
                                <div>
                                    <input type="text" id="s" class="sss" placeholder="Search">
                                    <button aria-label="Search" class="wp-element-button" type="submit"><i
                                            class="icon-U"></i></button>
                                </div>

                            </form>
                        </div><!-- /.widget-search -->
                    </div>
                    <div class="login">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.6484 17.8756C18.2206 15.4072 16.0203 13.6372 13.4525 12.7981C14.7226 12.042 15.7094 10.8898 16.2614 9.51853C16.8134 8.14726 16.8999 6.63272 16.5078 5.20749C16.1157 3.78226 15.2666 2.52515 14.0909 1.62921C12.9151 0.733275 11.4778 0.248047 9.99964 0.248047C8.52146 0.248047 7.08414 0.733275 5.90842 1.62921C4.73269 2.52515 3.88358 3.78226 3.49146 5.20749C3.09935 6.63272 3.18592 8.14726 3.73788 9.51853C4.28984 10.8898 5.27668 12.042 6.54683 12.7981C3.97902 13.6362 1.77871 15.4062 0.350893 17.8756C0.298533 17.961 0.263803 18.056 0.248752 18.155C0.233701 18.254 0.238634 18.355 0.26326 18.4521C0.287886 18.5492 0.331707 18.6404 0.392136 18.7202C0.452565 18.8001 0.528379 18.867 0.615104 18.9171C0.70183 18.9672 0.79771 18.9995 0.897088 19.0119C0.996466 19.0243 1.09733 19.0167 1.19373 18.9896C1.29012 18.9624 1.3801 18.9162 1.45835 18.8537C1.5366 18.7912 1.60154 18.7136 1.64933 18.6256C3.41558 15.5731 6.53746 13.7506 9.99964 13.7506C13.4618 13.7506 16.5837 15.5731 18.35 18.6256C18.3977 18.7136 18.4627 18.7912 18.5409 18.8537C18.6192 18.9162 18.7092 18.9624 18.8056 18.9896C18.902 19.0167 19.0028 19.0243 19.1022 19.0119C19.2016 18.9995 19.2975 18.9672 19.3842 18.9171C19.4709 18.867 19.5467 18.8001 19.6072 18.7202C19.6676 18.6404 19.7114 18.5492 19.736 18.4521C19.7607 18.355 19.7656 18.254 19.7505 18.155C19.7355 18.056 19.7008 17.961 19.6484 17.8756ZM4.74964 7.0006C4.74964 5.96224 5.05755 4.94721 5.63443 4.08385C6.21131 3.2205 7.03124 2.54759 7.99056 2.15023C8.94987 1.75287 10.0055 1.6489 11.0239 1.85147C12.0423 2.05405 12.9777 2.55406 13.712 3.28829C14.4462 4.02251 14.9462 4.95797 15.1488 5.97637C15.3513 6.99477 15.2474 8.05037 14.85 9.00969C14.4527 9.969 13.7797 10.7889 12.9164 11.3658C12.053 11.9427 11.038 12.2506 9.99964 12.2506C8.60771 12.2491 7.27322 11.6955 6.28898 10.7113C5.30473 9.72702 4.75113 8.39253 4.74964 7.0006Z"
                                fill="white" />
                        </svg>
                        <a data-bs-toggle="modal" href="#exampleModalToggle" role="button">Login/Register</a>
                    </div>
                    <div class="cart">
                        <a class="nav-cart-trigger">
                            <i class="icon-ShoppingCart"></i>
                            <span class="shopping-cart-items-count">1</span>
                        </a>
                        <!--car-box-->
                        <div class="minicar-overlay"></div>
                        <div class="nav-shop-cart ">
                            <div class="minicar-header">
                                <span class="title">Shopping Cart</span>
                                <span class="minicart-close"></span>
                            </div>
                            <div class="widget_shopping_cart_content">
                                <div class="minicar-body">
                                    <div class="time">
                                        <img src="{{ asset('zunzo/images/retinal/fire.png') }}" alt="">
                                        <p>Your cart will expire in <span id="timer-sell-out">04:48</span> minutes!
                                            Please checkout now
                                            before your items sell
                                            out!</p>
                                    </div>
                                    <div class="tf-progessbar ">
                                        <div class="tf-notice">Buy <span>$70.00</span> more to get
                                            <span>Freeship</span>
                                        </div>
                                        <div class="tf-progressbar-content"><span class="tf-amount"></span></div>
                                    </div>
                                    <ul class="cart_list">
                                        <li class="mini_cart_item">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{ asset('zunzo/images/product/pd1.jpg') }}" alt="image">
                                                </a>
                                            </div>
                                            <div class="title">
                                                <a href="#"> Suede leggings</a>
                                                <span class="size">XL/Blue</span>
                                            </div>
                                            <div class="wrap-remove">
                                                <a href="#">Remove</a>
                                                <span class="quantity">1 × $60.00 </span>
                                            </div>
                                        </li>
                                        <li class="mini_cart_item">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{ asset('zunzo/images/product/pd4.jpg') }}" alt="image">
                                                </a>
                                            </div>
                                            <div class="title">
                                                <a href="#"> Contrasting sheepskin...</a>
                                                <span class="size">XL/Blue</span>
                                            </div>
                                            <div class="wrap-remove">
                                                <a href="#">Remove</a>
                                                <span class="quantity">1 × $60.00 </span>
                                            </div>
                                        </li>
                                        <li class="mini_cart_item">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{ asset('zunzo/images/product/pd2.jpg') }}" alt="image">
                                                </a>
                                            </div>
                                            <div class="title">
                                                <a href="#"> Biker-style leggings </a>
                                                <span class="size">XL/Blue</span>
                                            </div>
                                            <div class="wrap-remove">
                                                <a href="#">Remove</a>
                                                <span class="quantity">1 × $60.00 </span>
                                            </div>
                                        </li>
                                        <li class="mini_cart_item">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{ asset('zunzo/images/product/pd3.jpg') }}" alt="image">
                                                </a>
                                            </div>
                                            <div class="title">
                                                <a href="#">Contrasting sheepskin sweatshirt</a>
                                                <span class="size">XL/Blue</span>
                                            </div>
                                            <div class="wrap-remove">
                                                <a href="#">Remove</a>
                                                <span class="quantity">1 × $60.00 </span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="minicar-footer">
                                    <ul class="tab-menu">
                                        <li>
                                            <a href="">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.5 3.3335H3.66667C3.22464 3.3335 2.80072 3.50909 2.48816 3.82165C2.17559 4.13421 2 4.55814 2 5.00016V16.6668C2 17.1089 2.17559 17.5328 2.48816 17.8453C2.80072 18.1579 3.22464 18.3335 3.66667 18.3335H15.3333C15.7754 18.3335 16.1993 18.1579 16.5118 17.8453C16.8244 17.5328 17 17.1089 17 16.6668V10.8335"
                                                        stroke="#121212" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M15.75 2.0832C16.0815 1.75168 16.5312 1.56543 17 1.56543C17.4688 1.56543 17.9185 1.75168 18.25 2.0832C18.5815 2.41472 18.7678 2.86436 18.7678 3.3332C18.7678 3.80204 18.5815 4.25168 18.25 4.5832L10.3333 12.4999L7 13.3332L7.83333 9.99986L15.75 2.0832Z"
                                                        stroke="#121212" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                Note
                                            </a>
                                            <a href="">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.3333 2.5H0.833252V13.3333H13.3333V2.5Z"
                                                        stroke="#121212" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M13.3333 6.6665H16.6666L19.1666 9.1665V13.3332H13.3333V6.6665Z"
                                                        stroke="#121212" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M4.58333 17.5002C5.73393 17.5002 6.66667 16.5674 6.66667 15.4168C6.66667 14.2662 5.73393 13.3335 4.58333 13.3335C3.43274 13.3335 2.5 14.2662 2.5 15.4168C2.5 16.5674 3.43274 17.5002 4.58333 17.5002Z"
                                                        stroke="#121212" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M15.4166 17.5002C16.5672 17.5002 17.4999 16.5674 17.4999 15.4168C17.4999 14.2662 16.5672 13.3335 15.4166 13.3335C14.266 13.3335 13.3333 14.2662 13.3333 15.4168C13.3333 16.5674 14.266 17.5002 15.4166 17.5002Z"
                                                        stroke="#121212" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                Shipping
                                            </a>
                                            <a href="">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.8252 11.1748L11.8502 17.1498C11.6954 17.3048 11.5116 17.4277 11.3092 17.5116C11.1069 17.5955 10.89 17.6386 10.671 17.6386C10.452 17.6386 10.2351 17.5955 10.0328 17.5116C9.83043 17.4277 9.64662 17.3048 9.49183 17.1498L2.3335 9.99984V1.6665H10.6668L17.8252 8.82484C18.1356 9.13711 18.3098 9.55953 18.3098 9.99984C18.3098 10.4401 18.1356 10.8626 17.8252 11.1748V11.1748Z"
                                                        stroke="#121212" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6.50049 5.8335H6.51049" stroke="#121212"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                Coupon
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="view-cart">
                                        <p class="total">
                                            <strong>Subtotal</strong> <span class="currency-symbol">$186,99</span>
                                        </p>
                                        <p class="buttons">
                                            <a href="#" class="button"> Checkout</a>
                                            <a href="#" class="button checkout">View cart</a>
                                        </p>
                                        <a href="#" class="shopping">Or continue shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--car-box-->
                    </div>
                    <button class="btn-contact">Contact Us</button>
                    <!-- /.login/register -->
                </div><!-- /.login-wrap -->
            </div><!-- /.header-inner -->
        </div>
    </header><!-- /.header -->

    <div class="overlay-menu-mobie">
        <div class="close-btn">
            <span class="close-menus"></span>
        </div>
    </div>

    <!-- Widget-slide -->
    <div class="tf-slider-widget swiper mySwiper">
        <div class="tf-slider swiper-wrapper">
            <div class="tf-banner swiper-slide">
                <div class="image-slider">
                    <img src="{{ asset('zunzo/images/slides/slide5.jpg') }}" alt="image" />
                    <div class="overlay"></div>
                </div>
                <div class="themeflat-container">
                    <div class="slide-item">
                        <div class="silde-content">
                            <span class="flat-sub-slider">SALE UP TO 50% OFF!</span>
                            <h1 class="flat-title-slider">Empowering Your Fitness Journey
                            </h1>
                            <p class="flat-description-slider">The platform that turns aspirations into
                                accomplishments. Join now and unleash your potential in the world of fitness and
                                wellness.
                            </p>
                            <div class="button">
                                <a href="contact.html" class="flat-button">Join our club</a>
                            </div>
                        </div>
                        <div class="box-events-slide">
                            <span class="new-event">new Event </span>
                            <img src="{{ asset('zunzo/images/evtent/new-event.jpg') }}" alt="image event" class="new-event">
                            <div class="content-event">
                                <h2 class="title-event"><a href="event-details.html" class="">marathon event 2023</a>
                                </h2>
                                <ul>
                                    <li>
                                        <span class="icon-new">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8333 1.07692H11.0833V0.538462C11.0833 0.395653 11.0219 0.258693 10.9125 0.157712C10.8031 0.0567306 10.6547 0 10.5 0C10.3453 0 10.1969 0.0567306 10.0875 0.157712C9.97812 0.258693 9.91667 0.395653 9.91667 0.538462V1.07692H4.08333V0.538462C4.08333 0.395653 4.02187 0.258693 3.91248 0.157712C3.80308 0.0567306 3.65471 0 3.5 0C3.34529 0 3.19692 0.0567306 3.08752 0.157712C2.97812 0.258693 2.91667 0.395653 2.91667 0.538462V1.07692H1.16667C0.857247 1.07692 0.560501 1.19038 0.341709 1.39235C0.122916 1.59431 0 1.86823 0 2.15385V12.9231C0 13.2087 0.122916 13.4826 0.341709 13.6846C0.560501 13.8865 0.857247 14 1.16667 14H12.8333C13.1428 14 13.4395 13.8865 13.6583 13.6846C13.8771 13.4826 14 13.2087 14 12.9231V2.15385C14 1.86823 13.8771 1.59431 13.6583 1.39235C13.4395 1.19038 13.1428 1.07692 12.8333 1.07692ZM12.8333 4.30769H1.16667V2.15385H2.91667V2.69231C2.91667 2.83512 2.97812 2.97208 3.08752 3.07306C3.19692 3.17404 3.34529 3.23077 3.5 3.23077C3.65471 3.23077 3.80308 3.17404 3.91248 3.07306C4.02187 2.97208 4.08333 2.83512 4.08333 2.69231V2.15385H9.91667V2.69231C9.91667 2.83512 9.97812 2.97208 10.0875 3.07306C10.1969 3.17404 10.3453 3.23077 10.5 3.23077C10.6547 3.23077 10.8031 3.17404 10.9125 3.07306C11.0219 2.97208 11.0833 2.83512 11.0833 2.69231V2.15385H12.8333V4.30769Z"
                                                    fill="#C3E92D" />
                                            </svg>
                                        </span>
                                        <a href="event-details.html">oct 20, 2023</a>
                                    </li>
                                    <li>
                                        <span class="icon-new">
                                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.85714 2.28571C5.50093 2.28571 4.17517 2.68788 3.04752 3.44135C1.91987 4.19482 1.04097 5.26576 0.521972 6.51874C0.0029711 7.77172 -0.132823 9.15046 0.131761 10.4806C0.396345 11.8108 1.04942 13.0326 2.00841 13.9916C2.9674 14.9506 4.18923 15.6037 5.51938 15.8682C6.84954 16.1328 8.22828 15.997 9.48126 15.478C10.7342 14.959 11.8052 14.0801 12.5586 12.9525C13.3121 11.8248 13.7143 10.4991 13.7143 9.14286C13.7122 7.32487 12.9891 5.58193 11.7036 4.29642C10.4181 3.01091 8.67513 2.28779 6.85714 2.28571ZM10.1186 6.69L7.26143 9.54714C7.20834 9.60023 7.14531 9.64235 7.07594 9.67108C7.00657 9.69981 6.93223 9.7146 6.85714 9.7146C6.78206 9.7146 6.70771 9.69981 6.63835 9.67108C6.56898 9.64235 6.50595 9.60023 6.45286 9.54714C6.39977 9.49405 6.35765 9.43102 6.32892 9.36165C6.30019 9.29229 6.2854 9.21794 6.2854 9.14286C6.2854 9.06777 6.30019 8.99343 6.32892 8.92406C6.35765 8.85469 6.39977 8.79166 6.45286 8.73857L9.31 5.88143C9.36309 5.82834 9.42612 5.78622 9.49549 5.75749C9.56486 5.72876 9.6392 5.71397 9.71429 5.71397C9.78937 5.71397 9.86372 5.72876 9.93308 5.75749C10.0025 5.78622 10.0655 5.82834 10.1186 5.88143C10.1717 5.93452 10.2138 5.99755 10.2425 6.06692C10.2712 6.13628 10.286 6.21063 10.286 6.28571C10.286 6.3608 10.2712 6.43514 10.2425 6.50451C10.2138 6.57388 10.1717 6.63691 10.1186 6.69ZM4.57143 0.571428C4.57143 0.419876 4.63163 0.274531 4.7388 0.167368C4.84596 0.0602039 4.99131 0 5.14286 0H8.57143C8.72298 0 8.86833 0.0602039 8.97549 0.167368C9.08265 0.274531 9.14286 0.419876 9.14286 0.571428C9.14286 0.722981 9.08265 0.868326 8.97549 0.975489C8.86833 1.08265 8.72298 1.14286 8.57143 1.14286H5.14286C4.99131 1.14286 4.84596 1.08265 4.7388 0.975489C4.63163 0.868326 4.57143 0.722981 4.57143 0.571428Z"
                                                    fill="#C3E92D" />
                                            </svg>
                                        </span>
                                        <a href="event-details.html">Start 06:00 AM - Until Finish</a>
                                    </li>
                                    <li>
                                        <span class="icon-new">
                                            <svg width="13" height="16" viewBox="0 0 13 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.28578 0C4.61927 0.00189054 3.02155 0.664747 1.84315 1.84315C0.664747 3.02155 0.00189054 4.61927 0 6.28578C0 11.6644 5.71434 15.7266 5.95792 15.8966C6.054 15.9639 6.16847 16 6.28578 16C6.40309 16 6.51756 15.9639 6.61364 15.8966C6.85721 15.7266 12.5716 11.6644 12.5716 6.28578C12.5697 4.61927 11.9068 3.02155 10.7284 1.84315C9.55 0.664747 7.95229 0.00189054 6.28578 0ZM6.28578 4.00004C6.73785 4.00004 7.17978 4.1341 7.55567 4.38526C7.93155 4.63642 8.22452 4.9934 8.39752 5.41106C8.57053 5.82873 8.61579 6.28831 8.5276 6.7317C8.4394 7.17509 8.2217 7.58237 7.90204 7.90204C7.58237 8.2217 7.17509 8.4394 6.7317 8.5276C6.28831 8.61579 5.82873 8.57053 5.41106 8.39752C4.9934 8.22452 4.63642 7.93155 4.38526 7.55567C4.1341 7.17978 4.00004 6.73785 4.00004 6.28578C4.00004 5.67956 4.24086 5.09818 4.66952 4.66952C5.09818 4.24086 5.67956 4.00004 6.28578 4.00004Z"
                                                    fill="#C3E92D" />
                                            </svg>
                                        </span>
                                        <a href="event-details.html">710 1st St. Easton, PA 18042 | Chester County</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tf-banner swiper-slide">
                <div class="image-slider">
                    <img src="{{ asset('zunzo/images/slides/slide2.jpg') }}" alt="image" />
                    <div class="overlay"></div>
                </div>
                <div class="themeflat-container">
                    <div class="slide-item">
                        <div class="silde-content">
                            <span class="flat-sub-slider">SALE UP TO 50% OFF!</span>
                            <h1 class="flat-title-slider">Run with Passion and Purpose
                            </h1>
                            <p class="flat-description-slider">The platform that turns aspirations
                                into
                                accomplishments. Join now and unleash your potential in the world of fitness and
                                wellness.
                            </p>
                            <div class="button">
                                <a href="contact.html" class="flat-button">Join our club</a>
                            </div>
                        </div>
                        <div class="box-events-slide">
                            <span class="new-event">new Event </span>
                            <img src="{{ asset('zunzo/images/evtent/new-event.jpg') }}" alt="" class="new-event">
                            <div class="content-event">
                                <h2 class="title-event"><a href="event-details.html" class="">marathon event 2023</a>
                                </h2>
                                <ul>
                                    <li>
                                        <span class="icon-new">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8333 1.07692H11.0833V0.538462C11.0833 0.395653 11.0219 0.258693 10.9125 0.157712C10.8031 0.0567306 10.6547 0 10.5 0C10.3453 0 10.1969 0.0567306 10.0875 0.157712C9.97812 0.258693 9.91667 0.395653 9.91667 0.538462V1.07692H4.08333V0.538462C4.08333 0.395653 4.02187 0.258693 3.91248 0.157712C3.80308 0.0567306 3.65471 0 3.5 0C3.34529 0 3.19692 0.0567306 3.08752 0.157712C2.97812 0.258693 2.91667 0.395653 2.91667 0.538462V1.07692H1.16667C0.857247 1.07692 0.560501 1.19038 0.341709 1.39235C0.122916 1.59431 0 1.86823 0 2.15385V12.9231C0 13.2087 0.122916 13.4826 0.341709 13.6846C0.560501 13.8865 0.857247 14 1.16667 14H12.8333C13.1428 14 13.4395 13.8865 13.6583 13.6846C13.8771 13.4826 14 13.2087 14 12.9231V2.15385C14 1.86823 13.8771 1.59431 13.6583 1.39235C13.4395 1.19038 13.1428 1.07692 12.8333 1.07692ZM12.8333 4.30769H1.16667V2.15385H2.91667V2.69231C2.91667 2.83512 2.97812 2.97208 3.08752 3.07306C3.19692 3.17404 3.34529 3.23077 3.5 3.23077C3.65471 3.23077 3.80308 3.17404 3.91248 3.07306C4.02187 2.97208 4.08333 2.83512 4.08333 2.69231V2.15385H9.91667V2.69231C9.91667 2.83512 9.97812 2.97208 10.0875 3.07306C10.1969 3.17404 10.3453 3.23077 10.5 3.23077C10.6547 3.23077 10.8031 3.17404 10.9125 3.07306C11.0219 2.97208 11.0833 2.83512 11.0833 2.69231V2.15385H12.8333V4.30769Z"
                                                    fill="#C3E92D" />
                                            </svg>
                                        </span>
                                        <a href="event-details.html">oct 20, 2023</a>
                                    </li>
                                    <li>
                                        <span class="icon-new">
                                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.85714 2.28571C5.50093 2.28571 4.17517 2.68788 3.04752 3.44135C1.91987 4.19482 1.04097 5.26576 0.521972 6.51874C0.0029711 7.77172 -0.132823 9.15046 0.131761 10.4806C0.396345 11.8108 1.04942 13.0326 2.00841 13.9916C2.9674 14.9506 4.18923 15.6037 5.51938 15.8682C6.84954 16.1328 8.22828 15.997 9.48126 15.478C10.7342 14.959 11.8052 14.0801 12.5586 12.9525C13.3121 11.8248 13.7143 10.4991 13.7143 9.14286C13.7122 7.32487 12.9891 5.58193 11.7036 4.29642C10.4181 3.01091 8.67513 2.28779 6.85714 2.28571ZM10.1186 6.69L7.26143 9.54714C7.20834 9.60023 7.14531 9.64235 7.07594 9.67108C7.00657 9.69981 6.93223 9.7146 6.85714 9.7146C6.78206 9.7146 6.70771 9.69981 6.63835 9.67108C6.56898 9.64235 6.50595 9.60023 6.45286 9.54714C6.39977 9.49405 6.35765 9.43102 6.32892 9.36165C6.30019 9.29229 6.2854 9.21794 6.2854 9.14286C6.2854 9.06777 6.30019 8.99343 6.32892 8.92406C6.35765 8.85469 6.39977 8.79166 6.45286 8.73857L9.31 5.88143C9.36309 5.82834 9.42612 5.78622 9.49549 5.75749C9.56486 5.72876 9.6392 5.71397 9.71429 5.71397C9.78937 5.71397 9.86372 5.72876 9.93308 5.75749C10.0025 5.78622 10.0655 5.82834 10.1186 5.88143C10.1717 5.93452 10.2138 5.99755 10.2425 6.06692C10.2712 6.13628 10.286 6.21063 10.286 6.28571C10.286 6.3608 10.2712 6.43514 10.2425 6.50451C10.2138 6.57388 10.1717 6.63691 10.1186 6.69ZM4.57143 0.571428C4.57143 0.419876 4.63163 0.274531 4.7388 0.167368C4.84596 0.0602039 4.99131 0 5.14286 0H8.57143C8.72298 0 8.86833 0.0602039 8.97549 0.167368C9.08265 0.274531 9.14286 0.419876 9.14286 0.571428C9.14286 0.722981 9.08265 0.868326 8.97549 0.975489C8.86833 1.08265 8.72298 1.14286 8.57143 1.14286H5.14286C4.99131 1.14286 4.84596 1.08265 4.7388 0.975489C4.63163 0.868326 4.57143 0.722981 4.57143 0.571428Z"
                                                    fill="#C3E92D" />
                                            </svg>
                                        </span>
                                        <a href="event-details.html">Start 06:00 AM - Until Finish</a>
                                    </li>
                                    <li>
                                        <span class="icon-new">
                                            <svg width="13" height="16" viewBox="0 0 13 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.28578 0C4.61927 0.00189054 3.02155 0.664747 1.84315 1.84315C0.664747 3.02155 0.00189054 4.61927 0 6.28578C0 11.6644 5.71434 15.7266 5.95792 15.8966C6.054 15.9639 6.16847 16 6.28578 16C6.40309 16 6.51756 15.9639 6.61364 15.8966C6.85721 15.7266 12.5716 11.6644 12.5716 6.28578C12.5697 4.61927 11.9068 3.02155 10.7284 1.84315C9.55 0.664747 7.95229 0.00189054 6.28578 0ZM6.28578 4.00004C6.73785 4.00004 7.17978 4.1341 7.55567 4.38526C7.93155 4.63642 8.22452 4.9934 8.39752 5.41106C8.57053 5.82873 8.61579 6.28831 8.5276 6.7317C8.4394 7.17509 8.2217 7.58237 7.90204 7.90204C7.58237 8.2217 7.17509 8.4394 6.7317 8.5276C6.28831 8.61579 5.82873 8.57053 5.41106 8.39752C4.9934 8.22452 4.63642 7.93155 4.38526 7.55567C4.1341 7.17978 4.00004 6.73785 4.00004 6.28578C4.00004 5.67956 4.24086 5.09818 4.66952 4.66952C5.09818 4.24086 5.67956 4.00004 6.28578 4.00004Z"
                                                    fill="#C3E92D" />
                                            </svg>
                                        </span>
                                        <a href="event-details.html">710 1st St. Easton, PA 18042 | Chester County</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tf-banner swiper-slide">
                <div class="image-slider">
                    <img src="{{ asset('zunzo/images/slides/slide6.jpg') }}" alt="image" />
                    <div class="overlay"></div>
                </div>
                <div class="themeflat-container">
                    <div class="slide-item">
                        <div class="silde-content">
                            <span class="flat-sub-slider">SALE UP TO 50% OFF!</span>
                            <h1 class="flat-title-slider">Find Your Pace, Find Your Tribe
                            </h1>
                            <p class="flat-description-slider">The platform that turns aspirations
                                into
                                accomplishments. Join now and unleash your potential in the world of fitness and
                                wellness.
                            </p>
                            <div class="button">
                                <a href="contact.html" class="flat-button">Join our club</a>
                            </div>
                        </div>
                        <div class="box-events-slide">
                            <span class="new-event">new Event </span>
                            <img src="{{ asset('zunzo/images/evtent/new-event.jpg') }}" alt="" class="new-event">
                            <div class="content-event">
                                <h2 class="title-event"><a href="event-details.html" class="">marathon event 2023</a>
                                </h2>
                                <ul>
                                    <li>
                                        <span class="icon-new">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8333 1.07692H11.0833V0.538462C11.0833 0.395653 11.0219 0.258693 10.9125 0.157712C10.8031 0.0567306 10.6547 0 10.5 0C10.3453 0 10.1969 0.0567306 10.0875 0.157712C9.97812 0.258693 9.91667 0.395653 9.91667 0.538462V1.07692H4.08333V0.538462C4.08333 0.395653 4.02187 0.258693 3.91248 0.157712C3.80308 0.0567306 3.65471 0 3.5 0C3.34529 0 3.19692 0.0567306 3.08752 0.157712C2.97812 0.258693 2.91667 0.395653 2.91667 0.538462V1.07692H1.16667C0.857247 1.07692 0.560501 1.19038 0.341709 1.39235C0.122916 1.59431 0 1.86823 0 2.15385V12.9231C0 13.2087 0.122916 13.4826 0.341709 13.6846C0.560501 13.8865 0.857247 14 1.16667 14H12.8333C13.1428 14 13.4395 13.8865 13.6583 13.6846C13.8771 13.4826 14 13.2087 14 12.9231V2.15385C14 1.86823 13.8771 1.59431 13.6583 1.39235C13.4395 1.19038 13.1428 1.07692 12.8333 1.07692ZM12.8333 4.30769H1.16667V2.15385H2.91667V2.69231C2.91667 2.83512 2.97812 2.97208 3.08752 3.07306C3.19692 3.17404 3.34529 3.23077 3.5 3.23077C3.65471 3.23077 3.80308 3.17404 3.91248 3.07306C4.02187 2.97208 4.08333 2.83512 4.08333 2.69231V2.15385H9.91667V2.69231C9.91667 2.83512 9.97812 2.97208 10.0875 3.07306C10.1969 3.17404 10.3453 3.23077 10.5 3.23077C10.6547 3.23077 10.8031 3.17404 10.9125 3.07306C11.0219 2.97208 11.0833 2.83512 11.0833 2.69231V2.15385H12.8333V4.30769Z"
                                                    fill="#C3E92D" />
                                            </svg>
                                        </span>
                                        <a href="event-details.html">oct 20, 2023</a>
                                    </li>
                                    <li>
                                        <span class="icon-new">
                                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.85714 2.28571C5.50093 2.28571 4.17517 2.68788 3.04752 3.44135C1.91987 4.19482 1.04097 5.26576 0.521972 6.51874C0.0029711 7.77172 -0.132823 9.15046 0.131761 10.4806C0.396345 11.8108 1.04942 13.0326 2.00841 13.9916C2.9674 14.9506 4.18923 15.6037 5.51938 15.8682C6.84954 16.1328 8.22828 15.997 9.48126 15.478C10.7342 14.959 11.8052 14.0801 12.5586 12.9525C13.3121 11.8248 13.7143 10.4991 13.7143 9.14286C13.7122 7.32487 12.9891 5.58193 11.7036 4.29642C10.4181 3.01091 8.67513 2.28779 6.85714 2.28571ZM10.1186 6.69L7.26143 9.54714C7.20834 9.60023 7.14531 9.64235 7.07594 9.67108C7.00657 9.69981 6.93223 9.7146 6.85714 9.7146C6.78206 9.7146 6.70771 9.69981 6.63835 9.67108C6.56898 9.64235 6.50595 9.60023 6.45286 9.54714C6.39977 9.49405 6.35765 9.43102 6.32892 9.36165C6.30019 9.29229 6.2854 9.21794 6.2854 9.14286C6.2854 9.06777 6.30019 8.99343 6.32892 8.92406C6.35765 8.85469 6.39977 8.79166 6.45286 8.73857L9.31 5.88143C9.36309 5.82834 9.42612 5.78622 9.49549 5.75749C9.56486 5.72876 9.6392 5.71397 9.71429 5.71397C9.78937 5.71397 9.86372 5.72876 9.93308 5.75749C10.0025 5.78622 10.0655 5.82834 10.1186 5.88143C10.1717 5.93452 10.2138 5.99755 10.2425 6.06692C10.2712 6.13628 10.286 6.21063 10.286 6.28571C10.286 6.3608 10.2712 6.43514 10.2425 6.50451C10.2138 6.57388 10.1717 6.63691 10.1186 6.69ZM4.57143 0.571428C4.57143 0.419876 4.63163 0.274531 4.7388 0.167368C4.84596 0.0602039 4.99131 0 5.14286 0H8.57143C8.72298 0 8.86833 0.0602039 8.97549 0.167368C9.08265 0.274531 9.14286 0.419876 9.14286 0.571428C9.14286 0.722981 9.08265 0.868326 8.97549 0.975489C8.86833 1.08265 8.72298 1.14286 8.57143 1.14286H5.14286C4.99131 1.14286 4.84596 1.08265 4.7388 0.975489C4.63163 0.868326 4.57143 0.722981 4.57143 0.571428Z"
                                                    fill="#C3E92D" />
                                            </svg>
                                        </span>
                                        <a href="event-details.html">Start 06:00 AM - Until Finish</a>
                                    </li>
                                    <li>
                                        <span class="icon-new">
                                            <svg width="13" height="16" viewBox="0 0 13 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.28578 0C4.61927 0.00189054 3.02155 0.664747 1.84315 1.84315C0.664747 3.02155 0.00189054 4.61927 0 6.28578C0 11.6644 5.71434 15.7266 5.95792 15.8966C6.054 15.9639 6.16847 16 6.28578 16C6.40309 16 6.51756 15.9639 6.61364 15.8966C6.85721 15.7266 12.5716 11.6644 12.5716 6.28578C12.5697 4.61927 11.9068 3.02155 10.7284 1.84315C9.55 0.664747 7.95229 0.00189054 6.28578 0ZM6.28578 4.00004C6.73785 4.00004 7.17978 4.1341 7.55567 4.38526C7.93155 4.63642 8.22452 4.9934 8.39752 5.41106C8.57053 5.82873 8.61579 6.28831 8.5276 6.7317C8.4394 7.17509 8.2217 7.58237 7.90204 7.90204C7.58237 8.2217 7.17509 8.4394 6.7317 8.5276C6.28831 8.61579 5.82873 8.57053 5.41106 8.39752C4.9934 8.22452 4.63642 7.93155 4.38526 7.55567C4.1341 7.17978 4.00004 6.73785 4.00004 6.28578C4.00004 5.67956 4.24086 5.09818 4.66952 4.66952C5.09818 4.24086 5.67956 4.00004 6.28578 4.00004Z"
                                                    fill="#C3E92D" />
                                            </svg>
                                        </span>
                                        <a href="event-details.html">710 1st St. Easton, PA 18042 | Chester County</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div><!-- Widget-slide -->

     <!-- Logo partner -->
     <div class="tf-widget-partner background-black">
        <div class="themeflat-container">
            <div class="tf-partner">
                <div class="sologan-logo">
                    <a href="#">
                        <img class="image-logo" src="{{ asset('zunzo/images/retinal/5.png') }}" alt="image logo">
                    </a>
                    <a href="#">
                        <img class="image-logo" src="{{ asset('zunzo/images/retinal/2.png') }}" alt="image logo">
                    </a>
                    <a href="#">
                        <img class="image-logo" src="{{ asset('zunzo/images/retinal/3.png') }}" alt="image logo">
                    </a>
                    <a href="#">
                        <img class="image-logo" src="{{ asset('zunzo/images/retinal/4.png') }}" alt="image logo">
                    </a>
                    <a href="#">
                        <img class="image-logo" src="{{ asset('zunzo/images/retinal/6.png') }}" alt="image logo">
                    </a>
                    <a href="#">
                        <img class="image-logo" src="{{ asset('zunzo/images/retinal/1.png') }}" alt="image logo">
                    </a>
                    <a href="#">
                        <img class="image-logo" src="{{ asset('zunzo/images/retinal/5.png') }}" alt="image logo">
                    </a>
                    <a href="#">
                        <img class="image-logo" src="{{ asset('zunzo/images/retinal/2.png') }}" alt="image logo">
                    </a>
                    <a href="#">
                        <img class="image-logo" src="{{ asset('zunzo/images/retinal/3.png') }}" alt="image logo">
                    </a>
                    <a href="#">
                        <img class="image-logo" src="{{ asset('zunzo/images/retinal/4.png') }}" alt="image logo">
                    </a>
                    <a href="#">
                        <img class="image-logo" src="{{ asset('zunzo/images/retinal/6.png') }}" alt="image logo">
                    </a>
                    <a href="#">
                        <img class="image-logo" src="{{ asset('zunzo/images/retinal/1.png') }}" alt="image logo">
                    </a>
                </div>
            </div>
        </div>
    </div><!-- Logo partner -->


    <!-- Widget-about -->
    <div class="tf-widget-about-us main-content">
        <div class="themeflat-container">
            <div class="tf-about-us">
                <div class="row">
                    <div class="col-md-6 image-wraper">
                        <div class="media">
                            <div class="media-v1 wow fadeInLeft animated">
                                <img class="mask-media" src="{{ asset('zunzo/images/about/mask1.png') }}" alt="image">
                                <img class="shape-media" src="{{ asset('zunzo/images/about/graphic.png') }}" alt="image">
                            </div>
                            <img src="{{ asset('zunzo/images/about/mask2.png') }}" alt="image" class="image-gr wow fadeInRight animated">
                            <img src="{{ asset('zunzo/images/about/Intersect.png') }}" alt="image" class="intersect-img">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-box">
                            <img src="{{ asset('zunzo/images/about/graphic-box.png') }}" alt="image shape">
                            <!-- header style v1 -->
                            <div class="title-box title-small-v2">
                                <span class="sub-title wow fadeInUp animated">Welcome to runclub!</span>
                                <h2 class="title-section wow fadeInUp animated">Zunzo - Your Ultimate Running Community
                                </h2>
                            </div><!-- header style v1 -->
                            <p class="post wow fadeInUp animated">
                                Welcome to our vibrant running community, where we organize exciting running events,
                                provide helpful running tutorials, and keep you informed with the latest running news.
                            </p>
                            <div class="line"></div>
                            <div class="about-button-group">
                                <button class="flat-button wow fadeInUp animated">Find out more</button>
                                <div class="infor-about">
                                    <img src="{{ asset('zunzo/images/about/info.png') }}" alt="">
                                    <div class="info">
                                        <div class="name wow fadeInUp animated">Chris pad</div>
                                        <div class="job wow fadeInUp animated">Co - Founder Zunzo</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Widget-about  -->

    <!-- Widget event -->
    <div class="tf-widget-event main-content-medium">
        <div class="themeflat-container">
            <div class="tf-title-wrap title-medium">
                <div class="title-box-v2">
                    <span class="sub-title wow fadeInUp animated">running events</span>
                    <h2 class="title-section wow fadeInUp animated">Running Events Coming Up include</h2>
                </div>
                <a href="event-details.html" class="view-more text-white wow fadeInUp animated">View all
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_6559_2625)">
                            <path d="M5.25 4.5L12.75 12L5.25 19.5" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.75 4.5L20.25 12L12.75 19.5" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_6559_2625">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="widget-event event-white-wiget">
                <div class="item wow fadeInUp animated">
                    <div class="event-infomation">
                        <div class="info">
                            <h4><a href="event-details.html">denpasar marathon event 2023</a></h4>
                            <p>
                                <span>
                                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 0.5C6.81273 0.502481 4.71575 1.37247 3.16911 2.91911C1.62247 4.46575 0.752481 6.56273 0.75 8.75C0.75 15.8094 8.25 21.1409 8.56969 21.3641C8.69579 21.4524 8.84603 21.4998 9 21.4998C9.15397 21.4998 9.30421 21.4524 9.43031 21.3641C9.75 21.1409 17.25 15.8094 17.25 8.75C17.2475 6.56273 16.3775 4.46575 14.8309 2.91911C13.2843 1.37247 11.1873 0.502481 9 0.5ZM9 5.75C9.59334 5.75 10.1734 5.92595 10.6667 6.25559C11.1601 6.58524 11.5446 7.05377 11.7716 7.60195C11.9987 8.15013 12.0581 8.75333 11.9424 9.33527C11.8266 9.91721 11.5409 10.4518 11.1213 10.8713C10.7018 11.2909 10.1672 11.5766 9.58527 11.6924C9.00333 11.8081 8.40013 11.7487 7.85195 11.5216C7.30377 11.2946 6.83524 10.9101 6.50559 10.4167C6.17595 9.92336 6 9.34334 6 8.75C6 7.95435 6.31607 7.19129 6.87868 6.62868C7.44129 6.06607 8.20435 5.75 9 5.75Z"
                                            fill="#C3E92D" />
                                    </svg>
                                </span>
                                710 1st St. Easton, PA 18042 | Chester County
                            </p>
                            <p>
                                <span>
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5 2H14.25V1.25C14.25 1.05109 14.171 0.860322 14.0303 0.71967C13.8897 0.579018 13.6989 0.5 13.5 0.5C13.3011 0.5 13.1103 0.579018 12.9697 0.71967C12.829 0.860322 12.75 1.05109 12.75 1.25V2H5.25V1.25C5.25 1.05109 5.17098 0.860322 5.03033 0.71967C4.88968 0.579018 4.69891 0.5 4.5 0.5C4.30109 0.5 4.11032 0.579018 3.96967 0.71967C3.82902 0.860322 3.75 1.05109 3.75 1.25V2H1.5C1.10218 2 0.720644 2.15804 0.43934 2.43934C0.158035 2.72064 0 3.10218 0 3.5V18.5C0 18.8978 0.158035 19.2794 0.43934 19.5607C0.720644 19.842 1.10218 20 1.5 20H16.5C16.8978 20 17.2794 19.842 17.5607 19.5607C17.842 19.2794 18 18.8978 18 18.5V3.5C18 3.10218 17.842 2.72064 17.5607 2.43934C17.2794 2.15804 16.8978 2 16.5 2ZM16.5 6.5H1.5V3.5H3.75V4.25C3.75 4.44891 3.82902 4.63968 3.96967 4.78033C4.11032 4.92098 4.30109 5 4.5 5C4.69891 5 4.88968 4.92098 5.03033 4.78033C5.17098 4.63968 5.25 4.44891 5.25 4.25V3.5H12.75V4.25C12.75 4.44891 12.829 4.63968 12.9697 4.78033C13.1103 4.92098 13.3011 5 13.5 5C13.6989 5 13.8897 4.92098 14.0303 4.78033C14.171 4.63968 14.25 4.44891 14.25 4.25V3.5H16.5V6.5Z"
                                            fill="#C3E92D" />
                                    </svg>
                                </span>
                                oct 20, 2023
                            </p>
                            <p>
                                <span>
                                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 3.75C7.21997 3.75 5.47991 4.27784 3.99987 5.26677C2.51983 6.25571 1.36628 7.66131 0.685088 9.30585C0.00389957 10.9504 -0.17433 12.76 0.172937 14.5058C0.520204 16.2516 1.37737 17.8553 2.63604 19.114C3.89472 20.3726 5.49836 21.2298 7.24419 21.5771C8.99002 21.9243 10.7996 21.7461 12.4442 21.0649C14.0887 20.3837 15.4943 19.2302 16.4832 17.7501C17.4722 16.2701 18 14.53 18 12.75C17.9973 10.3639 17.0482 8.07629 15.361 6.38905C13.6737 4.70182 11.3861 3.75273 9 3.75ZM13.2806 9.53063L9.53063 13.2806C9.46095 13.3503 9.37822 13.4056 9.28718 13.4433C9.19613 13.481 9.09855 13.5004 9 13.5004C8.90146 13.5004 8.80388 13.481 8.71283 13.4433C8.62179 13.4056 8.53906 13.3503 8.46938 13.2806C8.3997 13.2109 8.34442 13.1282 8.30671 13.0372C8.269 12.9461 8.24959 12.8485 8.24959 12.75C8.24959 12.6515 8.269 12.5539 8.30671 12.4628C8.34442 12.3718 8.3997 12.2891 8.46938 12.2194L12.2194 8.46938C12.2891 8.39969 12.3718 8.34442 12.4628 8.30671C12.5539 8.26899 12.6515 8.24958 12.75 8.24958C12.8486 8.24958 12.9461 8.26899 13.0372 8.30671C13.1282 8.34442 13.2109 8.39969 13.2806 8.46938C13.3503 8.53906 13.4056 8.62178 13.4433 8.71283C13.481 8.80387 13.5004 8.90145 13.5004 9C13.5004 9.09855 13.481 9.19613 13.4433 9.28717C13.4056 9.37822 13.3503 9.46094 13.2806 9.53063ZM6 1.5C6 1.30109 6.07902 1.11032 6.21967 0.96967C6.36033 0.829018 6.55109 0.75 6.75 0.75H11.25C11.4489 0.75 11.6397 0.829018 11.7803 0.96967C11.921 1.11032 12 1.30109 12 1.5C12 1.69891 11.921 1.88968 11.7803 2.03033C11.6397 2.17098 11.4489 2.25 11.25 2.25H6.75C6.55109 2.25 6.36033 2.17098 6.21967 2.03033C6.07902 1.88968 6 1.69891 6 1.5Z"
                                            fill="#C3E92D" />
                                    </svg>
                                </span>
                                Start 06:00 AM - Until Finish
                            </p>
                        </div>
                        <img decoding="async" src="{{ asset('zunzo/images/evtent/event1.jpg') }}" alt="denpasar marathon event 2023">
                    </div>
                    <div class="tf-info-price">
                        <h4>Ticket</h4>
                        <p class="price"><span>$45</span>/ticket</p>
                        <a href="event-details.html" class="flat-button ">Learn more</a>
                        <div class="item-event-price-bg">
                        </div>
                    </div>
                    <div class="bg-item-event-2"></div>
                </div>
                <div class="item wow fadeInUp animated">
                    <div class="event-infomation">
                        <div class="info">
                            <h4><a href="event-details.html">women marathon event 2023</a></h4>
                            <p>
                                <span>
                                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 0.5C6.81273 0.502481 4.71575 1.37247 3.16911 2.91911C1.62247 4.46575 0.752481 6.56273 0.75 8.75C0.75 15.8094 8.25 21.1409 8.56969 21.3641C8.69579 21.4524 8.84603 21.4998 9 21.4998C9.15397 21.4998 9.30421 21.4524 9.43031 21.3641C9.75 21.1409 17.25 15.8094 17.25 8.75C17.2475 6.56273 16.3775 4.46575 14.8309 2.91911C13.2843 1.37247 11.1873 0.502481 9 0.5ZM9 5.75C9.59334 5.75 10.1734 5.92595 10.6667 6.25559C11.1601 6.58524 11.5446 7.05377 11.7716 7.60195C11.9987 8.15013 12.0581 8.75333 11.9424 9.33527C11.8266 9.91721 11.5409 10.4518 11.1213 10.8713C10.7018 11.2909 10.1672 11.5766 9.58527 11.6924C9.00333 11.8081 8.40013 11.7487 7.85195 11.5216C7.30377 11.2946 6.83524 10.9101 6.50559 10.4167C6.17595 9.92336 6 9.34334 6 8.75C6 7.95435 6.31607 7.19129 6.87868 6.62868C7.44129 6.06607 8.20435 5.75 9 5.75Z"
                                            fill="#C3E92D" />
                                    </svg>
                                </span>
                                710 1st St. Easton, PA 18042 | Chester County
                            </p>
                            <p>
                                <span>
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5 2H14.25V1.25C14.25 1.05109 14.171 0.860322 14.0303 0.71967C13.8897 0.579018 13.6989 0.5 13.5 0.5C13.3011 0.5 13.1103 0.579018 12.9697 0.71967C12.829 0.860322 12.75 1.05109 12.75 1.25V2H5.25V1.25C5.25 1.05109 5.17098 0.860322 5.03033 0.71967C4.88968 0.579018 4.69891 0.5 4.5 0.5C4.30109 0.5 4.11032 0.579018 3.96967 0.71967C3.82902 0.860322 3.75 1.05109 3.75 1.25V2H1.5C1.10218 2 0.720644 2.15804 0.43934 2.43934C0.158035 2.72064 0 3.10218 0 3.5V18.5C0 18.8978 0.158035 19.2794 0.43934 19.5607C0.720644 19.842 1.10218 20 1.5 20H16.5C16.8978 20 17.2794 19.842 17.5607 19.5607C17.842 19.2794 18 18.8978 18 18.5V3.5C18 3.10218 17.842 2.72064 17.5607 2.43934C17.2794 2.15804 16.8978 2 16.5 2ZM16.5 6.5H1.5V3.5H3.75V4.25C3.75 4.44891 3.82902 4.63968 3.96967 4.78033C4.11032 4.92098 4.30109 5 4.5 5C4.69891 5 4.88968 4.92098 5.03033 4.78033C5.17098 4.63968 5.25 4.44891 5.25 4.25V3.5H12.75V4.25C12.75 4.44891 12.829 4.63968 12.9697 4.78033C13.1103 4.92098 13.3011 5 13.5 5C13.6989 5 13.8897 4.92098 14.0303 4.78033C14.171 4.63968 14.25 4.44891 14.25 4.25V3.5H16.5V6.5Z"
                                            fill="#C3E92D" />
                                    </svg>
                                </span>
                                oct 20, 2023
                            </p>
                            <p>
                                <span>
                                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 3.75C7.21997 3.75 5.47991 4.27784 3.99987 5.26677C2.51983 6.25571 1.36628 7.66131 0.685088 9.30585C0.00389957 10.9504 -0.17433 12.76 0.172937 14.5058C0.520204 16.2516 1.37737 17.8553 2.63604 19.114C3.89472 20.3726 5.49836 21.2298 7.24419 21.5771C8.99002 21.9243 10.7996 21.7461 12.4442 21.0649C14.0887 20.3837 15.4943 19.2302 16.4832 17.7501C17.4722 16.2701 18 14.53 18 12.75C17.9973 10.3639 17.0482 8.07629 15.361 6.38905C13.6737 4.70182 11.3861 3.75273 9 3.75ZM13.2806 9.53063L9.53063 13.2806C9.46095 13.3503 9.37822 13.4056 9.28718 13.4433C9.19613 13.481 9.09855 13.5004 9 13.5004C8.90146 13.5004 8.80388 13.481 8.71283 13.4433C8.62179 13.4056 8.53906 13.3503 8.46938 13.2806C8.3997 13.2109 8.34442 13.1282 8.30671 13.0372C8.269 12.9461 8.24959 12.8485 8.24959 12.75C8.24959 12.6515 8.269 12.5539 8.30671 12.4628C8.34442 12.3718 8.3997 12.2891 8.46938 12.2194L12.2194 8.46938C12.2891 8.39969 12.3718 8.34442 12.4628 8.30671C12.5539 8.26899 12.6515 8.24958 12.75 8.24958C12.8486 8.24958 12.9461 8.26899 13.0372 8.30671C13.1282 8.34442 13.2109 8.39969 13.2806 8.46938C13.3503 8.53906 13.4056 8.62178 13.4433 8.71283C13.481 8.80387 13.5004 8.90145 13.5004 9C13.5004 9.09855 13.481 9.19613 13.4433 9.28717C13.4056 9.37822 13.3503 9.46094 13.2806 9.53063ZM6 1.5C6 1.30109 6.07902 1.11032 6.21967 0.96967C6.36033 0.829018 6.55109 0.75 6.75 0.75H11.25C11.4489 0.75 11.6397 0.829018 11.7803 0.96967C11.921 1.11032 12 1.30109 12 1.5C12 1.69891 11.921 1.88968 11.7803 2.03033C11.6397 2.17098 11.4489 2.25 11.25 2.25H6.75C6.55109 2.25 6.36033 2.17098 6.21967 2.03033C6.07902 1.88968 6 1.69891 6 1.5Z"
                                            fill="#C3E92D" />
                                    </svg>
                                </span>
                                Start 06:00 AM - Until Finish
                            </p>
                        </div>
                        <img decoding="async" src="{{ asset('zunzo/images/evtent/event2.jpg') }}" alt="denpasar marathon event 2023">
                    </div>
                    <div class="tf-info-price">
                        <h4>Ticket</h4>
                        <p class="price"><span>$45</span>/ticket</p>
                        <a href="event-details.html" class="flat-button ">Learn more</a>
                        <div class="item-event-price-bg">
                        </div>
                    </div>
                    <div class="bg-item-event-2"></div>
                </div>
            </div>
        </div>
    </div><!-- Widget event -->

    <!-- widge Form register -->
    <div class="widget-form-register">
        <div class="row">
            <div class="col-md-6 pd-form image-register">
                <img src="{{ asset('zunzo/images/retinal/img-form.jpg') }}" alt="image">
            </div>
            <div class="col-md-6 pd-form">
                <div class="widget-register background-green">
                    <div class="heading-register">
                        <h2 class="title-register">Registration Form</h2>
                    </div>

                    <div class="form-register">
                        <form action="#" method="post" id="registerform" class="register-form" novalidate="">
                            <fieldset class="name-container">
                                <input type="text" id="author" placeholder="Your name*" class="tb-my-input"
                                    name="author" tabindex="1" value="" size="32" aria-required="true">
                            </fieldset>
                            <fieldset class="email-container">
                                <input type="text" id="email" placeholder="Your email*" class="tb-my-input" name="email"
                                    tabindex="2" value="" size="32" aria-required="true">
                            </fieldset>
                            <fieldset class="telephone-container">
                                <input type="text" id="telephone" placeholder="Telephone*" class="tb-my-input"
                                    name="telephone" tabindex="1" value="" size="32" aria-required="true">
                            </fieldset>
                            <fieldset class="sex-container">
                                <select name="sex" id="sexs" class="tb-my-input" aria-required="true">
                                    <option value="">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </fieldset>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="comment-reply" class="submit-register"
                                    value="Join now">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- widge Form register -->

    <div class="graphic"></div>

    <!-- Footer -->
    <footer class="footer background-black">
        <div class="footer-widgets">
            <div class="themeflat-container">
                <div class="row footer-top">
                    <div class="col-xxl-4 col-lg-4 col-xl-4 col-md-12 logo-footer">
                        <div class="widget">
                            <div class="textwidget">
                                <img id="a1" src="{{ asset('zunzo/images/logo-footer.png') }}" alt="images">
                                <p>Welcome to our running community! Discover the joy of running, connect with fellow
                                    enthusiasts, and unlock your full potential with our expert resources and training
                                    programs.
                                </p>
                                <div class="social-icon-footer">
                                    <a href="facebook.com"><i class="icon-facebook"></i></a>
                                    <a href="linkedin.com"><i class="icon-linkedin2"></i></a>
                                    <a href="icon-twitter.com"><i class="icon-twitter"></i></a>
                                    <a href="instagram.com"><i class="icon-instagram"></i></a>
                                    <a href="youtube.com"><i class="icon-youtube"></i></a>


                                </div>
                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-xxl-4 col-lg-4 col-xl-4 col-md-6 link-footer">
                        <div class="widget widget_menu-footer">
                            <h5 class="widget-title">Quick Links</h5>
                            <ul class="menu-footer">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="event.html">Our Event</a></li>
                                <li><a href="blog.html">Latest News</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul><!-- /.menu -->
                        </div><!-- /.widget -->
                        <div class="widget widget_menu-footer">
                            <h5 class="widget-title">Page</h5>
                            <ul class="menu-footer">
                                <li><a href="blog.html">Blogs</a></li>
                                <li><a href="event-details.html">Events Detail</a></li>
                                <li><a href="event.html">Events</a></li>
                                <li><a href="about.html">About Us</a></li>
                            </ul><!-- /.menu -->
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-xxl-4 col-lg-4 col-xl-4 col-md-6 new-letter">
                        <div class="widget widget_text">
                            <h5 class="widget-title">Newsletter</h5>
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
                                    <p>Need help? 24/7</p>
                                    <span>001-1234-88888</span>
                                </div>
                            </div>
                            <p><i class="icon-MapPin"></i>710 1st St. Easton, PA 18042 | Chester County</p>
                            <form action="#">
                                <div class="input-new-letter">
                                    <input class="btn-email" name="email" id="emails" type="email"
                                        placeholder="Your email address" required>
                                    <button class="btn-submit" type="submit"><i class="icon-uniE925"></i></button>
                                </div>
                            </form>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->

                </div><!-- /.row -->
                <div class="row footer-bottom">
                    <div class="col-md-6 col-sm-12">
                        <div class="copyright">
                            <p>©2023 <a href="index.html" target="_blank"> Zunzo.</a> All Rights Reserved.
                            </p>
                        </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-12">
                        <ul class="link-footer-bottom">
                            <li><a href="#">Terms Of Services</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                        </ul><!-- /.menu -->
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
    <div class="modal fade modal-login" id="exampleModalToggle" aria-hidden="true" aria-label="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="tfre_login-form">
                    <h2>Login:</h2>
                    <div class="error_message tfre_message"></div>
                    <form class="tfre_login" method="post" enctype="multipart/form-data" id="tfre_custom-login-form">
                        <div class="container">
                            <div class="form-group">
                                <label for="username">User Name:</label>
                                <input type="text" name="username" id="username" placeholder="Email or user name"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" placeholder="Your password"
                                    required="">
                            </div>
                            <div>
                                <a href="#" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"
                                    data-bs-dismiss="modal" class="tfre-reset-password" id="tfre-reset-password">Forgot
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
                    <form class="tfre_register" method="post" enctype="multipart/form-data"
                        id="tfre_custom-register-form">
                        <div class="container">
                            <div class="form-group">
                                <label for="username">User Name:</label>
                                <input type="text" name="username" id="usernames" placeholder="User name" required="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email-modal" placeholder="Email " required="">
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
                    <p>Already have an account? <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Sign in.</a></p>
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
                <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"
                    class="tfre_login_redirect">Back to Login</a>
            </div>
        </div>
    </div>
    <!-- Modal-login -->
    <script type="text/javascript" src="{{ asset('zunzo/javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('zunzo/javascript/bootstrap.bundle.min.js') }}"></script>
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
</body>

</html>