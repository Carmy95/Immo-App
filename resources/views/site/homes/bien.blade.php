<!-- Featured -->

<div class="featured">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_subtitle">Nos Biens</div>
                    <div class="section_title"><h1>Futures Propriétaires</h1></div>
                </div>
            </div>
        </div>
        <div class="row featured_row">

            <!-- Featured Item -->
            @foreach($biens as $item)
                <div class="col-lg-4">
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

            <!-- Featured Item -->

        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="listing">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing">
                    <a href="{{ route('bien') }}"><div class="tag_price listing_price">Voir tous les biens</div></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing">
                </div>
            </div>
        </div>
    </div>
</div>
