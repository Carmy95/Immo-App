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

                <h4 class="mt-0 header-title">Presentation des Sliders</h4>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @if ($slide->isNotEmpty())
                        @php $t = 0; @endphp
                            @foreach ($slide as $item)
                                @php $t = $t + 1; @endphp
                                <div class="carousel-item @if ($t == 1) active @endif">
                                    <img class="d-block w-100" src="{{ asset(''.$item->photo.'') }}" height="333" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="text-danger">{{ $item->titre }}</h5>
                                        <p>...</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h2 class="text-center">Aucun Slide enregistré pour le moment !! </h2>
                        @endif
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>


            </div>
        </div>
    </div> <!-- end col -->
</div>
<div class="row">
    <div class="col-md-12">
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
                    </thead>
                    <tbody>
                        @if($data->isNotEmpty())
                            @foreach ($data as $item)
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
                <h4>{{ $data->links('vendor.pagination.bootstrap-4') }}</h4>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row
@endsection
