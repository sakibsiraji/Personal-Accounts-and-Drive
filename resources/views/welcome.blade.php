<!DOCTYPE html>
<html class="boxed">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Login | Munir's Account</title>	

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
			

			<div role="main" class="main">
                <div class="container py-4">
					
                <div class="row justify-content-center">
                    <div class="col-md-3 col-lg-2"></div>
                    @if(Session::has('coc'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{session('coc')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span area-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
						<div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
							<h2 class="font-weight-bold text-5 mb-0" style="text-align:center;">Login</h2>
                            <br>
							<form action="MunirLogin" id="frmSignIn" method="post" class="needs-validation">
                                @csrf
								<div class="row">
									<div class="form-group col">
										<label class="form-label text-color-dark text-3">Email address <span class="text-color-danger">*</span></label>
										<input type="text" name='email' class="form-control form-control-lg text-4" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<label class="form-label text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
										<input type="password" name='password' class="form-control form-control-lg text-4" required>
									</div>
								</div>
								<div class="row justify-content-between">
									<div class="form-group col-md-auto">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="rememberme">
											<label class="form-label custom-control-label cur-pointer text-2" for="rememberme">Remember Me</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-3 col-lg-2"></div>
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
									<img alt="Last Minute IT" src="{{URL::asset('img/logo-footer.png')}}" height="32">
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