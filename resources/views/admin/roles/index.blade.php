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

                <h4 class="mt-0 header-title">Nos rôles</h4>
                <div class="row">
                    <div class="col-md-4"><a href="{{ route('roles.create') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="ti-plus"></i> Ajouter</a></div>
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
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($data->isNotEmpty())
                            @foreach ($data as $item )
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->libelle }}</td>
                                    <td><a href="{{ route('roles.edit',$item->id) }}" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a></td>
                                    <td><form method="post" action="{{ route('roles.destroy', $item->id) }}"
                                        onsubmit="return confirm('Etre vous sûre de vouloir Supprimer cet rôle ?') ">
                                          {{ csrf_field() }}{{ method_field('DELETE') }}
                                          <button type="submit" class="btn btn-outline-danger waves-effect waves-light" title="Supprimer"><i class="ti-trash"></i></button>
                                        </form></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="4">Aucn rôle enregistré pour le moment !!</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h4>{{ $data->links() }}</h4>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row
@endsection
