@extends('frontendtemplate')

@section('content')

<div id="page-content">
        <section class="flexslider">
            <ul class="slides">
                <li>
                    <img src="{{asset('frontend/assets/image/doc.jpg')}}" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Healthcare</b>
                            <h3>Health Insurance</h3>
                            <p>Health Insurance is a type of insurance that covers the insured's medical and surgical expenses. </p>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{asset('frontend/assets/image/life.jpg')}}" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Lifecare</b>
                            <h3>Life Insurance</h3>
                            <p>Life insurance provides protection to the family at the premature death.</p>
                            
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{asset('frontend/assets/image/travel.jpg')}}" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Healthcare</b>
                            <h3>Fire Insurance</h3>
                            <p>Protect you, your home and
                                your possessions from the destructive
                               effects of uncontrolled fire</p>
                            
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <div class="container">
            <div class="row">
                <section class=" col-lg-12">
                    <div class="intro">
                        <h2 style="text-align: center;">Welcome to Myanmar Insurance</h2>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Life is filled up with excitement. But at the same time it is full of risks. Some uncertainties and unexpected events can really put you down.General Insurance or Non-life Insurance helps you to safeguard yourself and the things around, which you value a lot. Myanmar Insurance deals the adding new insurance schemes and managing the clients for the insurance. It has complete access for the crud operations that are to create, read, update and delete the database entries. At first you need to add a branch and the staff members for the branch then secondly add a user to the database now you can add an insurance scheme and finally make the payments for the client to the added insurance. These may include your home, car and other valuables like money lending, professional casualties other than death, etc.</p>
                        <ul class="row" style="text-align: center;">
                            <li class="col-sm-4">
                                <i class="fa fa-life-ring text-center"></i>
                                <h3>27x7 Support</h3>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur.</p> --}}
                            </li>
                            <li class="col-sm-4">
                                <i class="ti-marker-alt"></i>
                                <h3>Easy Claim system</h3>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur.</p> --}}
                            </li>
                            <li class="col-sm-4">
                                <i class="ti-email"></i>
                                <h3>Get Started with us</h3>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur.</p> --}}
                            </li>
                        </ul>
                    </div>
                </section>
                
            </div>
        </div>
        <section class="product-tab">
            <div class="container">
                <div class="row">
                    <div id="parentVerticalTab">
                        <h2>Products</h2>
                        <ul class="resp-tabs-list hor_1 col-sm-3 col-md-3 col-lg-3">
                            <li><i class="ti-home"></i> Home Insurance</li>
                            <li><i class="fa fa-plane"></i> Travel Insurance</li>
                            <li><i class="ti-heart-broken"></i> Life Insurance</li>
                            <li><i class="fa fa-medkit" aria-hidden="true"></i> Health Insurance</li>
                            <li><i class="ti-car"></i> Vehicle Insurance</li>
                        </ul>
                        <div class="col-sm-5 col-md-5 col-lg-5 resp-tabs-container hor_1">
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="ti-home"></i></span>
                                        Home Insurance
                                    </h4>
                                    <p>A home offers the peace, serenity and warmth that you may be looking for after a tiring day at work.Therefore, buying a home insurance is utmost important.</p>
                                    <p>. It offers protection to the entire structure of your house and ensures utmost security for all the belongings that you may collected over the years. </p>
                                    <p class="tel">
                                        <i class="fa fa-phone"></i> +95987654321 <span>Toll Free</span>
                                    </p>
                                    <p>
                                        <a class="btn-default" href="product-houseinsurance.html">Get Free Quote</a>
                                    </p>
                                </div>
                                <img src="{{asset('frontend/assets/images/product-img.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="fa fa-plane"></i></span>
                                        Travel Insurance
                                    </h4>
                                    <p>Travel insurance would help you tackle all the travel and medical contingencies while you travel abroad. It is utmost important to add travel insurance to your checklist while you plan your vacation, be it for leisure or business.
                                    </p>
                                    <p>Travel insurance is an insurance product for covering unforeseen losses incurred while travelling, either internationally or domestically. </p>
                                    <p class="tel">
                                        <i class="fa fa-phone"></i> +95987654321 <span>Toll Free</span>
                                    </p>
                                    <p>
                                        <a class="btn-default" href="#">Get Free Quote</a>
                                    </p>
                                </div>
                                <img src="{{asset('frontend/assets/images/1.jpg')}}" alt="" class="img-responsive" />
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="ti-heart-broken"></i></span>
                                        Life Insurance
                                    </h4>
                                    <p>A life insurance policy is a contract with an insurance company. Life Insurance is different from other insurance in the sense that, here, the subject matter of insurance is the life of a human being.
                                    </p>
                                    <p>The insurer will pay the fixed amount of insurance at the time of death or at the expiry of a certain period.</p>
                                    <p class="tel">
                                        <i class="fa fa-phone"></i> +95987654321 <span>Toll Free</span>
                                    </p>
                                    <p>
                                        <a class="btn-default" href="#">Get Free Quote</a>
                                    </p>
                                </div>
                                <img src="{{asset('frontend/assets/images/3.jpg')}}" alt="" class="img-responsive" />
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="ti-heart-broken"></i></span>
                                        Health Insurance
                                    </h4>
                                    <p>Health insurance is a type of insurance coverage that typically pays for medical, surgical, prescription drug and sometimes dental expenses incurred by the insured. Health insurance helps protect you from the high costs of health care. 
                                    </p>
                                    <p>Health insurance can reimburse the insured for expenses incurred from illness or injury, or pay the care provider directly.</p>
                                    <p class="tel">
                                        <i class="fa fa-phone"></i> +95987654321 <span>Toll Free</span>
                                    </p>
                                    <p>
                                        <a class="btn-default" href="#">Get Free Quote</a>
                                    </p>
                                </div>
                                <img src="{{asset('frontend/assets/image/doctor.jpg')}}" alt="" class="img-responsive" />
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="ti-car"></i></span>
                                        Vehicle Insurance
                                    </h4>
                                    <p>Vehicle insurance is insurance for cars, trucks, motorcycles, and other road vehicles.This would save your finances if your car meets with an accident, or falls prey to any natural disaster like floods, earthquake, theft, etc.</p>
                                    <p>This type of coverage is best for people who think motor insurance is mandatory and buy this type just for the heck of it.</p>
                                    <p class="tel">
                                        <i class="fa fa-phone"></i> +95987654321 <span>Toll Free</span>
                                    </p>
                                    <p>
                                        <a class="btn-default" href="#">Get Free Quote</a>
                                    </p>
                                </div>
                                <img src="{{asset('frontend/assets/images/2.jpg')}}" alt="" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <h2 class="text-center">Our Best Services</h2>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 services-dtl">
                        <span class="fa fa-life-bouy"></span>
                        <h3>24x7 Support</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="ti-pencil"></span>
                        <h3>Easy Claim System</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="ti-email"></span>
                        <h3>Get Started With us</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="fa fa-money"></span>
                        <h3>Easy Installments</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="ti-wallet"></span>
                        <h3>Lorem Ipsum</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="fa fa-laptop"></span>
                        <h3>Online Account</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="ti-lock"></span>
                        <h3>Strongly Secure</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="ti-book"></span>
                        <h3>Understandable Terms</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur</p> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection