@extends('frontendtemplate')

@section('content')

<div id="page-content">
        <section class="flexslider">
            <ul class="slides">
                <li>
                    <img src="{{asset('frontend/assets/images/slider-img.jpg')}}" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Healthcare</b>
                            <h3>Health Insurance</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris hendrerit fringilla ligula, nec congue leo pharetra in.</p>
                            <a href="#" class="ti-arrow-right"></a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{asset('frontend/assets/images/slider-img1.jpg')}}" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Lifecare</b>
                            <h3>Life Insurance</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris hendrerit fringilla ligula, nec congue leo pharetra in.</p>
                            <a href="#" class="ti-arrow-right"></a>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{asset('frontend/assets/images/slider-img2.jpg')}}" />
                    <div class="slide-info">
                        <div class="slide-con">
                            <b>Healthcare</b>
                            <h3>Travel Insurance</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris hendrerit fringilla ligula, nec congue leo pharetra in.</p>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent orci nisi, porta sed diam id, venenatis dignissim urna. Duis sit amet eros a sem viverra mollis nec eu sem. Quisque rutporta sed diam id, venenatis dignissim urna. Duis sit amet eros a sem viver uisque rurum euismod fermentum.</p>
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
                            <li><i class="ti-home"></i> House Insurance</li>
                            <li><i class="fa fa-plane"></i> Travel Insurance</li>
                            <li><i class="ti-heart-broken"></i> Life Insurance</li>
                            <li><i class="ti-car"></i> Car Insurance</li>
                        </ul>
                        <div class="col-sm-5 col-md-5 col-lg-5 resp-tabs-container hor_1">
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="ti-home"></i></span>
                                        House Insurance
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer</p>
                                    <p>et placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. </p>
                                    <p class="tel">
                                        <i class="fa fa-phone"></i> +123 456 7890 <span>Toll Free</span>
                                    </p>
                                    <p>
                                        <a class="btn-default" href="product-houseinsurance.html">Get Free Quote</a>
                                    </p>
                                </div>
                                <img src="{{asset('frontend/assets/images/product-img.jpg')}}" alt="" class="img-responsive" />
                            </div>
                            <div>
                                <div class="prod-tab-content">
                                    <h4>
                                        <span class="prod-cion"><i class="fa fa-plane"></i></span>
                                        Travel Insurance
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer</p>
                                    <p>et placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. </p>
                                    <p class="tel">
                                        <i class="fa fa-phone"></i> +123 456 7890 <span>Toll Free</span>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer</p>
                                    <p>et placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. </p>
                                    <p class="tel">
                                        <i class="fa fa-phone"></i> +123 456 7890 <span>Toll Free</span>
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
                                        <span class="prod-cion"><i class="ti-car"></i></span>
                                        Car Insurance
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer</p>
                                    <p>et placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. </p>
                                    <p class="tel">
                                        <i class="fa fa-phone"></i> +123 456 7890 <span>Toll Free</span>
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
        
    </div>

@endsection