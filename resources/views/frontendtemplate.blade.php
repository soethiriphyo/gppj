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

<<<<<<< HEAD
	</head>


	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="top-header">
					<div class="container">
						<a href="index.html" id="branding">
							<img src="{{asset('frontend/images/logo.png')}}" alt="Company Name" class="logo">
							<div class="logo-text">
								<h1 class="site-title">Company Name</h1>
								<small class="description">Taline goes here</small>
							</div>
						</a> 
					
						<div class="right-section pull-right">
							<a href="#" class="phone"><img src="{{asset('frontend/images/icon-phone.png')}}" class="icon">+1 823 424 9134</a>
					
							<form action="#" class="search-form">
								<input type="text" placeholder="Search...">
								<button type="submit"><img src="{{asset('frontend/images/icon-search.png')}}" alt=""></button>
							</form>
						</div>
					</div> <!-- .container -->
				</div> <!-- .top-header -->

				
				<div class="bottom-header">
					<div class="container">
						<div class="main-navigation">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item"><a href="about.html">About us</a></li>
								<li class="menu-item"><a href="insurance.html">Insurance plans</a></li>
								<li class="menu-item"><a href="resource.html">Resources</a></li>
								<li class="menu-item"><a href="contact.html">Contact</a></li>
							</ul> <!-- .menu -->
						</div> <!-- .main-navigation -->
						
						<div class="social-links">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div>
						
						<div class="mobile-navigation"></div>
					</div>
				</div>
				
			</header> <!-- .site-header -->

			<div class="hero hero-slider">
				<ul class="slides">
					<li data-bg-image="{{asset('frontend/dummy/slide-1.jpg')}}">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Get your <strong>Life Insurance</strong></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quos cumque odio soluta harum error sequi laudantium, est nam perspiciatis eveniet maxime, esse possimus architecto sunt natus reprehenderit debitis fugit.</p>
								<a href="#" class="button">Get a quote</a>
							</div>
						</div>
					</li>
					<li data-bg-image="{{asset('frontend/dummy/slide-2.jpg')}}">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Get your <strong>Life Insurance</strong></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quos cumque odio soluta harum error sequi laudantium, est nam perspiciatis eveniet maxime, esse possimus architecto sunt natus reprehenderit debitis fugit.</p>
								<a href="#" class="button">Get a quote</a>
							</div>
						</div>
					</li>
					<li data-bg-image="{{asset('frontend/dummy/slide-3.jpg')}}">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Get your <strong>Life Insurance</strong></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quos cumque odio soluta harum error sequi laudantium, est nam perspiciatis eveniet maxime, esse possimus architecto sunt natus reprehenderit debitis fugit.</p>
								<a href="#" class="button">Get a quote</a>
							</div>
						</div>
					</li>
				</ul>
			</div> <!-- .hero-slider -->

			<main class="main-content">
				<div class="fullwidth-block greet-section">
					<div class="container">
						<h2 class="section-title">Welcome to our website</h2>
						<small class="section-subtitle">Etiam suscipit leo tincidunt risus dignissim quisque semper mollis</small>

						<div class="row">
							<div class="col-md-3">
								<div class="feature">
									<i class="icon-phone-24"></i>
									<h3 class="feature-title">24 hours Service</h3>
									<p>Lorem ipsum dolor amet consectetur adipiscing elit do eiusmod tempor incididunt labore dolore magna aliqua.</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="feature">
									<i class="icon-hotel"></i>
									<h3 class="feature-title">Hospitality</h3>
									<p>Lorem ipsum dolor amet consectetur adipiscing elit do eiusmod tempor incididunt labore dolore magna aliqua.</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="feature">
									<i class="icon-luggage"></i>
									<h3 class="feature-title">Praesent pellentesque </h3>
									<p>Lorem ipsum dolor amet consectetur adipiscing elit do eiusmod tempor incididunt labore dolore magna aliqua.</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="feature">
									<i class="icon-credit-card-hand"></i>
									<h3 class="feature-title">Consectetur interdum</h3>
									<p>Lorem ipsum dolor amet consectetur adipiscing elit do eiusmod tempor incididunt labore dolore magna aliqua.</p>
								</div>
							</div>
						</div> <!-- .row -->

						<div class="text-center">
							<p>Sollicitudin sit tortor pellentesque. <a href="#">Read more</a></p>
						</div>
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block" data-bg-color="#f1f1f1">
					<div class="container">
						<h2 class="section-title">Our insurance offer</h2>
						<small class="section-subtitle">Phasellus vel felis in nulla mollis posuere eget rutrum eros</small>

						<div class="row">
							<div class="col-md-3">
								<div class="offer caption-top">
									<img src="{{asset('frontend/dummy/offer-tall.jpg')}}" alt="offer 1">
									<div class="caption">
										<h3 class="offer-title">Massa augue</h3>
										<small>Conubia nostra per inceptos</small>
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col-md-4">
										<div class="offer caption-bottom">
											<img src="{{asset('frontend/dummy/offer-1.jpg')}}" alt="offer 2">
											<div class="caption">
												<h3 class="offer-title">Curabitur vehicula</h3>
												<small>Conubia nostra per inceptos</small>	
											</div>
										</div>
									</div>
									<div class="col-md-8">
										<div class="offer caption-bottom">
									<img src="{{asset('frontend/dummy/offer-wide.jpg')}}" alt="offer 3">
									<div class="caption">
										<h3 class="offer-title">Vivamus rhoncus porttitor</h3>
										<small>Conubia nostra per inceptos</small>
									</div>
								</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="offer caption-bottom">
											<img src="{{asset('frontend/dummy/offer-2.jpg')}}" alt="offer 2">
											<div class="caption">
												<h3 class="offer-title">Curabitur vehicula</h3>
												<small>Conubia nostra per inceptos</small>	
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="offer caption-bottom">
											<img src="{{asset('frontend/dummy/offer-3.jpg')}}" alt="offer 2">
											<div class="caption">
												<h3 class="offer-title">Curabitur vehicula</h3>
												<small>Conubia nostra per inceptos</small>	
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="offer caption-bottom">
											<img src="{{asset('frontend/dummy/offer-4.jpg')}}" alt="offer 2">
											<div class="caption">
												<h3 class="offer-title">Curabitur vehicula</h3>
												<small>Conubia nostra per inceptos</small>	
											</div>
										</div>
									</div>
								</div> <!-- .row -->
							</div> <!-- .col-md-8 -->
						</div> <!-- .row -->

					</div> <!-- .container -->
				</div> <!-- .offer-section -->

				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Latest news</h2>
						<div class="row news-list">
							<div class="col-md-4">
								<div class="news">
									<figure><img src="{{asset('frontend/dummy/featured-image-1.jpg')}}" alt=""></figure>
									<div class="date"><img src="{{asset('frontend/images/icon-calendar.png')}}" alt="">03/09/2014</div>
									<h2 class="entry-title"><a href="#">Donec laoreet non nec aliquam pellentesque interdum</a></h2>
								</div>
							</div>
							<div class="col-md-4">
								<div class="news">
									<figure><img src="{{asset('frontend/dummy/featured-image-2.jpg')}}" alt=""></figure>
									<div class="date"><img src="{{asset('frontend/images/icon-calendar.png')}}" alt="">03/09/2014</div>
									<h2 class="entry-title"><a href="#">Donec laoreet non nec aliquam pellentesque interdum</a></h2>
								</div>
							</div>
							<div class="col-md-4">
								<div class="news">
									<figure><img src="{{asset('frontend/dummy/featured-image-3.jpg')}}" alt=""></figure>
									<div class="date"><img src="{{asset('frontend/images/icon-calendar.png')}}" alt="">03/09/2014</div>
									<h2 class="entry-title"><a href="#">Donec laoreet non nec aliquam pellentesque interdum</a></h2>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .latest-news-section -->

				<div class="fullwidth-block" data-bg-color="#0f75bd">
					<div class="container">
						<div class="testimonial-slider">
							<ul class="slides">
								<li>
									<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quod explicabo optio quia ex odit, sequi harum voluptatibus autem. Nam autem corporis deleniti fugiat omnis itaque, quis laudantium dolor facere.<cite>John Smith</cite></blockquote>
								</li>
								<li>
									<blockquote>At doloremque, itaque molestias neque nesciunt placeat aspernatur veniam fugit enim, dolor, repudiandae a. Laborum optio dolorum qui maxime doloribus eligendi in enim minima quo? Quis tenetur eos, libero exercitationem.<cite>John Smith</cite></blockquote>
								</li>
								<li>
									<blockquote>Ipsam nesciunt velit voluptatem? Voluptas amet, porro eaque asperiores magni rerum vitae nulla inventore, numquam facilis doloribus placeat iure suscipit adipisci dolores modi saepe deserunt nisi. Nam, illum aperiam velit.<cite>John Smith</cite></blockquote>
								</li>
							</ul>
						</div>
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Our partners</h2>

						<div class="partners">
							<a href="#"><img src="{{asset('frontend/dummy/money-logo.png')}}" alt=""></a>
							<a href="#"><img src="{{asset('frontend/dummy/nyt-logo.png')}}" alt=""></a>
							<a href="#"><img src="{{asset('frontend/dummy/forbes-logo.png')}}" alt=""></a>
							<a href="#"><img src="{{asset('frontend/dummy/wsj-logo.png')}}" alt=""></a>
							<a href="#"><img src="{{asset('frontend/dummy/bbs-logo.png')}}" alt=""></a>
						</div> <!-- .partners -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block">
					<div class="map"></div>
				</div>
			</main>

			<div class="site-footer">
				<div class="widget-area">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Contact</h3>
									<address> Company Name INC. 523 Burt Street, Omaha
									</address>
									<a href="#">Phone: +1 823 424 9134</a>
									<a href="mailto:info@company.com">info@company.com</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Company</h3>
									<ul class="no-bullet">
										<li><a href="#">About us</a></li>
										<li><a href="#">Infoline</a></li>
										<li><a href="#">Team</a></li>
										<li><a href="#">Join us</a></li>
										<li><a href="#">Cooperation</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Products</h3>
									<ul class="no-bullet">
										<li><a href="#">Life insurance</a></li>
										<li><a href="#">Home insurance</a></li>
										<li><a href="#">Car insurance</a></li>
										<li><a href="#">Business insurance</a></li>
										<li><a href="#">Investment insurance</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Our Solutions</h3>
									<ul class="no-bullet">
										<li><a href="#">Presentation</a></li>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">Examples</a></li>
										<li><a href="#">Our experts</a></li>
										<li><a href="#">Resources</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Press Room</h3>
									<ul class="no-bullet">
									<li><a href="#">Advertisement</a></li>
									<li><a href="#">Interviews</a></li>
									<li><a href="#">Hot news</a></li>
									<li><a href="#">Photos</a></li>
									<li><a href="#">Marketing</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Resources</h3>
									<ul class="no-bullet">
										<li><a href="#">Sed imperdiet magna</a></li>
										<li><a href="#">Pellentesque molestie</a></li>
										<li><a href="#">Nulla luctus cursus</a></li>
										<li><a href="#">Ligula vel lacinia</a></li>
										<li><a href="#">Mauris scelerisque</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="bottom-footer">
					<div class="container">
						<nav class="footer-navigation">
							<a href="#">Home</a>
							<a href="#">About us</a>
							<a href="#">Insurance plans</a>
							<a href="#">Resources</a>
							<a href="#">Contact</a>
						</nav>

						<div class="colophon">Copyright 2014 Company name. Designed by Themezy. All rights reserved.</div>
					</div>
				</div>
			</div>
		</div>

		<script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="{{asset('frontend/js/plugins.js')}}"></script>
		<script src="{{asset('frontend/js/app.js')}}"></script>
		
	</body>

</html>
=======
</html>
>>>>>>> a6b42f1b382c5b988b7dc8f46ffc59c637a878af
