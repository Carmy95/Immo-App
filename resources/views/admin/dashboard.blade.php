@extends('layouts.admins.master')
@section('css')
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
@endsection
@section('js')
<!--Morris Chart-->
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>

    <script src="{{ asset('assets/pages/dashborad.js') }}"></script>

@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h4 class="m-t-20 m-b-30">Administration</h4>
            <div class="card-deck-wrapper">
                <div class="card-deck">
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-layout"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Gestion des Biens</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-desktop"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Gestion du Site</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-shopping-cart-full"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Comptabilité</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4 class="m-t-20 m-b-30">Ressourses humaines</h4>
            <div class="card-deck-wrapper">
                <div class="card-deck">
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-crown"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Gestion des Clients</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-id-badge"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Gestion Employés</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-user"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Nos Propriétaires</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4 class="m-t-20 m-b-30">Mes Biens</h4>
            <div class="card-deck-wrapper">
                <div class="card-deck">
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-home"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Les Biens</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-bookmark-alt"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Mes Contrats</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4 class="m-t-20 m-b-30">Finances</h4>
            <div class="card-deck-wrapper">
                <div class="card-deck">
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-clipboard"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Mes Factures</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-money"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Effectuer un Paiement</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-receipt"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Mes Reçus</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4 class="m-t-20 m-b-30">Méssagerie</h4>
            <div class="card-deck-wrapper">
                <div class="card-deck">
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-comment-alt"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Nouveau Message</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-comments"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Messages Reçus</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card m-b-30">
                        <a href="#" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-check"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Messages Envoyés</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" >
        <div class="col-md-12  m-b-30"></div>
    </div>
@endsection
