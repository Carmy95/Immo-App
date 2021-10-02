
	<!-- Header -->

	<header class="header">

		<!-- Header Bar -->
		<div class="header_bar d-flex flex-row align-items-center justify-content-start">
			<div class="header_list">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<!-- Phone -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/phone-call.svg" alt=""></div>
						<span>+225 0123456789</span>
					</li>
					<!-- Address -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/placeholder.svg" alt=""></div>
						<span>Université Nangui Abrogoua, Abidjan, Côte d'Ivoire</span>
					</li>
					<!-- Email -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/envelope.svg" alt=""></div>
						<span>immo_app@contact.com</span>
					</li>
				</ul>
			</div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<div class="social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						{{-- <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li> --}}
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						{{-- <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li> --}}
						{{-- <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li> --}}
					</ul>
				</div>
				<div class="log_reg d-flex flex-row align-items-center justify-content-start">
					<ul class="d-flex flex-row align-items-start justify-content-start">
                        @guest
						    <li><a href="#">Se Connecter</a></li>
                        @else
						    <li><a href="#">Se Deconnecter</a></li>
                        @endguest
						{{-- <li><a href="#">Register</a></li> --}}
					</ul>
				</div>
			</div>
		</div>

		<!-- Header Content -->@if ($active == '') active @endif
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="{{ route('home') }}">my<span>home</span></a></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="@if ($active == 'home') active @endif"><a href="{{ route('home') }}">Acceuil</a></li>
					<li class="@if ($active == 'about') active @endif"><a href="{{ route('about') }}">Qui sommes nous</a></li>
					<li class="@if ($active == 'bien') active @endif"><a href="{{ route('bien') }}">Biens</a></li>
					<li class="@if ($active == 'yuy') active @endif"><a href="{{ route('detail') }}">Equipes</a></li>
					<li class="@if ($active == 'tel') active @endif"><a href="{{ route('contact') }}">Contacts</a></li>
				</ul>
			</nav>
            @guest
			    <div class="submit ml-auto"><a href="{{ route('contact') }}">Laisser un Message</a></div>
			    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
            @else
                <div class="submit ml-auto"><a href="{{ route('contact') }}">Tableau de Bord</a></div>
                <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
            @endguest
		</div>

	</header>

	<!-- Menu -->

	<div class="menu text-right">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_log_reg">
			<div class="log_reg d-flex flex-row align-items-center justify-content-end">
				<ul class="d-flex flex-row align-items-start justify-content-start">
                    @guest
                        <li><a href="#">Se Connecter</a></li>
                    @else
                        <li><a href="#">Se Deconnecter</a></li>
                    @endguest
					{{-- <li><a href="#">Register</a></li> --}}
				</ul>
			</div>
			<nav class="menu_nav">
				<ul>
					<li><a href="#">Acceuil</a></li>
					<li><a href="#">Qui sommes nous ?</a></li>
					<li><a href="#">Nos Biens</a></li>
					<li><a href="#">Notre Equipes</a></li>
					<li><a href="#">Nous Contacter</a></li>
				</ul>
			</nav>
		</div>
	</div>
