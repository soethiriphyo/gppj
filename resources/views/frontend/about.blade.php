@extends('frontendtemplate')

@section('content')
		
		<div id="site-content">


			<main class="main-content">
				{{-- <div class="breadcrumbs">
					<div class="container">
						<a href="index.html">Home</a>
						<span>About Us</span>
					</div>
				</div> --}}

				<div class="page" style="padding-top: 150px">	

					<div class="fullwidth-block" data-bg-color="#f1f1f1">
						<div class="container">
							<h2 class="section-title">The history</h2>
							<p>Insurance has a history that dates back to the ancient world. Over the centuries, it has developed into a modern business of protecting people from various risks. The industry has been profitable for many years and has been an important aspect of private and public long-term finance.</p> 

							<p>Insurance is a way to manage your risk. When you buy insurance,
							you purchase protection against unexpected financial losses.
							The insurance company pays you or someone you choose if
							something bad happens to you. When you buy an insurance policy, part of your responsibility includes paying
							a fee called a premium. Some premiums are paid monthly, like health insurance.
							Others may be paid once or twice a year, like auto or homeowner’s insurance.
							The cost of your premium generally depends on how much of a risk you are to the
							insurance company. </p>

							<p>Life insurance provides financial security, peace of mind and is less expensive than you may think
							It’s important to secure coverage as early as possible because life insurance gets more expensive as you get older and your health changes</p>
						</div> <!-- .container -->
					</div> <!-- .fullwidth-block -->

					<div class="fullwidth-block">
						<div class="container">
							<h2 class="section-title">Our Team</h2>

							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-3">
									<div class="team">
										<figure class="team-image"><img src="dummy/team-1.jpg" alt=""></figure>
										<h2 class="team-name">Jessica Brown</h2>
										<small class="team-title">CEO</small>
										<div class="social-links">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-pinterest"></i></a>
										</div>
									</div> <!-- .team -->
								</div> <!-- .col-md-3 -->
								<div class="col-xs-12 col-sm-6 col-md-3">
									<div class="team">
										<figure class="team-image"><img src="dummy/team-2.jpg" alt=""></figure>
										<h2 class="team-name">Jeremy Stuart</h2>
										<small class="team-title">Managing Director</small>
										<div class="social-links">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-pinterest"></i></a>
										</div>
									</div> <!-- .team -->
								</div> <!-- .col-md-3 -->
								<div class="col-xs-12 col-sm-6 col-md-3">
									<div class="team">
										<figure class="team-image"><img src="dummy/team-3.jpg" alt=""></figure>
										<h2 class="team-name">Sarah Johnson</h2>
										<small class="team-title">Public Relation</small>
										<div class="social-links">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-pinterest"></i></a>
										</div>
									</div> <!-- .team -->
								</div> <!-- .col-md-3 -->
								<div class="col-xs-12 col-sm-6 col-md-3">
									<div class="team">
										<figure class="team-image"><img src="dummy/team-4.jpg" alt=""></figure>
										<h2 class="team-name">Paul ferguson</h2>
										<small class="team-title">Consultant</small>
										<div class="social-links">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-pinterest"></i></a>
										</div>
									</div> <!-- .team -->
								</div> <!-- .col-md-3 -->
							</div> <!-- .row -->
						</div> <!-- .container -->
					</div> <!-- .fullwidth-block -->
				</div> <!-- .page -->
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

@endsection