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

                <h4 class="mt-0 header-title">Nos Visiteurs</h4>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <form action="#">
                            <div class="row">
                            <div class="col-md-10"><input type="text" placeholder="Recherche" class="form-control"></div>
                            <div class="col-md-2"><button type="submit" class="btn btn-outline-primary waves-effect waves-light"><i class="ti-search"></i></button></div>
                            </div>
                            </form>
                        </div>
                    </div> <br>

                <table class="table table-bordered table-hover" style="text-align: center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Civilité</th>
                            <th>Nom</th>
                            <th>Prénoms</th>
                            <th>Email</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($datas->isNotEmpty())
                            @foreach ($datas as $item )
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>@if ($item->sexe == 'H') M. @else Mme. / Mlle. @endif</td>
                                    <td>{{ $item->nom }}</td>
                                    <td>{{ $item->prenoms }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td><a href="{{ route('visiteurs.show',$item->id) }}" title="Voir" class="btn btn-outline-success waves-effect waves-light"><i class="ti-eye"></i></a>
                                    <td><form method="post" action="{{ route('visiteurs.destroy', $item->id) }}"
                                        onsubmit="return confirm('Etre vous sûre de vouloir Supprimer cet visiteur ?') ">
                                          {{ csrf_field() }}{{ method_field('DELETE') }}
                                          <button type="submit" class="btn btn-outline-danger waves-effect waves-light" title="Supprimer"><i class="ti-trash"></i></button>
                                        </form></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="7">Aucn visiteur enregistré pour le moment !!</th>
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

                <h4 class="mt-0 header-title">Fiche d'Identification</h4>
                <div class="user-details">
                    <div class="text-center">
                        @if ($data->sexe == 'H')
                            <img src= "{{ asset('assets/images/users/men.png') }}" alt="" class="rounded-circle">
                        @else
                            <img src="{{ asset('assets/images/users/women.jpg') }}" alt="" class="rounded-circle">
                        @endif
                    </div>
                    <div class="user-info">
                            <h4 class="font-16"><span>@if ($data->sexe == 'H') M. @else Mme. / Mlle. @endif </span> {{ Strtoupper($data->nom).' '. $data->prenoms }}</h4>
                    </div>
                    <div class="user-info">
                            <h4 class="font-16"> <span>Adresse Email : </span> {{ $data->email }}</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> <!-- end row
@endsection
