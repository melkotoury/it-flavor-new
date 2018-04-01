<?php
require_once 'shared/header.php';
?>

<!--
=============================================
    Theme Inner Banner
==============================================
-->
			<div class="theme-inner-banner">
				<div class="opacity">
					<div class="container">
						<p>Inpire Your Business, Our talent team member of business agency </p>
						<h2>Contact</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>.</li>
							<li><a href="#">Page</a></li>
							<li>.</li>
							<li>Contact</li>
						</ul>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.theme-inner-banner -->
			
		
			<!--
			=============================================
				Contact Form
			==============================================
			-->
			<div class="contact-form section-margin-bottom">
				<div class="container">
					<div class="text-center">
						<h2>Let's talk</h2>
						<p>Suspe ndisse suscipit sagittis leo sit met dimentum estibulum issim posuere cubilia Curae Suspendisse at <br> consectetur massa. Curabitur non ipsum nisinec dapibus elit. Donec nec</p>
					</div>
					<form action="http://themazine.com/html/inobiz/inc/sendemail.php" class="form-validation" autocomplete="off">
						<div class="row">
							<div class="col-md-4 col-xs-12">
								<input type="text" placeholder="Name" name="name">
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<input type="email" placeholder="Email" name="email">
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<input type="text" placeholder="Subject" name="sub">
							</div>
						</div> <!-- /.row -->
						<textarea placeholder="Message" name="message"></textarea>
						<button class="theme-button-one p-bg-color">Send us</button>
					</form>

					<!--Contact Form Validation Markup -->
					<!-- Contact alert -->
					<div class="alert-wrapper" id="alert-success">
						<div id="success">
							<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
							<div class="wrapper">
				               	<p>Your message was sent successfully.</p>
				             </div>
				        </div>
				    </div> <!-- End of .alert-wrapper -->
				    <div class="alert-wrapper" id="alert-error">
				        <div id="error">
				           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
				           	<div class="wrapper">
				               	<p>Sorry!Something Went Wrong.</p>
				            </div>
				        </div>
				    </div> <!-- End of .alert-wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.contact-form -->



			<!--
			=============================================
				Contact Address
			==============================================
			-->
			<div class="contact-address section-margin-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12 address-list float-right">
							<ul class="address">
								<li>
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									Barisal City , NY 10036, United States
								</li>
								<li>
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
									inobiz_info@gmail.com
								</li>
								<li>
									<i class="fa fa-phone" aria-hidden="true"></i>
									+8801713879773
								</li>
							</ul>
							<ul class="icon">
								<li><a href="#" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="tran3s"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#" class="tran3s"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div> <!-- /.address-list -->

						<div class="col-md-8 col-sm-6 col-xs-12">
							<!-- Google Map _______________________ -->
							<div class="map-canvas"></div>
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.contact-address -->
			


			<!-- 
			=============================================
				Bottom Banner
			============================================== 
			-->
			<div class="bottom-banner">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-sm-8 col-xs-12">
							<h3>If you have any querry for related Business… Just touch on this button</h3>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12">
							<a href="contact.php" class="theme-button-one float-right">Contact us</a>
						</div>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.bottom-banner -->



<?php
require_once 'shared/footer.php.php';
?>
