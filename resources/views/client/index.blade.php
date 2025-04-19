@extends('master')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title">Gestion de Clients</div>
                    <a href="{{ route('clients.create') }}" class="btn btn-primary">
                        <span class="btn-label">
                        <i class="fa fa-plus"></i>
                        </span>
                        Ajouter un client
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-head-bg-primary" id="basic-datatables">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Noms</th>
                            <th scope="col">Prénoms</th>
                            <th scope="col">Contacts</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                <td> {{ $client->id }} </td>
                                <td> {{ $client->nom }} </td>
                                <td> {{ $client->prenom }} </td>
                                <td> {{ $client->telephone }} </td>
                                <td>
                                    <a href="" class="btn btn-primary">Modifier</a>
                                    <a href="" class="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                            @endforeach
                        {{-- <tr>
                            <td>2</td>
                            <td>TOURE</td>
                            <td>Abdoul</td>
                            <td>90909090</td>
                            <td>
                                <a href="" class="btn btn-primary">Modifier</a>
                                <a href="" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>TOURE</td>
                            <td>Abdoul</td>
                            <td>90909090</td>
                            <td>
                                <a href="" class="btn btn-primary">Modifier</a>
                                <a href="" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>TOURE</td>
                            <td>Abdoul</td>
                            <td>90909090</td>
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