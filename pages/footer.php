<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="col-lg-3">
						<div class="newsletter">
							<h4>Newsletter</h4>
							<p>Keep up on our always evolving product features and technology. Enter your e-mail and
								subscribe to our newsletter.</p>

							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>

							<div class="alert alert-danger d-none" id="newsletterError"></div>

							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
								<div class="input-group">
									<input class="form-control form-control-sm" placeholder="Email Address"
										name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-light" type="submit">Go!</button>
									</span>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-3">
						<h4>Latest Tweets</h4>
						<div id="tweet" class="twitter" data-plugin-tweets
							data-plugin-options="{'username': '', 'count': 2}">
							<p>Please wait...</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="contact-details">
							<h4>Contact Us</h4>
							<ul class="contact">
								<li>
									<p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 8265J5PR, South
										Horizons Business Park Cabilang Baybay, Carmona Cavite Philippines</p>
								</li>
								<li>
									<p><i class="fas fa-phone"></i> <strong>Phone:</strong> +63-9988852628</p>
								</li>
								<li>
									<p><i class="far fa-envelope"></i> <strong>Email:</strong> <a
											href="mailto:bob.quinn@qdf-phils.com">bob.quinn@qdf-phils.com</a></p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2">
						<h4>Follow Us</h4>
						<ul class="social-icons">
							<li class="social-icons-facebook"><a href="https://www.facebook.com/dgfopc" target="_blank"
									title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
									title="Twitter"><i class="fab fa-twitter"></i></a></li>
							<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
									title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-1">
							<a href="index.html" class="logo">
								<img alt="Porto Website Template" class="img-fluid" src="img/datagenLogo.png">
							</a>
						</div>
						<div class="col-lg-7">
							<p>© Copyright 2022 All Rights Reserved.</p>
						</div>
						<div class="col-lg-4">
							<nav id="sub-menu">
								<ul>
									<li><a href="page-faq.html">Privacy</a></li>
									<li><a href="sitemap.html">Sitemap</a></li>
									<li><a href="contact-us.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- Vendor -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
	<script src="vendor/popper/umd/popper.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/common/common.min.js"></script>
	<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
	<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
	<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
	<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
	<script src="vendor/isotope/jquery.isotope.min.js"></script>
	<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="vendor/vide/vide.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Current Page Vendor and Views -->
	<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

	<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

</body>

</html>