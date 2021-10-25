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

                <h4 class="mt-0 header-title">Nos villes</h4>
                <div class="row">
                    <div class="col-md-4"><span class="btn btn-outline-secondary"><i class="ti-plus"></i> Ajouter</span></div>
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
                            <th>Villes</th>
                            <th>Communes</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($datas->isNotEmpty())
                            @foreach ($datas as $item)
                                <tr>
                                    <th scope="row">{{ $data->id }}</th>
                                    <td>{{ $data->libelle }}</td>
                                    <td>{{ $data->ville->libelle }}</td>
                                    <td><a href="{{ route('communes.edit',$item->id) }}" title="Modifier" class="btn btn-outline-danger waves-effect waves-light"><i class="ti-pencil-alt"></i></a>
                                    <span title="Supprimer" class="btn btn-outline-secondary"><i class="ti-trash"></i></span></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="5">Aucune Commune enregistrée pour le moment !!</th>
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

                <form method="POST" action="{{ route('communes.update', $data->id) }}">
                    @csrf @method('PUT')
                    <div class="form-group">
                        <label>Ville</label>
                        <div class="col-sm-10">
                            <select name="ville" class="form-control @error('ville') is-invalid @enderror ">
                                @if ($ville->isNotEmpty())
                                    <option>Selectionner la ville</option>
                                    @foreach ($ville as $item)
                                        <option @if ($data->ville_id == $item->id) selected @endif value="{{ $item->id }}">{{ $item->libelle }}</option>
                                    @endforeach
                                @else
                                    <option>Aucune ville enregistrée pour le moment !</option>
                                @endif
                            </select>
                            @error('ville')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nom de la Commune</label>
                        <input type="text" class="form-control @error('commune') is-invalid @enderror " name="commune"  value="{{ $data->libelle }}" required placeholder="Nom de la commune"/>
                        @error('commune')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
