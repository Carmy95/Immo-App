<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo">Admiry</a>-->
            <a href="index.html" class="logo"><img src="{{ asset('assets/images/logo.png') }}" height="33" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div class="user-details">
            <div class="text-center">
                <img src="{{ asset('assets/images/users/men.png') }}" alt="" class="rounded-circle">
            </div>
            <div class="user-info">
                    <h4 class="font-16 text-white">Traoré Mamadou</h4>
                    <span class="text-white"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
            </div>
        </div>

    <div id="sidebar-menu">
        <ul>
                <li class="menu-title text-white">General</li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="ti-dashboard"></i>
                        <span> Tableau de bord </span>
                    </a>
                </li>

                {{-- <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-desktop"></i> <span> Gestion du Site </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="ti-layout-grid2"></i> Home</a></li>
                        <li><a href="#"><i class="ti-gallery"></i> Bannière Publicitaire</a></li>
                        <li><a href="#"><i class="ti-light-bulb"></i> Offre Promotionnelle</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-crown"></i> <span> Gestion des Clients </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="ti-layout-grid2"></i> Home</a></li>
                        <li><a href="#"><i class="ti-plus"></i> Ajouter</a></li>
                        <li><a href="#"><i class="ti-layout-list-thumb"></i> Listes</a></li>
                        <li><a href="#"><i class="ti-search"></i> Recherche</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-shopping-cart-full"></i> <span> Comptabilité </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="ti-layout-grid2"></i> Home</a></li>
                        <li><a href="#"><i class="ti-exchange-vertical"></i> Les Transactions</a></li>
                        <li><a href="#"><i class="ti-bookmark-alt"></i> Les Contrats</a></li>
                        <li><a href="#"><i class="ti-clipboard"></i> Les Factures</a></li>
                        <li><a href="#"><i class="ti-receipt"></i> Les Réçus</a></li>
                        <li><a href="#"><i class="ti-check-box"></i> Les Bilans</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-id-badge"></i><span> Gestion Employés </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="ti-layout-grid2"></i> Home</a></li>
                        <li><a href="#"><i class="ti-plus"></i> Ajouter un Employé</a></li>
                        <li><a href="#"><i class="ti-user"></i> Les Employés</a></li>
                        <li><a href="#"><i class="ti-plus"></i> Ajouter un Rôle</a></li>
                        <li><a href="#"><i class="ti-direction-alt"></i> Les Rôles</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span> Nos Propriétaires </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="ti-layout-grid2"></i> Home</a></li>
                        <li><a href="#"><i class="ti-plus"></i> Ajouter</a></li>
                        <li><a href="#"><i class="ti-layout-list-thumb"></i> Liste</a></li>
                        <li><a href="#"><i class="ti-search"></i> Recherche</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-layout"></i><span> Gestion des Biens </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="ti-layout-grid2"></i> Home</a></li>
                        <li><a href="#"><i class="ti-plus"></i> Ajouter</a></li>
                        <li><a href="{{ route('biens.index') }}"><i class="ti-home"></i> Les Biens</a></li>
                        <li><a href="#"><i class="ti-search"></i> Recherche</a></li>
                    </ul>
                </li> --}}

                <li>
                    <a href="{{ route('villes.index') }}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span> Nos Villes </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('communes.index') }}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span> Nos Communes </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('quatiers.index') }}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span> Nos Quartiers </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('biens.index') }}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span> Nos Biens </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="ti-clipboard"></i>
                        <span> Les Factures </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="ti-receipt"></i>
                        <span> Les Reçus </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="ti-money"></i>
                        <span> Effectuer un Paiement </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="ti-bookmark-alt"></i>
                        <span> Les Contrats </span>
                    </a>
                </li>

                <li class="menu-title text-white">Extra</li>
                <li>
                    <a href="{{ route('sliders.index') }}" class="waves-effect">
                        <i class="ti-bookmark-alt"></i>
                        <span> Gestion du site </span>
                    </a>
                </li>

                {{-- <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-email"></i><span> Messagéries </span> <span class="badge badge-danger pull-right">2</span></a>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="ti-layout-grid2"></i>  Home</a></li>
                        <li><a href="#"><i class="ti-comment-alt"></i>  Nouveau Message</a></li>
                        <li><a href="#"><i class="ti-comments"></i>  Messages Reçus</a></li>
                        <li><a href="#"><i class="ti-check"></i>  Messages Envoyés</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-settings"></i><span> Parramètres </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="ti-layout-grid2"></i>  Home</a></li>
                        <li><a href="#"><i class="ti-panel"></i>  Etats</a></li>
                        <li><a href="#"><i class="ti-map-alt"></i>  Localisation</a></li>
                    </ul>
                </li> --}}

            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- end sidebarinner -->
</div>
