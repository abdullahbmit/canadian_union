@extends('Welcome')
@section('content')

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="contact-feature-wrap">
                <div class="contact-feature">
                    <div class="box-icon icon-btn"><i class="fas fa-phone"></i></div>
                    <div class="media-body">
                        <h3 class="box-title">Phone Number</h3>
                        <p class="box-text"><a href="#">+1-403-568-7277</a></p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="contact-feature">
                    <div class="box-icon icon-btn"><i class="fas fa-envelope"></i></div>
                    <div class="media-body">
                        <h3 class="box-title">Email Address</h3>
                        <p class="box-text"><a href="#">admin@canadianunion.ca</a>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="contact-feature">
                    <div class="box-icon icon-btn"><i class="fas fa-location-dot"></i></div>
                    <div class="media-body">
                        <h3 class="box-title">Our Address</h3>
                        <p class="box-text"> CANADIAN UNION 319-7 WESTWINDS CR NE CALGARY, ALBERTA T3J5H2 CANADA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-bottom" id="contact-sec">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 text-center text-lg-start">
                    <div class="pe-xxl-5 me-xl-4">
                        <div class="title-area mb-50"><span class="sub-title"><span class="text">Have Any
                                    Question?</span></span>
                            <h2 class="sec-title">Seamless Money Transfers Across Borders</h2>
                            <p class="sec-text">Explore hassle-free money transfers from Canada to Pakistan with Canadian Union. Our dedicated team ensures a secure and efficient process, providing you with a reliable solution for sending funds to your loved ones in Pakistan. Contact us today for personalized assistance and streamlined financial transactions that bridge the distance with confidence.</p>
                        </div>
                        <div class="social-card">
                            <h3 class="box-title">Follow Us:</h3>
                            <div class="ot-social"><a target="_blank" href="#"><i
                                        class="fab fa-facebook-f"></i></a> <a target="_blank"
                                    href="#/"><i class="fab fa-twitter"></i></a> <a target="_blank"
                                    href="#"><i class="fab fa-instagram"></i></a> <a
                                    target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-youtube"></i></a></div>
                            <a target="_blank" href="#" class="box-link">Get Google Map
                                Directions</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-40 mt-xl-0">
                    <div class="contact-form1" data-bg-src="assets/img/bg/contact_bg_2.png">
                        <h3 class="box-title">Fill The Contact Form</h3>
                        <p class="box-text">Feel free to contact with us, we don’t spam your email</p>
                        <form action="https://html.onertheme.com/tronix/mail.php" method="POST"
                            class="input-label ajax-contact">
                            <div class="row">
                                <div class="form-group line-input col-sm-6"><input type="text" class="form-control"
                                        name="name" id="name" required=""> <label for="name">Your Name*</label></div>
                                <div class="form-group line-input col-sm-6"><input type="email" class="form-control"
                                        name="email" id="email" required=""> <label for="email">Your Email*</label>
                                </div>
                                <div class="form-group line-input col-sm-6"><input type="tel" class="form-control"
                                        name="number" id="number" required=""> <label for="number">Phone Number*</label>
                                </div>
                                <div class="form-group line-input col-sm-6"><input type="text" class="form-control"
                                        name="subject" id="subject" required=""> <label for="subject">Subject...</label>
                                </div>
                                <div class="form-group line-input col-12"><textarea name="message" id="message"
                                        cols="30" rows="3" class="form-control" required=""></textarea> <label
                                        for="message">Your Message*</label></div>
                                <div class="form-btn col-12 mt-10"><button class="ot-btn style3">Submit</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection