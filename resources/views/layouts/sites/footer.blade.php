
	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_about">
							<div class="footer_logo"><a href="#">my<span>home</span></a></div>
							<div class="footer_text">
								<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
							</div>
							<div class="social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									{{-- <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li> --}}
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									{{-- <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li> --}}
								</ul>
							</div>
							{{-- <div class="footer_submit"><a href="#">submit listing</a></div> --}}
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_column">
							<div class="footer_title">Nos contacts</div>
							<div class="footer_info">
								<ul>
									<!-- Phone -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="{{ asset('images/phone-call.svg') }}" alt=""></div>
										<span>+225 0123456789</span>
									</li>
									<!-- Address -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="{{ asset('images/placeholder.svg') }}" alt=""></div>
										<span>Université Nangui Abrogoua, Abidjan, Côte d'Ivoire</span>
									</li>
									<!-- Email -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="{{ asset('images/envelope.svg') }}" alt=""></div>
										<span>immo_app@contact.com</span>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_links">
							<div class="footer_title">Navigation</div>
							<ul>
								<li><a href="{{ route('home') }}">Acceuil</a></li>
								<li><a href="{{ route('about') }}">Qui sommes nous ?</a></li>
								<li><a href="{{ route('bien') }}">Nos Biens</a></li>
								{{-- <li><a href="{{ route('detail') }}">Notre Equipes</a></li> --}}
								<li><a href="{{ route('contact') }}">Nous contacter</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_title">Offre du Jours</div>
						<div class="listing_small">
							<div class="listing_small_image">
								<div>
									<img src="{{ asset('images/listing_1.jpg') }}" alt="">
								</div>
								<div class="listing_small_tags d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="listing_small_tag tag_house"><a href="#">Maison</a></div>
									<div class="listing_small_tag tag_sale"><a href="#">A Louer</a></div>
								</div>
								<div class="listing_small_price">562 500 Fcfa / Mois</div>
							</div>
							<div class="listing_small_content">
								<div class="listing_small_location d-flex flex-row align-items-start justify-content-start">
									<img src="{{ asset('images/icon_1.png') }}" alt="">
									<a href="single.html">cocody, Abidjan</a>
								</div>
								<div class="listing_small_info">
									<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="{{ asset('images/icon_3.png') }}" alt="">
											<span>2</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="{{ asset('images/icon_4.png') }}" alt="">
											<span>5</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="{{ asset('images/icon_5.png') }}" alt="">
											<span>2</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
							<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tout droit réservé | Immo-APP <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Madexe</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
