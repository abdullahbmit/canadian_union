@extends('Welcome')
@section('content')
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

        <div class="carousel-item active" data-bs-interval="10000">
            <img src="assets/img/hero/0-Header.webp" class="d-block w-100" alt="...">
            <div class="ot-hero-bg"><img src="assets/img/hero/Flag.webp" class=" w-100" alt="overlay"></div>
            <div class="carousel-caption d-none d-md-block">
                <div class="hero-style2"><span class="sub-title"><span class="text">Welcome To Our Company</span></span>
                    <h1 class="hero-title"><span class="title1">World’s No.1 Technology</span> <span class="title2">Solution Provider.</span></h1>
                    <p class="hero-text">The goal of IT services is to provide efficient and effective technology
                        solutions that help businesses achieve their objectives.</p>
                    <div class="btn-group"><a href="about.html" class="ot-btn">Discover More</a> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="watch-btn popup-video">
                            <div class="play-btn style2"><i class="fas fa-play"></i></div><span class="text">Watch
                                Video</span>
                        </a></div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="assets/img/hero/0-Header.webp" class="d-block w-100" alt="...">
                <div class="ot-hero-bg"><img src="assets/img/hero/2-PRI shape.webp" class=" w-100" alt="overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/hero/0-Header.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="space-1" data-bg-src="assets/img/bg/subscribe_bg_1.jpg">
        <div class="container">
            <div class="newsletter-area2">
                <form class="newsletter-form">
                    <input class="form-control" type="email" placeholder="Email Address*" required="">
                    <button type="submit" class="ot-btn">Track</button>
                </form>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><span class="text">Quick Steps</span></span>
                <h2 class="sec-title">Our Work Feature</h2>
            </div>
            <div class="row gy-40 justify-content-between">
                <div class="col-xxl-auto col-lg-4 col-md-4 process-card-wrap">
                    <div class="process-card">
                        <div class="box-number">01</div>
                        <div class="box-line"></div>
                        <div class="box-content">
                            <h3 class="box-title">Sign Up</h3>
                            <p class="box-text">You can instantly create your profile and start sending money to your loved ones instantly!</p>
                            <div class="box-icon"><a href="#" class="ot-btn btn-sm" bis_skin_checked="1" style="padding: 17.5px 17px;">Register</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-lg-4 col-md-4 process-card-wrap">
                    <div class="process-card">
                        <div class="box-number">02</div>
                        <div class="box-line"></div>
                        <div class="box-content">
                            <h3 class="box-title">Send Money</h3>
                            <p class="box-text">Send money to Pakistan using your bank account securely through INTERAC Online!</p>
                            <div class="box-icon"><a href="#" class="ot-btn btn-sm" bis_skin_checked="1" style="padding: 17.5px 17px;">Login</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-lg-4 col-md-4 process-card-wrap">
                    <div class="process-card">
                        <div class="box-number">03</div>
                        <div class="box-line"></div>
                        <div class="box-content">
                            <h3 class="box-title">How It Works</h3>
                            <p class="box-text">Just follow few simple steps to sign up and send money to anyone in Pakistan!</p>
                            <div class="box-icon"><a href="#" class="ot-btn btn-sm" bis_skin_checked="1" style="padding: 17.5px 17px;">See How It Works</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden space" id="testi-sec" data-bg-src="assets/img/bg/testi_bg_3.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="testi-img1"><img src="assets/img/bg/client-testimonial.webp" alt="Image"></div>
                </div>
                <div class="col-xl-6">
                    <div class="pe-xxl-5">
                        <div class="title-area mb-45"><span class="sub-title"><span class="text">Our Client
                                    Feedbacks</span></span>
                            <h2 class="sec-title">Client Testimonials</h2>
                        </div>
                        <div class="testi-grid-area">
                            <div class="swiper ot-slider has-shadow" id="testiSlide3" data-slider-options='{"effect":"slide"}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testi-grid">
                                            <p class="box-text">“I have been using both the online and manual money transfer service for more than three years. Canadian Union has consistently provided an excellent and reliable service at competitive rates. Their staff is friendly, honest and acts quickly to resolve issues, if any.”</p>
                                            <div class="box-profile" style="margin-top: 53px;">
                                                <div class="box-img"><img src="assets/img/testimonial/testi_3_1.jpg" alt="Image"></div>
                                                <div class="media-body">
                                                    <h3 class="box-title">Asif Aslam</h3><span class="box-desig">Canadian Union Customer Since 2010</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-grid">
                                            <p class="box-text">“We have been using Canadian Union to send money to Pakistan, India and Middle East.We have always found them reliable and efficient with friendly service. Highly recommended!”</p>
                                            <div class="box-profile" style="margin-top: 53px;">
                                                <div class="box-img"><img src="assets/img/testimonial/testi_3_2.jpg" alt="Image"></div>
                                                <div class="media-body">
                                                    <h3 class="box-title">Kazi Ahmed, CMA</h3><span class="box-desig">Canadian Union Customer Since 2009</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-grid">
                                            <p class="box-text">“I have been using Canadian Union for the last 4 years now. They have treated me well and handled my remittances in a courteous manner. I am very satisfied and I would definitely recommend their services to my friends and acquaintances.”</p>
                                            <div class="box-profile" style="margin-top: 53px;">
                                                <div class="box-img"><img src="assets/img/testimonial/testi_3_3.jpg" alt="Image"></div>
                                                <div class="media-body">
                                                    <h3 class="box-title">Khurram Shafiq</h3><span class="box-desig">Canadian Union Customern Since 2010</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-grid">
                                            <p class="box-text">“Canadian Union was the first of its kind money transfer service in Calgary, transferring money within 4 hours to anywhere in Pakistan without any fees was impossible back in those days. In addition to that a friendly and welcoming staff is always there to offer you the best rate in the city. Canadian Union has done it again by offering online money transfer service.”</p>
                                            <div class="box-profile">
                                                <div class="box-img"><img src="assets/img/testimonial/testi_3_2.jpg" alt="Image"></div>
                                                <div class="media-body">
                                                    <h3 class="box-title">Mairaj Ahmed</h3><span class="box-desig">Canadian Union Customer Since 2011</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-grid">
                                            <p class="box-text">“Regardless of the transfer amount, I always get the best exchange rate in the market with exceptional and prompt service!”</p>
                                            <div class="box-profile">
                                                <div class="box-img"><img src="assets/img/testimonial/testi_3_2.jpg" alt="Image"></div>
                                                <div class="media-body">
                                                    <h3 class="box-title">Mohammad Ali Tahir,</h3><span class="box-desig">Canadian Union Customer Since 2011</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-grid">
                                            <p class="box-text">The reason I use Canadian Union is their prompt and courteous service, no charges like western union or other transmitters, the quality of service and better rates. I will definitely continue to use their service for all my future money transfers to my thekooza.com staff and to my loved ones in Pakistan.</p>
                                            <div class="box-profile">
                                                <div class="box-img"><img src="assets/img/testimonial/testi_3_2.jpg" alt="Image"></div>
                                                <div class="media-body">
                                                    <h3 class="box-title">Burhan M. Khan</h3><span class="box-desig">Canadian Union Customer Since 2010</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box"><button data-slider-prev="#testiSlide3" class="slider-arrow default"><i class="far fa-arrow-left"></i></button> <button data-slider-next="#testiSlide3" class="slider-arrow default"><i class="far fa-arrow-right"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="space">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><span class="text">Brand We Work
                        With</span></span>
                <h2 class="sec-title " style="color: #E4171E;">Connecting Canada to Every Corner <br>of Pakistan</h2>
                <p class="text-center" style="padding: 25px 154px;">Experience the convenience of our extensive banking network, which links Canada directly to every corner of Pakistan. Through our collaboration with Pakistan's largest banking institutions, we ensure that your remittance needs are met effortlessly, no matter where your recipients are located in Pakistan.</p>
            </div>
            <div class="brand-grid-wrap">
                <div class="brand-grid"><img src="assets/img/brand/Askari-Bank.jpg" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="assets/img/brand/Bank-Alfalah.jpg" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="assets/img/brand/Bank-al-Habib.jpg" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="assets/img/brand/Meezan-Bank.jpg" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="assets/img/brand/summits-bank .jpg" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="assets/img/brand/Bank-of-Azad-jammu-Kashmir.jpg" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="assets/img/brand/Bank-of-Khayber.jpg" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="assets/img/brand/Allied-Bank-Logo.gif" alt="Brand Logo"></div>
            </div>
        </div>
    </div>
    <section class="cta-sec2" data-bg-src="assets/img/bg/cta_bg_2.jpg">
        <div class="container">
            <div class="row gy-30 align-items-center">
                <div class="col-lg-12">
                    <div class="img-box2"><img src="assets/img/normal/cta_1.png" alt="cta"></div>
                </div>
            </div>
        </div>
        <div class="cta-texts"><span class="text">Fast 24/7 Customer Service</span>
            <div class="line"></div><span class="text">Save time & valuable money</span>
        </div>
    </section>
    <section class="bg-top-center space" data-bg-src="assets/img/bg/why_bg_1.jpg">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box" data-bg-src="assets/img/bg/State-Bnak.jpg"><span class="box-subtitle"></span>
                        <h3 class="box-title">Authorized By:</h3><a href="about.html"></a>
                        <div class="box-img"><img src="assets/img/normal/State-Bnak.jpg" alt="" style="height: 80%;width: 94%;"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box" data-bg-src="assets/img/bg/vector_bg_1.png"><span class="box-subtitle"></span>
                        <h3 class="box-title">Proud to Bank With</h3><a href="about.html"></a>
                        <div class="box-img"><img src="assets/img/normal/bmo-logo-x.jpg" alt="" style="height: 80%;width: 94%;"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box" data-bg-src="assets/img/bg/vector_bg_1.png"><span class="box-subtitle"></span>
                        <h3 class="box-title">Authorized Merchant</h3></a>
                        <div class="box-img"><img src="assets/img/normal/interact-logo.png" alt="" style="height: 80%;width: 94%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection