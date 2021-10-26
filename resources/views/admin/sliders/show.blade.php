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

                <h4 class="mt-0 header-title">Nos Sliders (Affiches Publicitaires)</h4>
                <div class="row">
                    <div class="col-md-4"><a href="{{ route('sliders.create') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="ti-plus"></i> Ajouter</a></div>
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
                                <tr>
                                    <th rowspan="2">#</th>
                                    <th rowspan="2">Titre</th>
                                    <th colspan="2">date</th>
                                    <th rowspan="2">Activer</th>
                                    <th rowspan="2" colspan="3">Actions</th>
                                </tr>
                                <tr>
                                    <th>debut</th>
                                    <th>fin</th>
                                </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @if($datas->isNotEmpty())
                                @foreach ($datas as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->titre }}</td>
                                    <td>{{ $item->date_debut }}</td>
                                    <td>{{ $item->date_fin }}</td>
                                    <td>
                                        @if($item->active == 0)
                                            <span><i class="ti-na h2 text-danger"></i></span>
                                        @else
                                            <span><i class="ti-check-box h2 text-success"></i></span>
                                        @endif
                                    </td>
                                    <td><a href="{{ route('sliders.show',$item->id) }}" title="voir" class="btn btn-outline-success waves-effect waves-light"><i class="ti-eye"></i></a></td>
                                    <td><a href="{{ route('sliders.edit',$item->id) }}" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a></td>
                                    <td><form method="post" action="{{ route('sliders.destroy', $item->id) }}"
                                        onsubmit="return confirm('Etre vous sûre de vouloir Supprimer cet slide ?') ">
                                          {{ csrf_field() }}{{ method_field('DELETE') }}
                                          <button type="submit" class="btn btn-outline-danger waves-effect waves-light" title="Supprimer"><i class="ti-trash"></i></button>
                                        </form></td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="8">Aucun slide enregistré pour le moment !!</th>
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
                            <h4 class="font-16"></h4>
                    </div>
                    <div class="user-info">
                            <h4 class="font-16"> <span>Titre : </span> {{ $data->titre }}</h4>
                    </div>
                    <div class="user-info">
                            <h4 class="font-16"> <span>Afficher du : </span> {{ $data->date_debut }} @if ($data->date_fin == '') @else au {{ $data->date_fin }} @endif </h4>
                    </div>
                    <div class="user-info">
                            <h4 class="font-16"> <span>Publier : </span> @if ($data->active == 1) Oui @else Non @endif</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> <!-- end row
@endsection
