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
                            <a href="#" class="ti-arrow-right"></a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{asset('frontend/assets/image/life.jpg')}}" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Lifecare</b>
                            <h3>Life Insurance</h3>
                            <p>Life insurance provides protection to the family at the premature death or gives an adequate amount at the old age when earning capacities are reduced.</p>
                            <a href="#" class="ti-arrow-right"></a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{asset('frontend/assets/image/travel.jpg')}}" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Healthcare</b>
                            <h3>Travel Insurance</h3>
                            <p>Travel insurance would help you tackle all the travel and medical contingencies while you travel abroad.</p>
                            <a href="#" class="ti-arrow-right"></a>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <div class="container">
            <div class="row">
                <section class="col-sm-7 col-md-8 col-lg-8">
                    <div class="intro">
                        <h2>Welcome to Insurance press</h2>
                        <p>Life is filled up with excitement. But at the same time it is full of risks. Some uncertainties and unexpected events can really put you down.General Insurance or Non-life Insurance helps you to safeguard yourself and the things around, which you value a lot. These may include your home, car and other valuables like money lending, professional casualties other than death, etc.</p>
                        <ul class="row">
                            <li class="col-sm-4">
                                <i class="fa fa-life-ring"></i>
                                <h3>27x7 Support</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur.</p>
                            </li>
                            <li class="col-sm-4">
                                <i class="ti-marker-alt"></i>
                                <h3>Easy Claim system</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur.</p>
                            </li>
                            <li class="col-sm-4">
                                <i class="ti-email"></i>
                                <h3>Get Started with us</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur.</p>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="col-sm-5 col-md-4 col-lg-4">
                    <div class="get-quote-form">
                        <h2>Get a free quote form</h2>
                        <form id="get-quote">
                            <div>
                                <input type="text" name="name" placeholder="Your Name" />
                            </div>
                            <div>
                                <input type="text" name="email" placeholder="Email" />
                            </div>
                            <div>
                                <input type="text" name="ph-no" placeholder="Phone no" />
                            </div>
                            <div class="form-select">
                                <span></span>
                                <select>
                                    <option>Product</option>
                                </select>
                            </div>
                            <div>
                                <textarea rows="1" cols="1" placeholder="Message"></textarea>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn-default" value="Get Free Quote" />
                            </div>
                        </form>
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
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="ti-pencil"></span>
                        <h3>Easy Claim System</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="ti-email"></span>
                        <h3>Get Started With us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="fa fa-money"></span>
                        <h3>Easy Installments</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="ti-wallet"></span>
                        <h3>Lorem Ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="fa fa-laptop"></span>
                        <h3>Online Account</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="ti-lock"></span>
                        <h3>Strongly Secure</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                    <div class="col-sm-3 services-dtl">
                        <span class="ti-book"></span>
                        <h3>Understandable Terms</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="text-center">Know what people says</h2>
                        <div class="testimonial-tab">
                            <div class="testimonials-tab-list">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" data-tab="tab1"><img src="images/people-01.jpg" alt="Client" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-tab="tab2"><img src="images/people-02.jpg" alt="Client" /></a>
                                    </li>
                                    <li class="active">
                                        <a href="javascript:void(0);" data-tab="tab3"><img src="images/people-03.jpg" alt="Client" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-tab="tab4"><img src="images/people-04.jpg" alt="Client" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-tab="tab5"><img src="images/people-05.jpg" alt="Client" /></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="testimonials-tab-content">
                                <div class="clearfix testimonial-con" id="testimonial-tab1">
                                    <h3>John<br /><span>Developer</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ante purus, aliquet ut urna id, blandit lobortis nisl. Phasellus varius velit sed placerat euismod. Duis nisi massa, pretium at luctus.</p>
                                    <i class="fa fa-quote-right right-quote"></i>
                                </div>
                                <div class="clearfix testimonial-con" id="testimonial-tab2">
                                    <h3>Roger<br /><span>Baseball Player</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">Cras vitae justo eu tellus maximus rutrum. Vestibulum nibh nibh, varius nec vehicula sed, finibus in tortor. Aliquam dictum, ligula vel euismod eleifend, libero est elementum</p>
                                    <i class="fa fa-quote-right right-quote"></i>
                                </div>
                                <div class="clearfix testimonial-con" id="testimonial-tab3">
                                    <h3>Victoria<br /><span>CEO</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">Vivamus faucibus magna vitae purus blandit, rutrum aliquam turpis bibendum. Ut sit amet sapien dolor. Integer eget orci id leo consectetur iaculis ut vitae neque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                    <i class="fa fa-quote-right right-quote"></i>
                                </div>
                                <div class="clearfix testimonial-con" id="testimonial-tab4">
                                    <h3>Liang<br /><span>Photographer</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">Pellentesque feugiat suscipit quam, quis dignissim massa. Suspendisse potenti. Donec porta tempus ipsum id rhoncus. Aliquam hendrerit leo erat, non accumsan massa venenatis vitae.</p>
                                    <i class="fa fa-quote-right right-quote"></i>
                                </div>
                                <div class="clearfix testimonial-con" id="testimonial-tab5">
                                    <h3>Adam<br /><span>Student</span></h3>
                                    <i class="fa fa-quote-left left-quote"></i>
                                    <p class="col-sm-offset-1 col-sm-10">Vivamus faucibus magna vitae purus blandit, rutrum aliquam turpis bibendum. Ut sit amet sapien dolor. Integer eget orci id leo consectetur iaculis ut vitae neque.</p>
                                    <i class="fa fa-quote-right right-quote"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="recent-news">
            <h2 class="text-center">Recent News</h2>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="news-sec-box">
                            <span class="ti-pencil"></span>
                            <h3><a href="#">Free Sound Effects for Games, Apps & UI</a></h3>
                            <p>24 Dec 2015</p>
                            <div class="news-by">
                                <a href="#"><img src="{{asset('frontend/assets/images/people-03.jpg')}}" /></a>
                                <a href="#">By Linda</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="news-sec-box">
                            <span class="ti-image"></span>
                            <h3><a href="#">Free Sound Effects for Games, Apps & UI</a></h3>
                            <p>24 Dec 2015</p>
                            <div class="news-by">
                                <a href="#"><img src="{{asset('frontend/assets/images/people-03.jpg')}}" /></a>
                                <a href="#">By Linda</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="news-sec-box">
                            <span class="ti-comments"></span>
                            <h3><a href="#">Free Sound Effects for Games, Apps & UI</a></h3>
                            <p>24 Dec 2015</p>
                            <div class="news-by">
                                <a href="#"><img src="{{asset('frontend/assets/images/people-03.jpg')}}" /></a>
                                <a href="#">By Linda</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="news-sec-box">
                            <span class="ti-control-play"></span>
                            <h3><a href="#">Free Sound Effects for Games, Apps & UI</a></h3>
                            <p>24 Dec 2015</p>
                            <div class="news-by">
                                <a href="#"><img src="{{asset('frontend/assets/images/people-03.jpg')}}" /></a>
                                <a href="#">By Linda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection