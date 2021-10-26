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
					<div class="listing_image"><img src="{{ asset(''.$data->photo.'') }}" alt=""></div>

					<!-- Tabs -->
					<div class="listing_tabs d-flex flex-row align-datas-start justify-content-between flex-wrap">

						<!-- Tab -->
						<div class="tab">
							<input type="radio" id="tab_1" name="listing_tabs" checked>
							<label for="tab_1"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-datas-center justify-content-center">
								<div class="tab_icon"><img src="images/house.svg" class="svg" alt=""></div>
								<span>open house</span>
							</div>
						</div>
						<div class="tab">
							<input type="radio" id="tab_3" name="listing_tabs">
							<label for="tab_3"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-datas-center justify-content-center">
								<div class="tab_icon"><img src="images/house2.svg" class="svg" alt=""></div>
								<span>photos</span>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab">
							<input type="radio" id="tab_4" name="listing_tabs">
							<label for="tab_4"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-datas-center justify-content-center">
								<div class="tab_icon"><img src="images/camera.svg" class="svg" alt=""></div>
								<span>video</span>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab">
							<input type="radio" id="tab_7" name="listing_tabs">
							<label for="tab_7"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-datas-center justify-content-center">
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
									<div class="tag_price listing_price">{{ $data->prix }}
                                        @if($data->echance == 'M')
                                            / Mois
                                        @elseif($data->echance == 'S')
                                            / Semaine
                                        @elseif($data->echance == 'J')
                                            / Jour
                                        @elseif($data->echance == 'A')
                                            / An
                                        @endif
                                </div>
									<div class="listing_name"><h1>{{ $data->libelle }}</h1></div>
									<div class="listing_location d-flex flex-row align-datas-start justify-content-start">
										<img src="images/icon_1.png" alt="">
										<span>{{ $data->quatier->libelle }}, {{ $data->quatier->commune->libelle }}, {{ $data->quatier->commune->ville->libelle }}</span>
									</div>
									<div class="listing_list">
										<ul>
											<li>Reference: IHkhei{{ $data->id }}</li>
											<li>Publier : {{ $data->created_at }}</li>
										</ul>
									</div>
									{{-- <div class="prop_agent d-flex flex-row align-datas-center justify-content-start">
										<div class="prop_agent_image"><img src="images/agent_1.jpg" alt=""></div>
										<div class="prop_agent_name"><a href="#">Maria Smith,</a> Agent</div>
									</div> --}}
									<div class="prop_info">
										<ul class="d-flex flex-row align-datas-center justify-content-start flex-wrap">
											<li class="d-flex flex-row align-datas-center justify-content-start">
												<img src="images/icon_2_large.png" alt="">
												<div>
													<div>{{ $data->superficie }}</div>
													<div>m2</div>
												</div>
											</li>
											<li class="d-flex flex-row align-datas-center justify-content-start">
												<img src="images/icon_3_large.png" alt="">
												<div>
													<div>@if ($item->wc == '') 0 @else {{ $item->wc }} @endif</div>
													<div>Toillets</div>
												</div>
											</li>
											<li class="d-flex flex-row align-datas-center justify-content-start">
												<img src="images/icon_4_large.png" alt="">
												<div>
													<div>@if ($item->chambre == '') 0 @else {{ $item->chambre }} @endif</div>
													<div>Chambres</div>
												</div>
											</li>
											<li class="d-flex flex-row align-datas-center justify-content-start">
												<img src="images/icon_5_large.png" alt="">
												<div>
													<div>@if ($item->garage == '') 0 @else {{ $item->garage }} @endif</div>
													<div>Garages</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="about_text">
									<p>{{ $data->description }}</p>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="listing_features">
									<div class="listing_title"><h3>Caractéristiques</h3></div>
									<div class="row">
										<div class="col-lg-6">
											<ul>
                                                <li>Prix = {{ $data->prix }} FCFA
                                                    @if($data->echance == 'M')
                                                        / Mois
                                                    @elseif($data->echance == 'S')
                                                        / Semaine
                                                    @elseif($data->echance == 'J')
                                                        / Jour
                                                    @elseif($data->echance == 'A')
                                                        / An
                                                    @endif
                                                </li>
                                                @if($data->sejour != '')
                                                    <li>Salon = {{ $data->sejour }}</li>
                                                @endif

                                                @if($data->chambre != '')
                                                    <li>Chambre = {{ $data->chambre }}</li>
                                                @endif
                                                @if($data->cuisine != '')
                                                    <li>Cuisine = {{ $data->cuisine }}</li>
                                                @endif
											</ul>
										</div>
										<div class="col-lg-6">
											<ul>
                                                <li>Superficiie = {{ $data->superficie }} m2</li>
                                                @if($data->salle_manger != '')
                                                    <li>Salle à manger = {{ $data->salle_manger }}</li>
                                                @endif
                                                @if($data->wc != '')
                                                    <li>Toillet = {{ $data->wc }}</li>
                                                @endif
                                                @if($data->garage != '')
                                                    <li>Garage = {{ $data->garage }}</li>
                                                @endif
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="listing_video">
									<div class="listing_title"><h3>Gallery Photo</h3></div>
									<div class="video_container d-flex flex-column align-datas-center justify-content-center">
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

