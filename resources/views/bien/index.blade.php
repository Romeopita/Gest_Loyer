@extends('master')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title">Gestion de biens immobiliers</div>
                    <a href="{{ route('biens.create') }}" class="btn btn-primary">
                        <span class="btn-label">
                        <i class="fa fa-plus"></i>
                        </span>
                        Ajouter un bien
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-head-bg-primary" id="basic-datatables">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ville</th>
                                <th scope="col">Quartier</th>
                                <th scope="col">Description</th>
                                <th scope="col">Prix mensuel</th>
                                <th scope="col">Statuts</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($biens as $bien)
                                <tr>
                                    <td> {{ $bien->id }} </td>
                                    <td> {{ $bien->ville }} </td>
                                    <td> {{ $bien->quartier }} </td>
                                    <td> {{ $bien->description }} </td>
                                    <td> {{ $bien->prix_mensuel }}F CFA </td>
                                    <td> {{ $bien->statuts }} </td>
                                    <form action="{{ route('biens.destroy', [$bien]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning me-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                <a href="" class="btn btn-sm btn-primary me-2">Voir plus</a>
                                            </td>
                                        </form>
                                </tr>                                
                            @endforeach
                            {{-- <tr>
                                <td>2</td>
                                <td>Chaminade</td>
                                <td>Chambre-Salon</td>
                                <td>15000F</td>
                                <td>Occupé</td>
                                <td>
                                    <a href="" class="btn btn-primary">Modifier</a>
                                    <a href="" class="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Kara-Sud</td>
                                <td>Boutique</td>
                                <td>10000F</td>
                                <td>Occupé</td>
                                <td>
                                    <a href="" class="btn btn-primary">Modifier</a>
                                    <a href="" class="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tomdè</td>
                                <td>Chambre</td>
                                <td>7000F</td>
                                <td>Libre</td>
                                <td>
                                    <a href="" class="btn btn-primary">Modifier</a>
                                    <a href="" class="btn btn-danger">Supprimer</a>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection