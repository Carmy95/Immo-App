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

{{-- gestion des employés debut --}}
@if($menu == 'personnel')
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="mini-stat clearfix bg-white">
                <span class="mini-stat-icon"><i class="ti-shopping-cart"></i></span>
                <div class="mini-stat-info text-right text-light">
                    <span class="counter text-white">15852</span> Total Personnels
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="mini-stat clearfix bg-success">
                <span class="mini-stat-icon"><i class="ti-user"></i></span>
                <div class="mini-stat-info text-right text-light">
                    <span class="counter text-white">956</span> Femmes
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="mini-stat clearfix bg-orange">
                <span class="mini-stat-icon"><i class="ti-shopping-cart-full"></i></span>
                <div class="mini-stat-info text-right text-light">
                    <span class="counter text-white">5210</span> Hommes
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="mini-stat clearfix bg-info">
                <span class="mini-stat-icon"><i class="ti-stats-up"></i></span>
                <div class="mini-stat-info text-right text-light">
                    <span class="counter text-white">20544</span> Total Rôles
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{-- <h4 class="m-t-20 m-b-30">Localisation</h4> --}}
            <div class="card-deck-wrapper">
                <div class="card-deck">
                    <div class="card m-b-30">
                        <a href="{{ route('villes.index') }}" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-plus"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Nos Villes</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card m-b-30">
                        <a href="{{ route('communes.index') }}" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-layout-list-thumb"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Nos Communes</h4></div>
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
            <h4 class="m-t-20 m-b-30"></h4>
            <div class="card-deck-wrapper">
                <div class="card-deck">
                    <div class="card m-b-30">
                        <a href="{{ route('quatiers.index') }}" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-plus"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Nos Quartiers</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card m-b-30">
                        <a href="{{ route('biens.index') }}" class="waves-effect" style="color : black;">
                            <div class="card-body">
                                <div class="row" style="padding:50px 0px 50px 0px">
                                    <div class="col-md-3" style="text-align: center">
                                        <h4 class="card-title font-20 mt-0"><i style="font-size: 50px;" class="ti-layout-list-thumb"></i></h4></div>
                                    <div class="col-md-9"><h4 class="card-title font-50 mt-0">Nos Biens</h4></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- gestion des employés fin --}}
<div class="row" >
    <div class="col-md-12  m-b-30"></div>
</div>

@endsection
