<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
	<div class="container">
		<a href="{{ route('home') }}" class="logo"><img id="logoBrand" src="img/logo.png" alt="Logo" class="img-responsive"></a>
		<a class="navbar-brand" href="{{ route('home') }}">
			{{ config('app.name')}} 
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
	    	<span class="navbar-toggler-icon"></span>
	    </button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">
						<i class="fas fa-home home"></i> @lang('Home')
					</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">
						<i class="fas fa-home home"></i> @lang('About')
					</a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link {{ setActive('productos.*') }}" href="{{ route('productos.index') }}">
						<i class="fas fa-store"></i> @lang('Products')
					</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">
						<i class="fas fa-headset contact"></i> @lang('Contact')
					</a>
				</li> -->

				@guest
					<li class="nav-item">
						<a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">
							<i class="fas fa-sign-in-alt"></i> Login
						</a>
					</li>
				@else
					<li class="nav-item">
						<a class="nav-link" href="#" onclick="event.preventDefault();
		                    document.getElementById('logout-form').submit();">
		                    <i class="fas fa-sign-out-alt"></i> Cerrar sesión
		                </a>
		            </li>
				@endguest

			</ul>
		</div>
	</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	@csrf
</form>

<script type="text/javascript">
	$(".menu-toggle-btn").click(function(){
	  $(this).toggleClass("fa-times");
	  $(".navigation-menu").toggleClass("active");
	});
</script>