<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
	<script src="{{ mix('/js/app.js') }}" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('partials/nav')
			@include('partials.session-status')	
		</header>
		<main class="py-4">
			@yield('content')	
		</main>
		<footer class="text-center bg-dark text-white-50 py-3 shadow">
			{{ config('app.name') }} | Copyright @ {{ date('Y') }}
		</footer>
		<!-- Footer -->
		<!--<footer class="page-footer font-small unique-color-dark">
			<div style="background-color: #6351ce;">
				<div class="container">
					<div class="row py-4 d-flex align-items-center">
		 				<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
							<h6 class="mb-0">Get connected with us on social networks!</h6>
		  				</div>
						<div id="social" class="col-md-6 col-lg-7 text-center text-md-right">
							<a style="font-size: 25px;" href="https://facebook.com" target="_blank" class="fb-ic">
								<i class="fab fa-facebook-f white-text mr-4"> </i>
							</a>
							<a href="https://twitter.com" target="_blank" class="tw-ic">
								<i class="fab fa-twitter white-text mr-4"> </i>
							</a>
							<a href="https://facebook.com" target="_blank" class="li-ic">
								<i class="fab fa-linkedin-in white-text mr-4"> </i>
							</a>
							<a href="https://facebook.com" target="_blank" class="ins-ic">
								<i class="fab fa-instagram white-text"> </i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container text-center text-md-left mt-5">
				<div class="row mt-3">
					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
						<h6 class="text-uppercase font-weight-bold">Company name</h6>
						<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
						<p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
							consectetur
							adipisicing elit.</p>
					</div>
					<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
						<h6 class="text-uppercase font-weight-bold">Products</h6>
						<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
						<p>
							<a href="#!">MDBootstrap</a>
						</p>
						<p>
							<a href="#!">MDWordPress</a>
						</p>
						<p>
							<a href="#!">BrandFlow</a>
						</p>
						<p>
							<a href="#!">Bootstrap Angular</a>
						</p>
					</div>
					<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
						<h6 class="text-uppercase font-weight-bold">Useful links</h6>
						<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
						<p>
							<a href="#!">Your Account</a>
						</p>
						<p>
							<a href="#!">Become an Affiliate</a>
						</p>
						<p>
							<a href="#!">Shipping Rates</a>
						</p>
						<p>
							<a href="#!">Help</a>
						</p>
				
					</div>
					<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
						<h6 class="text-uppercase font-weight-bold">Contact</h6>
						<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
						<p>
							<i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
						<p>
							<i class="fas fa-envelope mr-3"></i> info@example.com</p>
						<p>
							<i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
						<p>
							<i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
				
					</div>
				</div>
			</div>
			<div class="footer-copyright text-center py-3">
				{{ config('app.name') }} | Copyright @ {{ date('Y') }}
			</div>
		  </footer>
		-->
	</div>
</body>
</html>