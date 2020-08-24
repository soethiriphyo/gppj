<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home - Insurance Management System</title>
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.png')}}" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/easy-responsive-tabs.css')}} " />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/flexslider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/ie7/ie7.css')}}">
    <!--<![endif]-->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top">
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 address">
                        <i class="ti-location-pin"></i> No.(123), Bet: 70 & 71, 40 & 41, Mahar Aung Myay Township, Mandalay.
                    </div>
                    <div class="col-sm-6 social">
                        <ul>
                            <li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://facebook.com"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="http://linkedin.com"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="http://pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="http://instagram.com"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="http://youtube.com"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{route('homepage')}}">
                        Myanmar <span>Insurance</span>
                    </a>
                    <p>Call Us Now <b>+95987654321</b></p>
                </div>
                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{route('homepage')}}">Home</a>
                        </li>
                        <li>
                            <a href="blog.html">Products</a>
                        </li>
                        <li>
                            <a href="blog-details.html">About Us</a>
                        </li>
                        <li>
                            <a href="contact-us.html">Contact</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="clear"></div>
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
    <div class="clear"></div>
    <footer>
        <div class="container">
            <div class="row contact-sec">
                <div class="col-md-5 col-lg-5">
                    <h2>Insurance<span>Press</span></h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>E104 Dharti -2 , Nr Silverstar Mall Chandlodia - Ahmedabad
                                <br/>Zip - 382481</p>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li><a href="#"><i class="fa fa-phone"></i> +91 123 456 7890</a></li>
                                <li><a href="#"><i class="ti-email"></i> info@bootstrapmart.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="btn-default">Contact Us</a>
                </div>
                <div class="col-md-5 col-lg-5 col-md-offset-2 col-lg-offset-2">
                    <h2>Agent<span>Detail</span></h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>E104 Dharti -2 , Nr Silverstar Mall Chandlodia - Ahmedabad
                                <br/>Zip - 382481</p>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li><a href="#"><i class="fa fa-phone"></i> +91 123 456 7890</a></li>
                                <li><a href="#"><i class="ti-email"></i> info@bootstrapmart.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="btn-default">Contact Agent</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <ul class="footer-nav">
                        <li><a href="{{route('homepage')}}">Home</a></li>
                        <li><a href="#">About Us</a></li>                        
                        <li><a href="contact-us.html">Contact us</a></li>                        
                        <li><a href="#">Products</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 col-md-offset-2 col-lg-offset-2">
                    <ul class="footer-social">
                        <li><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        Copyright &copy; 2020 <a href="#">Group-1 (A)</a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                        <a href="#">Terms & Conditions</a>
                        <a href="#">Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script src="{{asset('frontend/assets/js/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/easyResponsiveTabs.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.js')}}"></script>
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
</body>

