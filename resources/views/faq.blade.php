@extends('Welcome')
@section('content')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Faq</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Faq Details</li>
            </ul>
        </div>
    </div>
</div>
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-8">
                <div class="page-single mb-30">
                    <div class="page-img"><img src="assets/img/service/service_details.jpg" alt="Service Image">
                    </div>
                    <div class="page-content">
                        <div class="accordion mt-20" id="faqAccordion">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">What Is Canadian Union Online Money Transfer?</button></div>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Canadian Union Online Money Transfer is the online money remittance service of Canadian Union that allows Canadian consumers to send money to Pakistan via www.canadianunion.ca anytime -- 24 hours a day, 7 days a week using Canadian bank account.</p>
                                        <p>Canadian Union is an authorized money transfer business by the Financial Transaction & Reports Analysis Center of Canada (FINTRAC).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">How Does It Work?</button></div>
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                        <p>
                                            You can start from creating an account with us by clicking on the SIGN UP button on the home page or by clicking the link Canadian Union's Sign Up page.
                                        </p>
                                        <p>Once you successfully submit your profile, you will immediately receive an email from us containing the encrypted link. You must need to click on this encrypted link to activate your account. If your browser does not allow the links, you must copy and paste this link to activate your account. In case you delete or misplace your email containing this encrypted link, you can always activate your account by clicking on the "Activate your account" link on the Login page.</p>
                                        <p>Upon successful activation of your account, you will be able to log into your account on the Canadian Union's Login page.</p>
                                        <p>After logging into your account for the first time, you may be required to provide us your identification related documents, such as your driver license. You can upload any such required documents on the "Verification Status" page under the "Settings" menu. Please note that we are required by law to verify and keep record of your identification on our files.</p>
                                        <p>After you provide us your identification documents, our staff may contact you through the email or by phone to request further documentation, if necessary. Once your account is approved by our staff, you will be able to Send Money in the following three easy steps.</p>
                                        <blockquote>
                                            <ul>
                                                <li>Provide us your beneficiary information. You will have the option to create a new beneficiary along the way.</li>
                                                <li>Select your payment method as Interac Online.</li>
                                                <li>Enter in the transaction information.</li>
                                            </ul>
                                        </blockquote>
                                        <p>After completing the above steps and then reviewing your transaction information, you can submit your transaction.</p>
                                        <p>Once the transaction is created, a confirmation page is displayed with the transaction number generated for your reference. You also have the option to print your receipt.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">What Forms Of Payment Do You Accept?</button></div>
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Currently, we accept Interac Online only. As long as your transaction is done before 8:00 pm EST on business days, it will be processed the same day. Otherwise, it will be processed the next day.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-4"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">Which Currency Is Used?</button></div>
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">The currency accepted is CAD and the remittance is delivered in the payout country's local currency.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-5"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">How Long Does It Take For My Beneficiary To Get The Money?</button></div>
                                <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Cash Pickups are generally available the next day, whereas bank deposits can take up to 1 to 2 days. Your exchange rate is always locked. Once the funds are received in our account, which generally takes 1 business day, you will receive a confirmation that the funds are ready to be disbursed.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-6"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">How Will My Beneficiary Receive The Money?</button></div>
                                <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">The beneficiary can collect money via our partner banks. You can search for the payout locations in locations page, or alternatively you can always contact us and we can guide you where the beneficiary can pick up the locations.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-7"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">What Is The Service Charge?</button></div>
                                <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="collapse-item-7" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">There is absolutely NO service charge.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-8"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">Is My Information Protected?</button></div>
                                <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="collapse-item-8" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Yes, your information is secured via SSL which uses 256 bit encryption algorithm. This protects transactions and confidential data in transmission.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-9"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">How Can I Track My Transaction?</button></div>
                                <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="collapse-item-9" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                        <div class="accordion-switch" bis_skin_checked="1">
                                            <span class="togglegfx"></span>How can I track my transaction?
                                        </div>
                                        <div class="accordion-content" style="" bis_skin_checked="1">
                                            <p>
                                                You can easily track your transaction via our Track Transaction facility and enter the unique reference number. The following are the status messages:
                                            </p>
                                            <blockquote>
                                                <ol>
                                                    <li>In Process - The transaction is being processed </li>
                                                    <li>Transmitted to Payee Office - Your transaction has been accepted and is ready for disbursement</li>
                                                    <li>Paid to Beneficiary - Your beneficiary has received the money </li>
                                                </ol>
                                            </blockquote>
                                        </div>
                                        </li>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_nav_menu bg-smoke">
                        <h3 class="widget_title">We provide you:</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">Absolutely NO service fee!</a></li>
                                <li><a href="#">Next day delivery for cash pickup and bank deposits!</a></li>   
                            </ul>
                        </div>
                    </div>
                    <div class="widget bg-smoke">
                        <h3 class="widget_title">How It Works</h3>
                        <div class="widget-availability">
                            <p >Just follow few simple steps to sign up and send money anywhere in the world!</p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection