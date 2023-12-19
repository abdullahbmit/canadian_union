@extends('Welcome')
@section('content')
<style>
    .pb-90 {
    padding-bottom: 90px;
}
.pt-120 {
    padding-top: 120px;
}
.gradient-bg {
    background-image: linear-gradient(90deg, rgba(2,59,166,1) 0%, rgba(67,126,235,1) 100%);
    background-color: #4169E1;
}
.overflow-hidden {
    overflow: hidden!important;
}
.overflow-hidden {
    overflow: hidden;
}
/* @media (min-width: 1200px){
.container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 1140px;
}
}
@media (min-width: 992px){
.container, .container-lg, .container-md, .container-sm {
    max-width: 960px;
}
}
@media (min-width: 768px){
.container, .container-md, .container-sm {
    max-width: 720px;
}
} */
.works-about-items::before {
    position: absolute;
    right: 20%;
    top: 0;
    content: "";
    height: 100%;
    width: 500%;
    background: #f3f7fd;
    z-index: -1;
}
.align-center {
    align-items: center;
}
img {
    border: none;
    outline: none;
    max-width: 100%;
}
.works-about-items .info h2 {
    font-weight: 600;
    margin-bottom: 25px;
}
.text-white {
    color: #fff!important;
}
.text-justify {
    text-align: justify!important;
}
</style>
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">How it works</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>How it works</li>
            </ul>
        </div>
    </div>
</div>
<div id="expanding-global-reach" class="overflow-hidden gradient-bg about-page-single-section pt-120 pb-90" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="works-about-items" bis_skin_checked="1">
                <div class="row align-center" bis_skin_checked="1">
                    <div class="col-lg-6" bis_skin_checked="1">
                        <div class="thumb" bis_skin_checked="1">
                            <img src="assets/img/about/expanding-global-reach.jpg" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-6 info" bis_skin_checked="1">
                        <h2 class="text-white">Expanding Global Reach</h2>
                        <p class="text-justify" style="color: #f3f7fd;">
                        1. You can start from creating an account with us by clicking on the SIGN UP button on the home page or by clicking the link Canadian Union's Sign Up page.
                        </p>
                        <p class="text-justify"style="color: #f3f7fd;">
                        2. Once you successfully submit your profile, you will immediately receive an email from us containing the encrypted link. You must need to click on this encrypted link to activate your account. If your browser does not allow the links, you must copy and paste this link to activate your account. In case you delete or misplace your email containing this encrypted link, you can always activate your account by clicking on the "Activate your account" link on the Login page.
                        </p>
                    </div>
                    <div class="col-12" bis_skin_checked="1">
                        <p class="text-justify" style="color: #f3f7fd;">
                        3. Upon successful activation of your account, you will be able to log into your account on the Canadian Union's Login page.
                        </p>
                        <p class="text-justify"style="color: #f3f7fd;">
                           4. After logging into your account for the first time, you may be required to provide us your identification related documents, such as your driver license. You can upload any such required documents on the "Verification Status" page under the "Settings" menu. Please note that we are required by law to verify and keep record of your identification on our files.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space" id="about-sec">
    <div class="shape-mockup jump d-none d-sm-block" data-bottom="20%" data-right="8%"><img src="assets/img/shape/shape_2.png" alt="shape"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-35 mb-lg-0">
                <div class="img-box6">
                    <div class="img1"><img src="assets/img/normal/about_4_1.jpg" alt="About"></div>
                </div>
            </div>
            <div class="col-xxl-6 col-lg-7 text-center text-lg-start">
                <div class="ps-xl-5">
                <h2 class="sec-title">Quality & Experience IT Solution Company</h2>
                <p class="box-text">After you provide us your identification documents, our staff may contact you through the email or by phone to request further documentation, if necessary. Once your account is approved by our staff, you will be able to Send Money in the following three easy steps.Provide us your beneficiary information. You will have the option to create a new beneficiary along the way.Select your payment method as Interac Online.Enter in the transaction information.</p>
                        <p class="sec-text pt-5">After completing the above steps and then reviewing your transaction information, you can submit your transaction.</p>
                        <p class="box-text">Once the transaction is created, a confirmation page is displayed with the transaction number generated for your reference. You also have the option to print your receipt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection