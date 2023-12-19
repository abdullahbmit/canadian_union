@extends('Welcome')
@section('content')
<style>
.f-1{
    font-weight: 800;
    color: rgb(0,54,214);
}
</style>

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">our Services</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li> our Services</li>
            </ul>
        </div>
    </div>
</div>
<blockquote>
    <h1 class="text-center f-1">Services</h1>
    <p class="text-center" >anadian Union provides the following services for you to transfer money from Canada to Pakistan. You can send money on our website from the comfort of your home using your online banking through Interac Online.You can choose any of the following types of money transfer services available through our network.</p>
</blockquote>
<section class="space-extra-top space" id="blog-sec">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img"><img src="assets/img/blog/blog_1_1.jpg" alt="blog image"></div>
                    <h3 class="box-title"><a href="blog-details.html">Cash Pickup</a></h3>
                    <p class="box-text">Your beneficiary can pick up their cash at over 900 locations of Allied Bank located all across Pakistan. Recipients can collect their cash instantly after confirmation of the money transfer. <br><br><br></p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img"><img src="assets/img/blog/blog_1_2.jpg" alt="blog image"></div>
                    <h3 class="box-title"><a href="blog-details.html">Bank Deposit</a></h3>
                    <p class="box-text">Transfer money directly into your beneficiary’s bank account. The beneficiary’s account will be credited within 1-2 business days. Same day deposit is possible if the transaction is conducted before the cutover time of 8:00 pm EST. <br> <br></p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img"><img src="assets/img/blog/blog_1_3.jpg" alt="blog image"></div>
                    <h3 class="box-title"><a href="blog-details.html">Service Coverage</a></h3>
                    <p class="box-text">We offer the largest disbursement network in Pakistan. Through our reliable money transfer network, we ensure fast and safe delivery of remittances to beneficiaries in Pakistan.As our network continues to grow, we will expand our services to cover remittances to other countries on the globe</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection