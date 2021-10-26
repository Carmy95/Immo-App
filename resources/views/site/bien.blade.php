@extends('layouts.sites.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/listings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/listings_responsive.css') }}">
@endsection
@section('content')

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/listings.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">Nos Biens</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Search -->

	<div class="search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="search_container">
						<div class="search_form_container">
							<form action="#" class="search_form" id="search_form">
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									<div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<input type="text" class="search_input" placeholder="Property type" required="required">
										<input type="text" class="search_input" placeholder="No rooms" required="required">
										<input type="text" class="search_input" placeholder="Location" required="required">
									</div>
									<button class="search_button">submit listing</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Listings -->

	<div class="listings">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Sorting -->
					<div class="sorting d-flex flex-md-row flex-column align-items-start justify-content-start">

						<!-- Sort -->
						<div class="sorting_container">
							<div class="sort">
								<span>Sort By</span>
								<ul>
									<li class="sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>Default</li>
									<li class="sorting_button" data-isotope-option='{ "sortBy": "price" }'>Price</li>
									<li class="sorting_button" data-isotope-option='{ "sortBy": "area" }'>Area</li>
								</ul>
							</div>
						</div>

					</div>

					<!-- Listings Container -->
					<div class="listings_container">

						<!-- Listing -->
                        @foreach($biens as $item)
                            <div class="listing_box house sale">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="{{ asset(''.$item->photo.'') }}" alt="">
                                        </div>
                                        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <div class="tag tag_house"><a href="{{ route('detail',$item->id) }}">{{ $item->libelle }}</a></div>
                                            <div class="tag tag_sale"><a href="{{ route('detail',$item->id) }}">{{ $item->etat->libelle }}</a></div>
                                        </div>
                                        <div class="tag_price listing_price">{{ $item->prix }} Fcfa
                                            @if($item->echance == 'M')
                                                / Mois
                                            @elseif($item->echance == 'S')
                                                / Semaine
                                            @elseif($item->echance == 'J')
                                                / Jour
                                            @elseif($item->echance == 'A')
                                                / An
                                            @endif
                                        </div>
                                    </div>
                                    <div class="listing_content">
                                        <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                            <img src="images/icon_1.png" alt="">
                                            <a href="{{ route('detail',$item->id) }}">{{ $item->quatier->libelle }}, {{ $item->quatier->commune->libelle }}</a>
                                        </div>
                                        <div class="listing_info">
                                            <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                <li class="property_area d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/icon_2.png" alt="">
                                                    <span>{{ $item->superficie }} m2</span>
                                                </li>
                                                <li class="d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/icon_3.png" alt="">
                                                    <span>@if ($item->wc == '') 0 @else {{ $item->wc }} @endif</span>
                                                </li>
                                                <li class="d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/icon_4.png" alt="">
                                                    <span>@if ($item->chambre == '') 0 @else {{ $item->chambre }} @endif</span>
                                                </li>
                                                <li class="d-flex flex-row align-items-center justify-content-start">
                                                    <img src="images/icon_5.png" alt="">
                                                    <span>@if ($item->garage == '') 0 @else {{ $item->garage }} @endif</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

					</div>
					<div class="load_more">
						<div class="ml-auto mr-auto">{{ $biens->links('vendor.pagination.bootstrap-4') }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection
