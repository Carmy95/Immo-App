@extends('layouts.sites.master')
@section('css')
    <link href="{{ asset('plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/single.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/single_responsive.css') }}">
@endsection
@section('content')


	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/listings.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">Détails</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Listing -->

	<div class="listing_container">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Image -->
					<div class="listing_image"><img src="images/listing.jpg" alt=""></div>

					<!-- Tabs -->
					<div class="listing_tabs d-flex flex-row align-items-start justify-content-between flex-wrap">

						<!-- Tab -->
						<div class="tab">
							<input type="radio" id="tab_1" name="listing_tabs" checked>
							<label for="tab_1"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
								<div class="tab_icon"><img src="images/house.svg" class="svg" alt=""></div>
								<span>open house</span>
							</div>
						</div>

						<!-- Tab -->
						{{-- <div class="tab">
							<input type="radio" id="tab_2" name="listing_tabs">
							<label for="tab_2"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
								<div class="tab_icon"><img src="images/houses.svg" class="svg" alt=""></div>
								<span>features</span>
							</div>
						</div> --}}

						<!-- Tab -->
						<div class="tab">
							<input type="radio" id="tab_3" name="listing_tabs">
							<label for="tab_3"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
								<div class="tab_icon"><img src="images/house2.svg" class="svg" alt=""></div>
								<span>photos</span>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab">
							<input type="radio" id="tab_4" name="listing_tabs">
							<label for="tab_4"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
								<div class="tab_icon"><img src="images/camera.svg" class="svg" alt=""></div>
								<span>video</span>
							</div>
						</div>

						<!-- Tab -->
						{{-- <div class="tab">
							<input type="radio" id="tab_5" name="listing_tabs">
							<label for="tab_5"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
								<div class="tab_icon"><img src="images/directions.svg" class="svg" alt=""></div>
								<span>nearby amenities</span>
							</div>
						</div> --}}

						<!-- Tab -->
						{{-- <div class="tab">
							<input type="radio" id="tab_6" name="listing_tabs">
							<label for="tab_6"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
								<div class="tab_icon"><img src="images/location.svg" class="svg" alt=""></div>
								<span>location</span>
							</div>
						</div> --}}

						<!-- Tab -->
						<div class="tab">
							<input type="radio" id="tab_7" name="listing_tabs">
							<label for="tab_7"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
								<div class="tab_icon"><img src="images/contract.svg" class="svg" alt=""></div>
								<span>contact</span>
							</div>
						</div>

					</div>

					<!-- About -->
					<div class="about">
						<div class="row">
							<div class="col-lg-6">
								<div class="property_info">
									<div class="tag_price listing_price">$ 562 346</div>
									<div class="listing_name"><h1>Villa for sale</h1></div>
									<div class="listing_location d-flex flex-row align-items-start justify-content-start">
										<img src="images/icon_1.png" alt="">
										<span>280 Doe Meadow Drive Landover, MD 20785</span>
									</div>
									<div class="listing_list">
										<ul>
											<li>Property ID: 643682</li>
											<li>Posted on: September 22, 2018</li>
											<li>Off plan</li>
										</ul>
									</div>
									<div class="prop_agent d-flex flex-row align-items-center justify-content-start">
										<div class="prop_agent_image"><img src="images/agent_1.jpg" alt=""></div>
										<div class="prop_agent_name"><a href="#">Maria Smith,</a> Agent</div>
									</div>
									<div class="prop_info">
										<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_2_large.png" alt="">
												<div>
													<div>1234</div>
													<div>sq ft</div>
												</div>
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_3_large.png" alt="">
												<div>
													<div>2</div>
													<div>baths</div>
												</div>
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_4_large.png" alt="">
												<div>
													<div>5</div>
													<div>beds</div>
												</div>
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_5_large.png" alt="">
												<div>
													<div>2</div>
													<div>garages</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="about_text">
									<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nullam fermentum egestas quam nec malesuada. Donec non ligula non risus luctus mattis non non diam. Integer placerat velit at vestibulum vulputate. Donec lacinia vitae libero sed ultricies. Donec egestas dictum dolor ac sagittis. Nunc facilisis iaculis est, ut aliquet lorem. Nam imperdiet convallis imperdiet. Nam libero arcu, porttitor sed sapien nec, commodo accumsan nulla. Praesent pretium neque nec dictum venenatis. Mauris nec metus vitae massa maximus malesuada. Quisque cursus leo nec nulla dignissim, ut pulvinar diam porttitor.</p>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="listing_features">
									<div class="listing_title"><h3>Caractéristiques</h3></div>
									<div class="row">
										<div class="col-lg-6">
											<ul>
												<li>2 car garages</li>
												<li>3 bedrooms</li>
												<li>heated floors</li>
												<li>contemporary architecture</li>
												<li>swimming pool</li>
												<li>exercise room</li>
												<li>formal entry</li>
											</ul>
										</div>
										<div class="col-lg-6">
											<ul>
												<li>patio</li>
												<li>close to stores</li>
												<li>ocean view</li>
												<li>spa</li>
												<li>sprinklers</li>
												<li>garden</li>
												<li>alley</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="listing_video">
									<div class="listing_title"><h3>Gallery Photo</h3></div>
									<div class="video_container d-flex flex-column align-items-center justify-content-center">
                                        ​<picture>
                                            <source srcset="images/video.jpg" type="image/svg+xml">
                                            <img src="images/video.jpg" class="img-fluid img-thumbnail" alt="...">
                                          </picture>
										{{-- <img src="images/video.jpg" alt="">
										<div class="video_button"><a class="youtube" href="https://www.youtube.com/embed/IV3ueyrp5M4?autoplay=1"><i class="fa fa-play" aria-hidden="true"></i></a></div> --}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
