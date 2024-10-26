@extends('layouts.public')

@section('content')

<div class="mb-5 main-content">
    <div class="tf-widget-form-contact">
        <div class="themeflat-container">
            <div class="tf-form-contact">
                <div class="row">
                    <div class="col-md-6 pd-form">
                        <div class="map-contact relative">
                            <div class="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7905.452013233237!2d110.4192833905282!3d-7.818799339677089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57349e183ce1%3A0xc5f84d570e4f7ed0!2sSekarsuli%2C%20Sendangtirto%2C%20Kec.%20Berbah%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1725477091481!5m2!1sid!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pd-form">
                        <div class="form-contact background-black">
                            <div class="heading-register">
                                <h2 class="title-register">Contact Us</h2>
                            </div>
                            <div class="list-contact">
                                <div class="contact">
                                    <span> Phone: </span>
                                    <div class="address">(555) 123-4567</div>
                                </div>
                                <div class="contact">
                                    <span> Email: </span>
                                    <div class="address">hello@zunzo.com</div>
                                </div>
                            </div>
                            <ul class="social-media">
                                <li>
                                    <a href="twitter.com"><i class="icon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="dribbble.com"><i class="icon-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="behance.com"><i class="icon-behance"></i></a>
                                </li>
                                <li>
                                    <a href="pinterest.com"><i class="icon-pinterest"></i></a>
                                </li>
                            </ul>
                            <div class="form-register">
                                <form action="#" method="post" id="registerform" class="register-form" novalidate="">
                                    <fieldset class="name-container">
                                        <input type="text" id="author" placeholder="Your name*" class="tb-my-input"
                                            name="author" tabindex="1" value="" size="32"
                                            aria-required="true">
                                    </fieldset>
                                    <fieldset class="email-container">
                                        <input type="text" id="email" placeholder="Your email*" class="tb-my-input"
                                            name="email" tabindex="2" value="" size="32"
                                            aria-required="true">
                                    </fieldset>
                                    <fieldset class="telephone-container">
                                        <input type="text" id="telephone" placeholder="Telephone*" class="tb-my-input"
                                            name="telephone" tabindex="1" value="" size="32"
                                            aria-required="true">
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
        </div>
    </div>
</div>
@endsection
