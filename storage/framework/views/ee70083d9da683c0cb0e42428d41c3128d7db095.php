<!doctype html>
<html lang="en" dir="ltr">
	<head>
    <base href="<?php echo e(asset('')); ?>">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title><?php echo $__env->yieldContent('title'); ?></title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!--Font Awesome-->
		<link href="assets/plugins/fontawesome-free/css/all.css" rel="stylesheet">

		<!-- Font Family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="assets/css/dashboard.css" rel="stylesheet" />

		<!-- vector-map -->
		<link href="assets/plugins/vector-map/jqvmap.min.css" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />
		
		<!-- Sidemenu Css -->
		<link href="assets/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">

		<!-- c3.js Charts Plugin -->
		<link href="assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />
		<link href="./assets/plugins/morris/morris.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="assets/plugins/iconfonts/plugin.css" rel="stylesheet" />
		<link href="assets/css/datepicker3.css" rel="stylesheet">
		<link href="assets/css/styles.css" rel="stylesheet">
		<script src="assets/js/vendors/jquery-3.2.1.min.js"></script>
		
		<script src="assets/js/lumino.glyphs.js"></script>
		<script src="editor/ckeditor/ckeditor.js"></script>
	</head>
	<body class="app">
		<div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>
		<div class="page">
			<div class="page-main">
				<!-- Navbar-->
					<header class="app-header header shadow-none relative">
						<div id="particles-js" ></div>
						<div class="container">
						
						<!-- Header Background Animation-->
						<div id="canvas" class="gradient"></div>
						
						<!-- Navbar Right Menu-->
						<div class="container-fluid">
							<div class="d-flex">
								<a class="header-brand" href="<?php echo e(asset('admin/home')); ?>">
									<img alt="ren logo" class="header-brand-img" src="assets/images/brand/logo.png">
								</a>
								<div class="d-flex order-lg-2 ml-auto">
									<div class="">
										<form class="input-icon  mr-2">
											<input class="form-control header-search" placeholder="Search&hellip;" tabindex="1" type="search">
											<div class="input-icon-addon">
												<i class="fe fe-search"></i>
											</div>
										</form>
									</div>
									<div class="dropdown d-none d-md-flex">
										<a class="nav-link icon" data-toggle="dropdown">
											<i class="fas fa-user"></i>
											<span class="nav-unread bg-green"></span>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/faces/male/4.jpg)"></span>
												<div>
													<strong>Madeleine Scott</strong> Sent you add request
													<div class="small text-muted">
														view profile
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/faces/female/14.jpg)"></span>
												<div>
													<strong>rebica</strong> Suggestions for you
													<div class="small text-muted">
														view profile
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/faces/male/1.jpg)"></span>
												<div>
													<strong>Devid robott</strong> sent you add request
													<div class="small text-muted">
														view profile
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div><a class="dropdown-item text-center text-muted-dark" href="#">View all contact list</a>
										</div>
									</div>
									<div class="dropdown d-none d-md-flex">
										<a class="nav-link icon" data-toggle="dropdown">
											<i class="fas fa-bell"></i>
											<span class="nav-unread bg-danger"></span>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<a class="dropdown-item d-flex pb-3" href="#">
												<div class="notifyimg">
													<i class="fas fa-thumbs-up"></i>
												</div>
												<div>
													<strong>Someone likes our posts.</strong>
													<div class="small text-muted">
														3 hours ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<div class="notifyimg">
													<i class="fas fa-comment-alt"></i>
												</div>
												<div>
													<strong>3 New Comments</strong>
													<div class="small text-muted">
														5 hour ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<div class="notifyimg">
													<i class="fas fa-cogs"></i>
												</div>
												<div>
													<strong>Server Rebooted.</strong>
													<div class="small text-muted">
														45 mintues ago
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item text-center text-muted-dark" href="#">View all Notification</a>
										</div>
									</div>
									<div class="dropdown d-none d-md-flex">
										<a class="nav-link icon" data-toggle="dropdown"><i class="fas fa-envelope"></i> <span class="badge badge-info badge-pill">2</span></a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<a class="dropdown-item text-center text-dark" href="#">2 New Messages</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/faces/male/41.jpg)"></span>
												<div>
													<strong>Madeleine</strong> Hey! there I' am available....
													<div class="small text-muted">
														3 hours ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/faces/female/1.jpg)"></span>
												<div>
													<strong>Anthony</strong> New product Launching...
													<div class="small text-muted">
														5 hour ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/faces/female/18.jpg)"></span>
												<div>
													<strong>Olivia</strong> New Schedule Realease......
													<div class="small text-muted">
														45 mintues ago
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item text-center text-muted-dark" href="#">See all Messages</a>
										</div>
									</div>
									<div class="dropdown">
										<a class="nav-link pr-0 leading-none d-flex" data-toggle="dropdown" href="#">
											<span class="avatar avatar-md brround" style="background-image: url(assets/images/faces/female/25.jpg)"></span>
											<span class="ml-2 d-none d-lg-block">
												<span class="text-white"><?php echo e(Auth::user()->username); ?></span>
											</span>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-account-outline"></i> Profile</a>
											<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-settings"></i> Settings</a>
											<a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span> <i class="dropdown-icon mdi mdi-message-outline"></i> Inbox</a>
											<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?</a>
											<a class="dropdown-item" href="<?php echo e(asset('logout')); ?>"><i class="dropdown-icon mdi mdi-logout-variant"></i> Sign out</a>
										</div>
									</div>
								</div>
								<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
									<span class="header-toggler-icon"></span>
								</a>
							</div>
						</div>
					</div>
				</header>
				
				<!-- Horizantal menu-->
				<div class="ren-navbar fixed-header" id="headerMenuCollapse">
					<div class="container">
						<ul class="nav">
							<li class="nav-item with-sub">
								<a class="nav-link active" href="#">
									<i class="fas fa-home"></i>
									<span> DASHBOARD</span>
								</a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="index.html">Dashboard 1</a>
										</li>
										<li>
											<a href="index2.html">Dashboard 2</a>
										</li>
										<li>
											<a href="index3.html">Dashboard 3</a>
										</li>
										<li>
											<a href="index4.html">Dashboard 4</a>
										</li>
									</ul>
								</div><!-- sub-item -->
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo e(asset('admin/danhmuc')); ?>">
									<i class="fas fa-window-restore"></i>
									<span>Danh mục</span>
								</a>
							</li>
							
							<li class="nav-item with-sub mega-dropdown">
								<a class="nav-link" href="#"><i class="fas fa-pen-square"></i><span>UI ELEMENTS</span></a>
								<div class="sub-item">
									<div class="row">
										<div class="col-lg-6">
											<label class="section-label">Basic Elements</label>
											<div class="row">
												<div class="col">
													<ul>
														<li>
															<a href="alerts.html">Alerts</a>
														</li>
														<li>
															<a href="buttons.html">Buttons</a>
														</li>
														<li>
															<a href="colors.html">Colors</a>
														</li>
														<li>
															<a href="avatars.html">Avatar-Square</a>
														</li>
														<li>
															<a href="avatar-round.html">Avatar-Rounded</a>
														</li>
														<li>
															<a href="avatar-radius.html">Avatar-Radius</a>
														</li>
														<li>
															<a href="dropdown.html">Drop downs</a>
														</li>
														<li>
															<a href="thumbnails.html">Thumbnails</a>
														</li>
														<li>
															<a href="mediaobject.html">Media Object</a>
														</li>
													</ul>
												</div>
												<div class="col-lg">
													<ul>
														<li>
															<a href="list.html">List</a>
														</li>
														<li>
															<a href="tags.html">Tags</a>
														</li>
														<li>
															<a href="pagination.html">Pagination</a>
														</li>
														<li>
															<a href="navigation.html">Navigation</a>
														</li>
														<li>
															<a href="typography.html">Typography</a>
														</li>
														<li>
															<a href="breadcrumbs.html">Breadcrumbs</a>
														</li>
														<li>
															<a href="badge.html">Badges</a>
														</li>
														<li>
															<a href="jumbotron.html">Jumbotron</a>
														</li>
														<li>
															<a href="panels.html">Panels</a>
														</li>
													</ul>
												</div><!-- col -->
											</div><!-- row -->
										</div><!-- col -->
										<div class="col-lg mg-t-30 mg-lg-t-0">
											<label class="section-label">Other Elements</label>
											<ul>
												<li>
													<a href="modal.html">Modal</a>
												</li>
												<li>
													<a href="tooltipandpopover.html">Tooltip and popover</a>
												</li>
												<li>
													<a href="progress.html">Progress</a>
												</li>
												<li>
													<a href="chart.html">Charts</a>
												</li>
												<li>
													<a href="carousel.html">Carousels</a>
												</li>
												<li>
													<a href="Accordion.html">Accordions</a>
												</li>
												<li>
													<a href="tabs.html">Tabs</a>
												</li>
												<li>
													<a href="headers.html">Headers  </a>
												</li>
												<li>
													<a href="footers.html">Footers  </a>
												</li>
											</ul>
										</div><!-- col -->
										<div class="col-lg mg-t-30 mg-lg-t-0">
											<label class="section-label">Other Pages</label>
											<ul>
												<li>
													<a href="about.html">About Company </a>
												</li>
												<li>
													<a href="company-history.html">Company History </a>
												</li>
												<li>
													<a href="services.html">Services </a>
												</li>
												<li>
													<a href="faq.html">FAQS </a>
												</li>
												<li>
													<a href="terms.html">Terms and Conditions </a>
												</li>
												<li>
													<a href="time-line.html">Time Line</a>
												</li>
												<li>
													<a href="rating.html">Rating </a>
												</li>

											</ul>
										</div><!-- col -->

									</div><!-- row -->
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub">
								<a class="nav-link" href="#"><i class="fas fa-newspaper"></i><span>Pages</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="profile.html">Profile</a>
										</li>
										<li>
											<a href="editprofile.html">Edit Profile</a>
										</li>
										<li>
											<a href="email.html">Email</a>
										</li>
										<li>
											<a href="emailservices.html">Email Inbox</a>
										</li>
										<li class="sub-with-sub">
											<a href="#">User Pages</a>
											<ul>
												<li>
													<a href="login.html">Login</a>
												</li>
												<li>
													<a href="register.html">Register</a>
												</li>
												<li>
													<a href="forgot-password.html">Forgot password</a>
												</li>
												<li>
													<a href="lockscreen.html">Lock screen</a>
												</li>
												<li>
													<a href="empty.html">Empty Page</a>
												</li>
											</ul>
										</li>
										<li class="sub-with-sub">
											<a href="#">Error Pages</a>
											<ul>
												<li>
													<a href="400.html">400 Error</a>
												</li>
												<li>
													<a href="401.html">401 Error</a>
												</li>
												<li>
													<a href="403.html">403 Error</a>
												</li>
												<li>
													<a href="404.html">404 Error</a>
												</li>
												<li>
													<a href="500.html">500 Error</a>
												</li>
												<li>
													<a href="503.html">503 Error</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="construction.html">Under Construction</a>
										</li>
									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub">
								<a class="nav-link" data-toggle="dropdown" href="#"><i class="fas fa-file-alt"></i> <span>Forms</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="form-elements.html">Form Elements</a>
										</li>
										<li>
											<a href="form-wizard.html">Wizard Elements</a>
										</li>
										<li>
											<a href="wysiwyag.html">Text Editor</a>
										</li>

									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item">
								<a href="<?php echo e(asset('admin/sanpham')); ?>"><i class="fas fa-cubes"></i> <span>Sản phẩm</span></a>
								
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item">
								<a class="nav-link" href="gallery.html">
									<i class="fas fa-images"></i>
									<span>Gallery</span>
									<span class="square-8"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Horizantal menu-->


				<!---Container--->
				<?php echo $__env->yieldContent('master'); ?>
				<!---End Container--->
				
				<!--footer-->
				<footer class="footer">
					<div class="container">
						<div class="row align-items-center flex-row-reverse">
							<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
								Copyright © <?=date('Y')?> <a href="#">Ren</a>. Designed by <a href="#">Spruko</a> All rights reserved.
							</div>
						</div>
					</div>
				</footer>
				<!-- End Footer-->
			</div>
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fas fa-angle-up"></i></a>

		<!-- Dashboard Core -->
		<script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/vendors/jquery.sparkline.min.js"></script>
		<script src="assets/js/vendors/selectize.min.js"></script>
		<script src="assets/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="assets/js/vendors/circle-progress.min.js"></script>
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<!-- Side menu js -->
		<script src="assets/plugins/toggle-sidebar/js/sidemenu.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- c3.js Charts Plugin -->
		<script src="./assets/plugins/charts-c3/d3.v5.min.js"></script>
		<script src="./assets/plugins/charts-c3/c3-chart.js"></script>

		<!-- Input Mask Plugin -->
		<script src="assets/plugins/input-mask/jquery.mask.min.js"></script>
        <!-- Progress -->
        <script src="assets/js/vendors/circle-progress.min.js"></script>

		<!-- Animation -->
        <script src="assets/plugins/particles/particles.js"></script>
        <script src="assets/plugins/particles/particlesapp_default.js"></script>

		<!-- Vector Map -->

		<script src="assets/plugins/vector-map/jquery.vmap.js"></script>
		<script src="assets/plugins/vector-map/jquery.vmap.min.js"></script>
		<script src="assets/plugins/vector-map/jquery.vmap.sampledata.js"></script>
		<script src="assets/plugins/vector-map/country/jquery.vmap.world.js"></script>

		<!--Counters -->
		<script src="assets/plugins/counters/counterup.min.js"></script>
		<script src="assets/plugins/counters/waypoints.min.js"></script>

        <!-- Index Scripts -->
		<script src="assets/js/index.js"></script>
		<script src="assets/js/charts.js"></script>

		<!--Counters -->
		<script src="assets/plugins/counters/counterup.min.js"></script>
		<script src="assets/plugins/counters/waypoints.min.js"></script>
		
		<!--  Chart js -->
		<script src="./assets/plugins/chart/Chart.bundle.js"></script>
		<script src="./assets/plugins/chart/WidgetChart.js"></script>
	
		<!-- custom js -->
		<script src="assets/js/custom.js"></script>
		<script src="assets/js/chart.js"></script>
		<script src="assets/js/chart-data.js"></script>
		<script src="assets/js/easypiechart.js"></script>
		<script src="assets/js/easypiechart-data.js"></script>
		<script src="assets/js/bootstrap-datepicker.js"></script>
		<script src="assets/js/myscript.js"></script>
		<script>
			$('#calendar').datepicker({
			});
			!function ($) {
			    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
			        $(this).find('em:first').toggleClass("glyphicon-minus");      
			    }); 
			    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
			}(window.jQuery);

			$(window).on('resize', function () {
			  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
			})
			$(window).on('resize', function () {
			  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
			})
		</script>
	</body>
</html>