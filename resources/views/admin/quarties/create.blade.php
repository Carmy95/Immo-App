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

                <h4 class="mt-0 header-title">Nos Quartiers</h4>
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
                            <th>#</th>
                            <th>Quartiers</th>
                            <th>Communes</th>
                            <th>Villes</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($data->isNotEmpty())
                            @foreach ($data as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->libelle }}</td>
                                    <td>{{ $item->commune->libelle }}</td>
                                    <td>{{ $item->commune->ville->libelle }}</td>
                                    <td><span title="Modifier" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></span>
                                    <span title="Supprimer" class="btn btn-outline-secondary"><i class="ti-trash"></i></span></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="5">Aucun Quatier enregistr?? pour le moment !!</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h4>{{ $data->links('vendor.pagination.bootstrap-4') }}</h4>
            </div>
        </div>
    </div> <!-- end col -->


    <div class="col-md-4">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Formulaire d'Ajout</h4>

                <form class="" method="POST" action="{{ route('quatiers.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Commune</label>
                        <div class="col-sm-10">
                            <select name="commune" class="form-control @error('commune') is-invalid @enderror">
                                @if ($commune->isNotEmpty())
                                    <option>Selectionner la Commune</option>
                                    @foreach ($commune as $item)
                                        <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                    @endforeach
                                @else
                                    <option>Aucun quatier enregistr??e pour le moment !</option>
                                @endif
                            </select>
                            @error('commune')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Intitul?? du Quatier</label>
                        <input type="text" name="quatier" class="form-control @error('quatier') is-invalid @enderror" required placeholder="Nom du quartier"/>
                        @error('quatier')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Enregistrer
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
