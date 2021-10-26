<div class="home">

    <!-- Home Slider -->
    <div class="home_slider_container">
         <div class="owl-carousel owl-theme home_slider">

             <!-- Slide -->
             @foreach ($sliders as $item)
                <div class="slide">
                    <div class="background_image" style="background-image:url({{ $item->photo }})"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content">
                                        <div class="home_title"><h1>{{ $item->titre }}</h1></div>
                                        <a href="{{ route('bien') }}"><div class="tag tag_price">Details</div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach


         </div>

         <!-- Home Slider Navigation -->
         <div class="home_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>

    </div>
</div>

<!-- Search -->

<div class="search">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="search_container">
                    <div class="search_title">Votre Future Bien</div>
                    <div class="search_form_container">
                        <form action="#" class="search_form" id="search_form">
                            <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                <div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <input type="text" class="search_input" placeholder="Type de Propriété" required="required">
                                    <input type="text" class="search_input" placeholder="Nombre de Pièce" required="required">
                                    <input type="text" class="search_input" placeholder="Localisation" required="required">
                                </div>
                                <button class="search_button">Rechercher</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
