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
                            <th>Intitilé</th>
                            <th>Superficie (m2)</th>
                            <th>Prix</th>
                            <th>Etat</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($datas->isNotEmpty())
                            @foreach ($datas as $item)
                            <tr>
                                <th>{{ $item->id }}</th>
                                <td>{{ $item->libelle }}</td>
                                <td>{{ $item->superficie }}</td>
                                <td>{{ $item->prix }}</td>
                                <td>{{ $item->etat->libelle }}</td>
                                <td><span title="voir" class="btn btn-outline-secondary"><i class="ti-eye"></i></span>
                                    <a href="{{ route('biens.edit',$item->id) }}" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a>
                                <span title="Supprimer" class="btn btn-outline-secondary"><i class="ti-trash"></i></span></td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="6">Aucun Bien enregistré pour le moment !!</th>
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

                <form class="" action="{{ route('biens.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="form-group">
                        <label>Titre</label>
                        <input type="text" name="titre" value="{{ $data->libelle }}" class="form-control @error('titre') is-invalid @enderror" required placeholder="Ex : villa à vendre ou Masoin à louer"/>
                        @error('titre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Superficie (m2)</label>
                        <input type="number" name="superficie" value="{{ $data->superficie }}" class="form-control @error('superficie') is-invalid @enderror" required placeholder="Entrer la superficie en mettre carré (m2)"/>
                        @error('superficie')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Quatier</label>
                        <div class="col-sm-10">
                            <select name="quatier" class="form-control @error('quatier') is-invalid @enderror">
                                @if ($quatier->isNotEmpty())
                                    <option>Selectionner le qutier</option>
                                    @foreach ($quatier as $item)
                                        <option @if($data->quatier_id == $item->id) selected @endif value="{{ $item->id }}">{{ $item->libelle }}</option>
                                    @endforeach
                                @else
                                    <option>Aucun quatier enregistrée pour le moment !</option>
                                @endif
                            </select>
                            @error('quatier')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description du Bien</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" required placeholder="Entrer la description du bien" cols="30" rows="10">{{ $data->description }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Statut du Bien</label>
                        <div class="col-sm-10">
                            <select name="etat" class="form-control @error('etat') is-invalid @enderror">
                                @if ($etat->isNotEmpty())
                                    <option>Selectionner le statut</option>
                                    @foreach ($etat as $item)
                                        <option @if($data->etat_id == $item->id) selected @endif value="{{ $item->id }}">{{ $item->libelle }}</option>
                                    @endforeach
                                @else
                                    <option>Aucun quatier enregistrée pour le moment !</option>
                                @endif
                            </select>
                            @error('etat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Prix</label>
                        <input type="number" name="prix" value="{{ $data->prix }}" class="form-control @error('prix') is-invalid @enderror" required />
                        @error('prix')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Echéance (Fréquence de paiement)</label>
                        <div class="col-sm-10">
                            <select name="echeance" class="form-control @error('echeance') is-invalid @enderror">
                                    <option @if($data->echance == '') selected @endif value="">Auncn</option>
                                    <option @if($data->echance == 'M') selected @endif value="M" >Par Mois</option>
                                    <option @if($data->echance == 'S') selected @endif value="S">Par Semaine</option>
                                    <option @if($data->echance == 'J') selected @endif value="J">Par Jour</option>
                                    <option @if($data->echance == 'A') selected @endif value="A">Par an</option>
                            </select>
                            @error('echeance')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre de Chambre</label>
                                    <input type="number" name="chambre" value="{{$data->chambre }}" class="form-control @error('prix') is-invalid @enderror"/>
                                    @error('chambre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre de salon</label>
                                    <input type="number" name="sejour" value="{{$data->sejour }}" class="form-control @error('sejour') is-invalid @enderror"/>
                                    @error('sejour')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre de toillet</label>
                                    <input type="number" name="wc" value="{{$data->wc }}" class="form-control @error('wc') is-invalid @enderror" />
                                    @error('wc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre de cuisine</label>
                                    <input type="number" name="cuisine" value="{{$data->cuisine }}" class="form-control @error('cuisine') is-invalid @enderror" />
                                    @error('cuisine')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre de salle à manger</label>
                                    <input type="number" name="manger" value="{{$data->salle_manger }}" class="form-control @error('manger') is-invalid @enderror"  />
                                    @error('manger')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre de garage</label>
                                    <input type="number" name="garage"  value="{{$data->garage }} class="form-control @error('garage') is-invalid @enderror" />
                                    @error('garage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" />
                        @error('photo')
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
