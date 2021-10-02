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

                <h4 class="mt-0 header-title">Nos rôles</h4>
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
                            <th>Libellé</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td><span title="Modifier" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></span>
                        <span title="Supprimer" class="btn btn-outline-secondary"><i class="ti-trash"></i></span></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td><span title="Modifier" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></span>
                        <span title="Supprimer" class="btn btn-outline-secondary"><i class="ti-trash"></i></span></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td><span title="Modifier" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></span>
                        <span title="Supprimer" class="btn btn-outline-secondary"><i class="ti-trash"></i></span></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Mark</td>
                        <td><span title="Modifier" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></span>
                        <span title="Supprimer" class="btn btn-outline-secondary"><i class="ti-trash"></i></span></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Mark</td>
                        <td><span title="Modifier" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></span>
                        <span title="Supprimer" class="btn btn-outline-secondary"><i class="ti-trash"></i></span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h4>pagination</h4>
            </div>
        </div>
    </div> <!-- end col -->


    <div class="col-md-4">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Formulaire d'Ajout</h4>

                <form class="" action="#">
                    <div class="form-group">
                        <label>Intitulé du rôle</label>
                        <input type="text" class="form-control" required placeholder="Nom du rôle"/>
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