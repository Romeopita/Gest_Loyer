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
                            <th scope="col">Adresse</th>
                            <th scope="col">type</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Statuts</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tomdè</td>
                            <td>Chambre</td>
                            <td>7000F</td>
                            <td>Libre</td>
                            <td>
                                <a href="" class="btn btn-primary">Modifier</a>
                                <a href="" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
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
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection