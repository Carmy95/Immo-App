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
    <div class="col-md-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Nos états</h4>
                <div class="row">
                    <div class="col-md-4"><a href="#" class="btn btn-outline-primary waves-effect waves-light"><i class="ti-plus"></i> Ajouter</a></div>
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
                            <th>Libellé</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td><a href="#" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a>
                        <a href="#" title="Supprimer" class="btn btn-outline-danger waves-effect waves-light"><i class="ti-trash"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td><a href="#" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a>
                        <a href="#" title="Supprimer" class="btn btn-outline-danger waves-effect waves-light"><i class="ti-trash"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td><a href="#" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a>
                        <a href="#" title="Supprimer" class="btn btn-outline-danger waves-effect waves-light"><i class="ti-trash"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Mark</td>
                        <td><a href="#" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a>
                        <a href="#" title="Supprimer" class="btn btn-outline-danger waves-effect waves-light"><i class="ti-trash"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Mark</td>
                        <td><a href="#" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a>
                        <a href="#" title="Supprimer" class="btn btn-outline-danger waves-effect waves-light"><i class="ti-trash"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h4>pagination</h4>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row
@endsection
