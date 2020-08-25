<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home - Insurance Management System</title>
    <link rel="shortcut icon" href="{{asset('frontend/assets/image/insurancelogo.png')}}" />
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/bootstrap/dist/css/bootstrap.min.css')}}">
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
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/style.css')}}">

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
                    
                </div>
                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{route('homepage')}}" >Home</a>
                        </li>
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Personal Insurance
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" >
                                <li><a href="{{route('lifepage')}}">Life Insurance</a></li>

                                <li><a href="{{route('healthpage')}}">Health Insurance</a></li>
                                <li><a href="{{route('firepage')}}">Fire Insurance</a></li>

                                <li><a href="{{route('carpage')}}">Car Insurance</a></li>

                                <li><a href="{{route('bikepage')}}">Bike Insurance</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Commercial Insurance
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" >
                                <li><a href="{{route('commercialpage')}}">Commercial Property Insurance</a></li>
                                <li><a href="{{route('vehiclepage')}}">Vehicle Insurance</a></li>
                                <li><a href="{{route('firecpage')}}">Fire Insurance</a></li>
                                <li><a href="{{route('crimepage')}}">Crime Insurance</a></li>
                                <li><a href="{{route('buildingpage')}}">Building Risks Insurance</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('aboutpage')}}" class="header-bar">About Us</a>
                        </li>
                        <li>
                            <a href="{{route('contactpage')}}" class="header-bar">Contact</a>
                        </li>

                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>              
                          <a class="dropdown-item" href="{{route('profilepage')}}">Profile

                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
                  @endguest

                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="clear"></div>

    @yield('content')

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

