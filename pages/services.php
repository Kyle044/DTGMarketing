<?php include('headerdito.php') ?>
	<body>
		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.html">
											<img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row pt-3">
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="nav-item d-none d-sm-block">
												<a class="nav-link" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
											</li>
											<li class="nav-item d-none d-sm-block">
												<a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
											</li>
											<li class="nav-item">
												<span class="ws-nowrap"><i class="fas fa-phone"></i> (123) 456-789</span>
											</li>
										</ul>
									</nav>
									<div class="header-search d-none d-md-block">
										<form id="searchForm" action="page-search-results.html" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<span class="input-group-append">
													<button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
												</span>
											</div>
										</form>
									</div>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="index.html">
															Home
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="index.html">
																	Landing Page
																</a>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="index-classic.html">Classic</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="index-classic.html" data-thumb-preview="img/previews/preview-classic.jpg">Classic - Original</a></li>
																	<li><a class="dropdown-item" href="index-classic-color.html" data-thumb-preview="img/previews/preview-classic-color.jpg">Classic - Color</a></li>
																	<li><a class="dropdown-item" href="index-classic-light.html" data-thumb-preview="img/previews/preview-classic-light.jpg">Classic - Light</a></li>
																	<li><a class="dropdown-item" href="index-classic-video.html" data-thumb-preview="img/previews/preview-classic-video.jpg">Classic - Video</a></li>
																	<li><a class="dropdown-item" href="index-classic-video-light.html" data-thumb-preview="img/previews/preview-classic-video-light.jpg">Classic - Video - Light</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="index-corporate.html">Corporate <span class="tip tip-dark">hot</span></a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="index-corporate.html" data-thumb-preview="img/previews/preview-corporate.jpg">Corporate - Version 1</a></li>
																	<li><a class="dropdown-item" href="index-corporate-2.html" data-thumb-preview="img/previews/preview-corporate-version2.jpg">Corporate - Version 2</a></li>
																	<li><a class="dropdown-item" href="index-corporate-3.html" data-thumb-preview="img/previews/preview-corporate-version3.jpg">Corporate - Version 3</a></li>
																	<li><a class="dropdown-item" href="index-corporate-4.html" data-thumb-preview="img/previews/preview-corporate-version4.jpg">Corporate - Version 4</a></li>
																	<li><a class="dropdown-item" href="index-corporate-5.html" data-thumb-preview="img/previews/preview-corporate-version5.jpg">Corporate - Version 5</a></li>
																	<li><a class="dropdown-item" href="index-corporate-6.html" data-thumb-preview="img/previews/preview-corporate-version6.jpg">Corporate - Version 6</a></li>
																	<li><a class="dropdown-item" href="index-corporate-7.html" data-thumb-preview="img/previews/preview-corporate-version7.jpg">Corporate - Version 7</a></li>
																	<li><a class="dropdown-item" href="index-corporate-8.html" data-thumb-preview="img/previews/preview-corporate-version8.jpg">Corporate - Version 8</a></li>
																	<li><a class="dropdown-item" href="index-corporate-hosting.html" data-thumb-preview="img/previews/preview-corporate-hosting.jpg">Corporate - Hosting</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">One Page</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="index-one-page.html" data-thumb-preview="img/previews/preview-one-page.jpg">One Page Original</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-item dropdown-toggle" href="#">
															Elements
														</a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<div class="row">
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 1</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="elements-accordions.html">Accordions</a></li>
																				<li><a class="dropdown-item" href="elements-toggles.html">Toggles</a></li>
																				<li><a class="dropdown-item" href="elements-tabs.html">Tabs</a></li>
																				<li><a class="dropdown-item" href="elements-icons.html">Icons</a></li>
																				<li><a class="dropdown-item" href="elements-icon-boxes.html">Icon Boxes</a></li>
																				<li><a class="dropdown-item" href="elements-carousels.html">Carousels</a></li>
																				<li><a class="dropdown-item" href="elements-modals.html">Modals</a></li>
																				<li><a class="dropdown-item" href="elements-lightboxes.html">Lightboxes</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 2</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="elements-buttons.html">Buttons</a></li>
																				<li><a class="dropdown-item" href="elements-badges.html">Badges</a></li>
																				<li><a class="dropdown-item" href="elements-lists.html">Lists</a></li>
																				<li><a class="dropdown-item" href="elements-image-gallery.html">Image Gallery</a></li>
																				<li><a class="dropdown-item" href="elements-image-frames.html">Image Frames</a></li>
																				<li><a class="dropdown-item" href="elements-testimonials.html">Testimonials</a></li>
																				<li><a class="dropdown-item" href="elements-blockquotes.html">Blockquotes</a></li>
																				<li><a class="dropdown-item" href="elements-word-rotator.html">Word Rotator</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 3</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="elements-call-to-action.html">Call to Action</a></li>
																				<li><a class="dropdown-item" href="elements-pricing-tables.html">Pricing Tables</a></li>
																				<li><a class="dropdown-item" href="elements-tables.html">Tables</a></li>
																				<li><a class="dropdown-item" href="elements-progressbars.html">Progress Bars</a></li>
																				<li><a class="dropdown-item" href="elements-counters.html">Counters</a></li>
																				<li><a class="dropdown-item" href="elements-sections-parallax.html">Sections &amp; Parallax</a></li>
																				<li><a class="dropdown-item" href="elements-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
																				<li><a class="dropdown-item" href="elements-sticky-elements.html">Sticky Elements</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 4</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="elements-headings.html">Headings</a></li>
																				<li><a class="dropdown-item" href="elements-dividers.html">Dividers</a></li>
																				<li><a class="dropdown-item" href="elements-animations.html">Animations</a></li>
																				<li><a class="dropdown-item" href="elements-medias.html">Medias</a></li>
																				<li><a class="dropdown-item" href="elements-maps.html">Maps</a></li>
																				<li><a class="dropdown-item" href="elements-arrows.html">Arrows</a></li>
																				<li><a class="dropdown-item" href="elements-alerts.html">Alerts</a></li>
																				<li><a class="dropdown-item" href="elements-posts.html">Posts</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Features
														</a>
													
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Headers</a>
																<ul class="dropdown-menu">
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Default</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="index-classic.html">Default</a></li>
																			<li><a class="dropdown-item" href="index-header-language-dropdown.html">Default + Language Dropdown</a></li>
																			<li><a class="dropdown-item" href="index-header-big-logo.html">Default + Big Logo</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Flat</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="index-header-flat.html">Flat</a></li>
																			<li><a class="dropdown-item" href="index-header-flat-top-bar.html">Flat + Top Bar</a></li>
																			<li><a class="dropdown-item" href="index-header-flat-colored-top-bar.html">Flat + Colored Top Bar</a></li>
																			<li><a class="dropdown-item" href="index-header-flat-top-bar-search.html">Flat + Top Bar with Search</a></li>
																		</ul>
																	</li>
																	<li><a class="dropdown-item" href="index-header-center.html">Center</a></li>
																	<li><a class="dropdown-item" href="index-header-below-slider.html">Below Slider</a></li>
																	<li><a class="dropdown-item" href="index-header-full-video.html">Full Video</a></li>
																	<li><a class="dropdown-item" href="index-header-narrow.html">Narrow</a></li>
																	<li><a class="dropdown-item" href="index-header-always-sticky.html">Always Sticky</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Transparent</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="index-header-transparent.html">Transparent</a></li>
																			<li><a class="dropdown-item" href="index-header-transparent-bottom-border.html">Transparent - Bottom Border</a></li>
																			<li><a class="dropdown-item" href="index-header-semi-transparent.html">Semi Transparent</a></li>
																			<li><a class="dropdown-item" href="index-header-semi-transparent-light.html">Semi Transparent - Light</a></li>
																		</ul>
																	</li>
																	<li><a class="dropdown-item" href="index-header-full-width.html">Full-Width</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Navbar</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="index-header-navbar.html">Navbar</a></li>
																			<li><a class="dropdown-item" href="index-header-navbar-extra-info.html">Navbar + Extra Info</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Side Header</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="index-header-side-header-left.html">Side Header Left</a></li>
																			<li><a class="dropdown-item" href="index-header-side-header-right.html">Side Header Right</a></li>
																			<li><a class="dropdown-item" href="index-header-side-header-semi-transparent.html">Side Header Semi Transparent</a></li>
																		</ul>
																	</li>
																	<li><a class="dropdown-item" href="index-header-signin.html">Sign In / Sign Up</a></li>
																	<li><a class="dropdown-item" href="index-header-logged.html">Logged</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Navigations</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="index-classic.html">Default</a></li>
																	<li><a class="dropdown-item" href="index-navigation-stripe.html">Stripe</a></li>
																	<li><a class="dropdown-item" href="index-navigation-top-line.html">Top Line</a></li>
																	<li><a class="dropdown-item" href="index-navigation-dark-dropdown.html">Dark Dropdown</a></li>
																	<li><a class="dropdown-item" href="index-navigation-colors.html">Colors</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Footers</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="index-classic.html#footer">Default</a></li>
																	<li><a class="dropdown-item" href="index-footer-advanced.html#footer">Advanced</a></li>
																	<li><a class="dropdown-item" href="index-footer-simple.html#footer">Simple</a></li>
																	<li><a class="dropdown-item" href="index-footer-light.html#footer">Light</a></li>
																	<li><a class="dropdown-item" href="index-footer-light-narrow.html#footer">Light Narrow</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Colors</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="index-footer-color-primary.html#footer">Primary Color</a></li>
																			<li><a class="dropdown-item" href="index-footer-color-secondary.html#footer">Secondary Color</a></li>
																			<li><a class="dropdown-item" href="index-footer-color-tertiary.html#footer">Tertiary Color</a></li>
																			<li><a class="dropdown-item" href="index-footer-color-quaternary.html#footer">Quaternary Color</a></li>
																		</ul>
																	</li>
																	<li><a class="dropdown-item" href="index-footer-latest-work.html#footer">Latest Work</a></li>
																	<li><a class="dropdown-item" href="index-footer-contact-form.html#footer">Contact Form</a></li>
																	<li><a class="dropdown-item" href="index-footer-reveal.html#footer-reveal-anchor">Reveal</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Page Headers</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="index-page-header-default.html">Default</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Colors</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="index-page-header-color-primary.html">Primary Color</a></li>
																			<li><a class="dropdown-item" href="index-page-header-color-secondary.html">Secondary Color</a></li>
																			<li><a class="dropdown-item" href="index-page-header-color-tertiary.html">Tertiary Color</a></li>
																			<li><a class="dropdown-item" href="index-page-header-color-quaternary.html">Quaternary Color</a></li>
																		</ul>
																	</li>
																	<li><a class="dropdown-item" href="index-page-header-light.html">Light</a></li>
																	<li><a class="dropdown-item" href="index-page-header-light-reverse.html">Light - Reverse</a></li>
																	<li><a class="dropdown-item" href="index-page-header-custom-background.html">Custom Background</a></li>
																	<li><a class="dropdown-item" href="index-page-header-parallax.html">Parallax</a></li>
																	<li><a class="dropdown-item" href="index-page-header-center.html">Center</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Admin Extension <span class="tip tip-dark">hot</span> <em class="not-included">(Not Included)</em></a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="feature-admin-forms-basic.html">Forms Basic</a></li>
																	<li><a class="dropdown-item" href="feature-admin-forms-advanced.html">Forms Advanced</a></li>
																	<li><a class="dropdown-item" href="feature-admin-forms-wizard.html">Forms Wizard</a></li>
																	<li><a class="dropdown-item" href="feature-admin-forms-code-editor.html">Code Editor</a></li>
																	<li><a class="dropdown-item" href="feature-admin-tables-advanced.html">Tables Advanced</a></li>
																	<li><a class="dropdown-item" href="feature-admin-tables-responsive.html">Tables Responsive</a></li>
																	<li><a class="dropdown-item" href="feature-admin-tables-editable.html">Tables Editable</a></li>
																	<li><a class="dropdown-item" href="feature-admin-tables-ajax.html">Tables Ajax</a></li>
																	<li><a class="dropdown-item" href="feature-admin-charts.html">Charts</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Sliders</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="index-classic.html">Revolution Slider</a></li>
																	<li><a class="dropdown-item" href="index-slider-nivo.html">Nivo Slider</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Layout Options</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="feature-layout-boxed.html">Boxed</a></li>
																	<li><a class="dropdown-item" href="feature-layout-dark.html">Dark</a></li>
																	<li><a class="dropdown-item" href="feature-layout-rtl.html">RTL</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Extra</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="feature-typography.html">Typography</a></li>
																	<li><a class="dropdown-item" href="feature-grid-system.html">Grid System</a></li>
																	<li><a class="dropdown-item" href="feature-page-loading.html">Page Loading</a></li>
																	<li><a class="dropdown-item" href="feature-lazy-load.html">Lazy Load</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle active" href="#">
															Pages
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">About Us</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="about-us.html">About Us</a></li>
																	<li><a class="dropdown-item" href="about-us-basic.html">About Us - Basic</a></li>
																	<li><a class="dropdown-item" href="about-me.html">About Me</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Shop</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="shop-full-width.html">Shop - Full Width</a></li>
																	<li><a class="dropdown-item" href="shop-sidebar.html">Shop - Sidebar</a></li>
																	<li><a class="dropdown-item" href="shop-product-full-width.html">Shop - Product Full Width</a></li>
																	<li><a class="dropdown-item" href="shop-product-sidebar.html">Shop - Product Sidebar</a></li>
																	<li><a class="dropdown-item" href="shop-cart.html">Shop - Cart</a></li>
																	<li><a class="dropdown-item" href="shop-login.html">Shop - Login</a></li>
																	<li><a class="dropdown-item" href="shop-checkout.html">Shop - Checkout</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Blog</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="blog-full-width.html">Blog Full Width</a></li>
																	<li><a class="dropdown-item" href="blog-large-image.html">Blog Large Image</a></li>
																	<li><a class="dropdown-item" href="blog-medium-image.html">Blog Medium Image</a></li>
																	<li><a class="dropdown-item" href="blog-timeline.html">Blog Timeline</a></li>
																	<li><a class="dropdown-item" href="blog-post.html">Single Post</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Layouts</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="page-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="page-left-sidebar.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="page-right-sidebar.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="page-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																	<li><a class="dropdown-item" href="page-sticky-sidebar.html">Sticky Sidebar</a></li>
																	<li><a class="dropdown-item" href="page-secondary-navbar.html">Secondary Navbar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Extra</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="page-404.html">404 Error</a></li>
																	<li><a class="dropdown-item" href="page-coming-soon.html">Coming Soon</a></li>
																	<li><a class="dropdown-item" href="page-maintenance-mode.html">Maintenance Mode</a></li>
																	<li><a class="dropdown-item" href="sitemap.html">Sitemap</a></li>
																</ul>
															</li>
															<li><a class="dropdown-item" href="page-custom-header.html">Custom Header</a></li>
															<li><a class="dropdown-item" href="page-team.html">Team</a></li>
															<li><a class="dropdown-item" href="page-services.html">Services</a></li>
															<li><a class="dropdown-item" href="page-careers.html">Careers</a></li>
															<li><a class="dropdown-item" href="page-our-office.html">Our Office</a></li>
															<li><a class="dropdown-item" href="page-faq.html">FAQ</a></li>
															<li><a class="dropdown-item" href="page-login.html">Login / Register</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Portfolio
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Single Project</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="portfolio-single-small-slider.html">Small Slider</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-wide-slider.html">Wide Slider</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-full-width-slider.html">Full Width Slider</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-gallery.html">Gallery</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-carousel.html">Carousel</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-medias.html">Medias</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-full-width-video.html">Full Width Video</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-masonry-images.html">Masonry Images</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-left-sidebar.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-right-sidebar.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-sticky-sidebar.html">Sticky Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-extended.html">Extended</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Grid Layouts</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="portfolio-grid-1-column.html">1 Column</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-2-columns.html">2 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-3-columns.html">3 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-4-columns.html">4 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-5-columns.html">5 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-6-columns.html">6 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-no-margins.html">No Margins</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-full-width-no-margins.html">Full Width No Margins</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-1-column-title-and-description.html">Title and Description</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Masonry Layouts</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="portfolio-masonry-2-columns.html">2 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-3-columns.html">3 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-4-columns.html">4 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-5-columns.html">5 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-6-columns.html">6 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-no-margins.html">No Margins</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-full-width.html">Full Width</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Sidebar Layouts</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="portfolio-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-sidebar-right.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-sidebar-left-and-right.html">Left and Right Sidebars</a></li>
																	<li><a class="dropdown-item" href="portfolio-sidebar-sticky.html">Sticky Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Ajax</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="portfolio-ajax-page.html">Ajax on Page</a></li>
																	<li><a class="dropdown-item" href="portfolio-ajax-modal.html">Ajax on Modal</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Extra</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="portfolio-extra-timeline.html">Timeline</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-lightbox.html">Lightbox</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-load-more.html">Load More</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-infinite-scroll.html">Infinite Scroll</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-pagination.html">Pagination</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-combination-filters.html">Combination Filters</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Contact Us
														</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="contact-us.html">Contact Us - Basic</a></li>
															<li><a class="dropdown-item" href="contact-us-advanced.php">Contact Us - Advanced</a></li>
														</ul>
													</li>
												</ul>
											</nav>
										</div>
										<ul class="header-social-icons social-icons d-none d-sm-block">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Pages</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>Services</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<h2>Our <strong>Services</strong></h2>

					<div class="row align-items-center">
						<div class="col-lg-10">
							<p class="lead">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non pulvinar. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh metus.
							</p>
						</div>
						<div class="col-lg-2">
							<a href="#" class="btn btn-lg btn-primary">Contact Us!</a>
						</div>
					</div>

					<hr>

					<div class="featured-boxes">
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="featured-box featured-box-primary featured-box-effect-1 mt-0 mt-lg-5">
									<div class="box-content">
										<i class="icon-featured fas fa-user"></i>
										<h4 class="text-uppercase">Loved by Customers</h4>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
										<p><a href="/" class="lnk-primary learn-more">Learn More <i class="fas fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="featured-box featured-box-secondary featured-box-effect-1 mt-0 mt-lg-5">
									<div class="box-content">
										<i class="icon-featured fas fa-book"></i>
										<h4 class="text-uppercase">Well Documented</h4>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
										<p><a href="/" class="lnk-secondary learn-more">Learn more <i class="fas fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="featured-box featured-box-tertiary featured-box-effect-1 mt-0 mt-lg-5">
									<div class="box-content">
										<i class="icon-featured fas fa-trophy"></i>
										<h4 class="text-uppercase">Winner</h4>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
										<p><a href="/" class="lnk-tertiary learn-more">Learn more <i class="fas fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="featured-box featured-box-quaternary featured-box-effect-1 mt-0 mt-lg-5">
									<div class="box-content">
										<i class="icon-featured fas fa-cogs"></i>
										<h4 class="text-uppercase">Customizable</h4>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus. </p>
										<p><a href="/" class="lnk-quaternary learn-more">Learn more <i class="fas fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr>

					<div class="row pt-4">
						<div class="col-lg-8">
							<h2>Our <strong>Features</strong></h2>
							<div class="row">
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fas fa-users"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-0">Customer Support</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fas fa-file"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-0">HTML5 / CSS3 / JS</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet,.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fab fa-google-plus-g"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-0">500+ Google Fonts</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fas fa-adjust"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-0">Colors</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fas fa-film"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-0">Sliders</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fas fa-user"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-0">Icons</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fas fa-bars"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-0">Buttons</h4>
											<p class="mb-4">Lorem ipsum dolor sit, consectetur.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fas fa-desktop"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-0">Lightbox</h4>
											<p class="mb-4">Lorem sit amet, consectetur.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<h2>and more...</h2>

							<div class="accordion" id="accordion">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<i class="fas fa-dollar-sign"></i>
												Pricing Tables
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="collapse show">
										<div class="card-body">
											Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor.
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<i class="fas fa-comment"></i>
												Contact Forms
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="collapse">
										<div class="card-body">
											Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<i class="fas fa-laptop"></i>
												Portfolio Pages
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="collapse">
										<div class="card-body">
											Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="tall">

					<div class="row justify-content-around mb-5">
						<div class="col-sm-7">
							<h2>Premium <strong>Features</strong></h2>
							<p class="lead">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
							</p>
							<p class="mt-4">
								 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent scelerisque volutpat turpis, eu hendrerit enim scel.
							</p>
						</div>
						<div class="col-sm-4 mt-4">
							<img class="img-fluid mt-5" src="img/device.png" alt="">
						</div>
					</div>

				</div>

			</div>

			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						<div class="col-lg-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
			
								<div class="alert alert-success d-none" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger d-none" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-append">
											<button class="btn btn-light" type="submit">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-3">
							<h4>Latest Tweets</h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 2}">
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
									<li><p><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
									<li><p><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2">
							<h4>Follow Us</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-lg-1">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" class="img-fluid" src="img/logo-footer.png">
								</a>
							</div>
							<div class="col-lg-7">
								<p>© Copyright 2018. All Rights Reserved.</p>
							</div>
							<div class="col-lg-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="page-faq.html">FAQ's</a></li>
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

	</body>
			

			<?php include('footer_other.php') ?>
