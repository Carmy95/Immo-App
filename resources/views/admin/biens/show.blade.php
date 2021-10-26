@extends('layouts.admins.master')
@section('css')

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('js')

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>
@endsection
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Nos Biens</h4>
                <div class="row">
                    <div class="col-md-4"><a href="{{ route('biens.create') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="ti-plus"></i> Ajouter</a></div>
                    <div class="col-md-8">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-10"><input type="text" placeholder="Recherche" class="form-control"></div>
                                <div class="col-md-2"><button type="submit" class="btn btn-outline-primary waves-effect waves-light"><i class="ti-search"></i></button></div>
                            </div>
                        </form>
                    </div>
                </div><br>

                    <table class="table table-bordered table-hover" style="text-align: center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Intitilé</th>
                                <th>Superficie (m2)</th>
                                <th>Prix</th>
                                <th>Etat</th>
                                <th colspan="3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($datas->isNotEmpty())
                                @foreach ($datas as $item)
                                    <tr>
                                        <th>{{ $item->id }}</th>
                                        <td>{{ $item->libelle }}</td>
                                        <td>{{ $item->superficie }}</td>
                                        <td>{{ $item->prix }}</td>
                                        <td>{{ $item->etat->libelle }}</td>
                                        <td><a href="{{ route('biens.show',$item->id) }}" title="voir" class="btn btn-outline-success waves-effect waves-light"><i class="ti-eye"></i></a></td>
                                        <td><a href="{{ route('biens.edit',$item->id) }}" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a></td>
                                        <td><form method="post" action="{{ route('biens.destroy', $item->id) }}"
                                            onsubmit="return confirm('Etre vous sûre de vouloir Supprimer cet bien ?') ">
                                            {{ csrf_field() }}{{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-outline-danger waves-effect waves-light" title="Supprimer"><i class="ti-trash"></i></button>
                                            </form></td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="8">Aucun bien enregistré pour le moment !</th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
            </div>
            <div class="card-footer">
                <h4>{{ $datas->links('vendor.pagination.bootstrap-4') }}</h4>
            </div>
        </div>
    </div> <!-- end col --> <!-- end col -->


    <div class="col-md-4">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Détails</h4>
                <div style="width: 400px; text-align:center" class="text-center">
                    <img src="{{ asset(''.$data->photo.'') }}" height="100px" width="400px" alt="" class="img-fluid">
                </div>
                <div class="user-details">
                    <div class="user-info">
                            <h1 class="font-20 text-danger">{{ strtoupper($data->etat->libelle) }}</h1>
                    </div>
                    <div class="user-info">
                            <h4 class="font-16"></h4>
                    </div>
                    <div class="user-info">
                            <h4 class="font-16"> <span>Intitulé : </span> {{ $data->libelle }}</h4>
                    </div>
                    <div class="user-info">
                            <h4 class="font-16"> <span>Localisation : </span> {{ $data->quatier->libelle }}, {{ $data->quatier->commune->libelle }}, {{ $data->quatier->commune->ville->libelle }} </h4>
                    </div>
                </div>
                <div class="user-info">
                    <h3>Caractéristiques</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Prix = {{ $data->prix }} FCFA
                                        @if($data->echance == 'M')
                                            / Mois
                                        @elseif($data->echance == 'S')
                                            / Semaine
                                        @elseif($data->echance == 'J')
                                            / Jour
                                        @elseif($data->echance == 'A')
                                            / An
                                        @endif
                                    </th>
                                </tr>
                                @if($data->chambre != '')
                                    <tr>
                                        <th>Chambre = {{ $data->chambre }}</th>
                                    </tr>
                                @endif
                                @if($data->cuisine != '')
                                    <tr>
                                        <th>Cuisine = {{ $data->cuisine }}</th>
                                    </tr>
                                @endif
                                @if($data->sejour != '')
                                    <tr>
                                        <th>Salon = {{ $data->sejour }}</th>
                                    </tr>
                                @endif
                            </thead>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Superficiie = {{ $data->superficie }} m2</th>
                                </tr>
                                @if($data->salle_manger != '')
                                    <tr>
                                        <th>Salle à manger = {{ $data->salle_manger }}</th>
                                    </tr>
                                @endif
                                @if($data->wc != '')
                                    <tr>
                                        <th>Toillet = {{ $data->wc }}</th>
                                    </tr>
                                @endif
                                @if($data->garage != '')
                                    <tr>
                                        <th>Garage = {{ $data->garage }}</th>
                                    </tr>
                                @endif
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> <!-- end row
@endsection
