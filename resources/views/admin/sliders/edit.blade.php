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
                    <div class="col-md-4"><span class="btn btn-outline-secondary"><i class="ti-plus"></i> Ajouter</span></div>
                    <div class="col-md-8">
                        <form action="#">
                        <div class="row">
                            <div class="col-md-10"><input type="text" disabled placeholder="Recherche" class="form-control"></div>
                            <div class="col-md-2"></div>
                        </div>
                        </form>
                    </div>
                </div><br>

                <table class="table table-bordered table-hover" style="text-align: center">
                    <thead>
                        <tr>
                            <th rowspan="2">#</th>
                            <th rowspan="2">Titre</th>
                            <th rowspan="2">Activer</th>
                            <th colspan="2">date</th>
                            <th rowspan="2">Actions</th>
                        </tr>
                        <tr>
                            <th>debut</th>
                            <th>fin</th>
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
                                    <td><span title="voir" class="btn btn-outline-secondary"><i class="ti-eye"></i></span>
                                        <a href="{{ route('sliders.edit',$item->id) }}" title="Modifier" class="btn btn-outline-danger waves-effect waves-light"><i class="ti-pencil-alt"></i></a>
                                    <span title="Supprimer" class="btn btn-outline-secondary"><i class="ti-trash"></i></span></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="6">Aucun slide enregistré pour le moment !!</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h4>{{ $datas->links('vendor.pagination.bootstrap-4') }}</h4>
            </div>
        </div>
    </div> <!-- end col -->


    <div class="col-md-4">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Formulaire de Modification</h4>

                <form method="POST" action="{{ route('sliders.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="form-group">
                        <label>Titre</label>
                        <input type="text" name="titre" value="{{ $data->titre }}" class="form-control" required placeholder="Titre"/>
                    </div>
                    <div class="form-group">
                        <label>Date Debut</label>
                        <input type="date" name="date_debut" value="{{ $data->date_debut }}" class="form-control" required placeholder="Nom du rôle"/>
                    </div>
                    <div class="form-group">
                        <label>Date Fin</label>
                        <input type="date" name="date_fin" value="{{ $data->date_fin }}" class="form-control" required placeholder="Nom du rôle"/>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Activer</label>
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input name="active" type="checkbox" @if($data->active != 0) checked @endif
                                  class="custom-control-input" id="customCheck1" value="1" data-parsley-multiple="groups"
                                       data-parsley-mincheck="2">
                                <label class="custom-control-label" for="customCheck1">Oui</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Modifier
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                Annuler
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div> <!-- end row
@endsection
