@extends('layouts.sites.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/about_responsive.css') }}">
@endsection
@section('content')


	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">Qui sommes nous ?</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row row-eq-height" style="margin-bottom: 15px">

				<!-- Intro Content -->
				<div class="col-lg-6">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_subtitle">the best deals</div>
							<div class="section_title"><h1>Notre Mission</h1></div>
						</div>
						<div class="intro_text">
							<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
						</div>
						{{-- <div class="button intro_button"><a href="#">read more</a></div> --}}
					</div>
				</div>

				<!-- Intro Image -->
				<div class="col-lg-6 intro_col">
					<div class="intro_image">
						<div class="background_image" style="background-image:url(images/intro.jpg)"></div>
						<img src="images/intro.jpg" alt="">
					</div>
				</div>

			</div>
			<div class="row row-eq-height" style="margin-bottom: 15px">

				<!-- Intro Image -->
				<div class="col-lg-6 intro_col">
					<div class="intro_image">
						<div class="background_image" style="background-image:url(images/intro.jpg)"></div>
						<img src="images/intro.jpg" alt="">
					</div>
				</div>

				<!-- Intro Content -->
				<div class="col-lg-6">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_subtitle"></div>
							<div class="section_title"><h1>Notre Objectif</h1></div>
						</div>
						<div class="intro_text">
							<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
						</div>
						{{-- <div class="button intro_button"><a href="#">read more</a></div> --}}
					</div>
				</div>

			</div>
			<div class="row row-eq-height" style="margin-bottom: 15px">

				<!-- Intro Content -->
				<div class="col-lg-6">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_subtitle">the best deals</div>
							<div class="section_title"><h1>Notre Mission</h1></div>
						</div>
						<div class="intro_text">
							<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
						</div>
						{{-- <div class="button intro_button"><a href="#">read more</a></div> --}}
					</div>
				</div>

				<!-- Intro Image -->
				<div class="col-lg-6 intro_col">
					<div class="intro_image">
						<div class="background_image" style="background-image:url(images/intro.jpg)"></div>
						<img src="images/intro.jpg" alt="">
					</div>
				</div>

			</div>
			<div class="row row-eq-height" style="margin-bottom: 15px">

				<!-- Intro Image -->
				<div class="col-lg-6 intro_col">
					<div class="intro_image">
						<div class="background_image" style="background-image:url(images/intro.jpg)"></div>
						<img src="images/intro.jpg" alt="">
					</div>
				</div>

				<!-- Intro Content -->
				<div class="col-lg-6">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_subtitle"></div>
							<div class="section_title"><h1>Notre Objectif</h1></div>
						</div>
						<div class="intro_text">
							<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
						</div>
						{{-- <div class="button intro_button"><a href="#">read more</a></div> --}}
					</div>
				</div>

			</div>
		</div>
	</div>



	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">the best deals</div>
						<div class="section_title"><h1>Nos Services</h1></div>
					</div>
				</div>
			</div>
			<div class="row services_row">

				<!-- Service -->
				<div class="col-xl-4 col-md-6">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="service_icon d-flex flex-column align-items-start justify-content-center">
								<img src="images/service_1.png" alt="">
							</div>
							<div class="service_title"><h3>Gestion immobilière</h3></div>
						</div>
						<div class="service_text">
							<p>Nulla aliquet bibendum sem, non placer risus venenatis at. Prae sent vulputate bibendum dictum.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="service_icon d-flex flex-column align-items-start justify-content-center">
								<img src="images/service_2.png" alt="">
							</div>
							<div class="service_title"><h3>Locations</h3></div>
						</div>
						<div class="service_text">
							<p>Aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="service_icon d-flex flex-column align-items-start justify-content-center">
								<img src="images/service_3.png" alt="">
							</div>
							<div class="service_title"><h3>Assistance Conseil</h3></div>
						</div>
						<div class="service_text">
							<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="service_icon d-flex flex-column align-items-start justify-content-center">
								<img src="images/service_4.png" alt="">
							</div>
							<div class="service_title"><h3>Construction</h3></div>
						</div>
						<div class="service_text">
							<p>Aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="service_icon d-flex flex-column align-items-start justify-content-center">
								<img src="images/service_5.png" alt="">
							</div>
							<div class="service_title"><h3> Vente</h3></div>
						</div>
						<div class="service_text">
							<p>Bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="service_icon d-flex flex-column align-items-start justify-content-center">
								<img src="images/service_6.png" alt="">
							</div>
							<div class="service_title"><h3>Renovation</h3></div>
						</div>
						<div class="service_text">
							<p>Aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula.</p>
						</div>
					</div>
				</div>



			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<div class="container">
			<div class="row">

				<!-- Milestone -->
				<div class="col-xl-3 col-md-6 milestone_col">
					<div class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
						<div class="milestone_content">
							<div class="milestone_icon d-flex flex-column align-items-start justify-content-center"><img src="images/duplex.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="425">0</div>
							<div class="milestone_text">Maisons vendu</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-xl-3 col-md-6 milestone_col">
					<div class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
						<div class="milestone_content">
							<div class="milestone_icon d-flex flex-column align-items-start justify-content-center"><img src="images/prize.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="18">0</div>
							<div class="milestone_text">distinctions reçu</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-xl-3 col-md-6 milestone_col">
					<div class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
						<div class="milestone_content">
							<div class="milestone_icon d-flex flex-column align-items-start justify-content-center"><img src="images/home.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="125" data-sign-after="k">0</div>
							<div class="milestone_text">Locataires</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-xl-3 col-md-6 milestone_col">
					<div class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
						<div class="milestone_content">
							<div class="milestone_icon d-flex flex-column align-items-start justify-content-center"><img src="images/rent.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="1265">0</div>
							<div class="milestone_text">Projets encours</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection
