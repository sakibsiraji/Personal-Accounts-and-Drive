<!DOCTYPE html>
<html class="boxed">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Dashboard | Munir's Account</title>	

		<!-- <meta name="" content="" />
		<meta name="" content="">
		<meta name="" content=""> -->

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{URL::asset('img/favicon.ico')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{URL::asset('img/apple-touch-icon.png')}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{URL::asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/theme.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/theme-shop.css')}}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{URL::asset('vendor/circle-flip-slideshow/css/component.css')}}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{URL::asset('css/skins/default.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{URL::asset('vendor/modernizr/modernizr.min.js')}}"></script>

	</head>
	<body data-plugin-page-transition>
		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
                        <div class="header-column">
								<div class="header-row">
									<div>
										<h4 class="text-dark">Welcome {{session('user_name')}}</h4>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="logout">Logout</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
                <div class="container py-4">
					<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="team" data-option-key="filter">
						<li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
						<li class="nav-item" data-option-value=".accounts"><a class="nav-link text-1 text-uppercase" href="#">Accounts</a></li>
						<li class="nav-item" data-option-value=".drive"><a class="nav-link text-1 text-uppercase" href="#">Drive</a></li>
					</ul>
					<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
						<div class="row team-list sort-destination" data-sort-id="team">
							<div class="col-12 col-sm-6 col-lg-3 isotope-item accounts">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="add-account-record">
											<img src="{{URL::asset('img/team/team-1.jpg')}}" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Add a Record</span>
												<span class="thumb-info-type">Accounts</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Tap here to add a new accounts record.</span>
									</span>
								</span>
							</div>
							<div class="col-12 col-sm-6 col-lg-3 isotope-item accounts">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="IncomeRecordsByYear">
											<img src="{{URL::asset('img/team/team-1.jpg')}}" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Income Records</span>
												<span class="thumb-info-type">Accounts</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Tap here to see all income records.</span>
									</span>
								</span>
							</div>
                            <div class="col-12 col-sm-6 col-lg-3 isotope-item accounts">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="ExpenseRecordsByYear">
											<img src="{{URL::asset('img/team/team-1.jpg')}}" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Expense Record</span>
												<span class="thumb-info-type">Accounts</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Tap here to see all expense records.</span>
									</span>
								</span>
							</div>
							<div class="col-12 col-sm-6 col-lg-3 isotope-item accounts">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="MonthlySummaryByYear">
											<img src="{{URL::asset('img/team/team-1.jpg')}}" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Monthly Summary</span>
												<span class="thumb-info-type">Accounts</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Tap here for the summary of income and expenses of a particular month or year.</span>
									</span>
								</span>
							</div>
							<div class="col-12 col-sm-6 col-lg-3 isotope-item drive">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="add-drive-record">
											<img src="{{URL::asset('img/team/team-2.jpg')}}" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Add a Record</span>
												<span class="thumb-info-type">Drive</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Tap here to upload a new record to drive.</span>
									</span>
								</span>
							</div>
							<div class="col-12 col-sm-6 col-lg-3 isotope-item drive">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="DriveRecordsByCategory">
											<img src="{{URL::asset('img/team/team-2.jpg')}}" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">View Records</span>
												<span class="thumb-info-type">Drive</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Tap here to see all records in drive.</span>
									</span>
								</span>
							</div>
							<!--<div class="col-12 col-sm-6 col-lg-3 isotope-item drive">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="#">
											<img src="{{URL::asset('img/team/team-2.jpg')}}" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Update a Record</span>
												<span class="thumb-info-type">Drive</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Tap here to update a record in drive.</span>
									</span>
								</span>
							</div>-->
							<!--<div class="col-12 col-sm-6 col-lg-3 isotope-item drive">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="#">
											<img src="img/team/team-8.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Delete a Record</span>
												<span class="thumb-info-type">Drive</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Tap here to delete a record from drive.</span>
									</span>
								</span>
							</div>-->
						</div>
					</div>
				</div>	
			</div>
			<footer id="footer">
				<div class="container">
					<div class="row py-5 justify-content-center">
						<div class="col-md-9 offset-md-1 offset-lg-0 mb-4 mb-lg-0 d-flex align-items-center">
							<div class="footer-nav footer-nav-links footer-nav-bottom-line">
								
							</div>
						</div>
						<div class="col-md-4 col-lg-3 mb-4 mb-lg-0 text-center text-lg-end">
							<h4 class="text-3 mb-0 pb-1 opacity-6">FOR SUPPORT CONTACT US</h4>
                            <h6 class="text-3 mb-0 pb-1 opacity-6">Last Minute IT</h6>
							<p class="text-8 text-color-light font-weight-bold pb-1 mb-0">
                                <a href="tel:+8801792413591" class="text-decoration-none text-color-light">0179 241 3591</a>
                            </p>
							<p class="m-0"><a href="mailto:support@lastminuteit.net">support@lastminuteit.net</a></p>
                            <p class="m-0"><a href="https://www.lastminuteit.net">www.lastminuteit.net</a></p>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<a href="https://www.lastminuteit.net" class="logo pe-0 pe-lg-3">
									<img alt="Last Minute IT" src="img/logo-footer.png" height="32">
								</a>
							</div>
							<div class="col-lg-11 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0">
								<p>© Copyright 2022. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{URL::asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{URL::asset('vendor/lazysizes/lazysizes.min.js')}}"></script>
		<script src="{{URL::asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{URL::asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{URL::asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{URL::asset('vendor/vide/jquery.vide.min.js')}}"></script>
		<script src="{{URL::asset('vendor/vivus/vivus.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{URL::asset('js/theme.js')}}"></script>

		<!-- Circle Flip Slideshow Script -->
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<!-- Current Page Views -->
		<script src="{{URL::asset('js/views/view.home.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{URL::asset('js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{URL::asset('js/theme.init.js')}}"></script>

	</body>
</html>