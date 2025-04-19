@extends('master')

@section('content')

    <div class="container">
        
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title">
                    <span>Formulaire</span>
                </div>
                <a href="{{ route('contrats.index') }}" class="btn btn-primary">
                    <span class="btn-label">
                    <i class="fa fa-arrow-left"></i>
                    </span>
                    Retour
                </a>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                    <form action="{{ route('contrats.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="prenom">Bien</label>
                          <select id="bien" class="form-control" name="bien_id">
                              <option value="">Sélectionner un bien</option>
                              @foreach ($biens as $bien)
                                <option value="{{ $bien->id }}"> {{ $bien->description }} {{ $bien->quartier }} {{ $bien->prix_mensuel }} {{ $bien->statuts }} </option>
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="client">Client</label>
                            <select id="client" class="form-control" name="client_id">
                                <option value="">Sélectionner un client</option>
                                @foreach ($clients as $client)
                                <option value="{{ $client->id }}"> {{ $client->nom }} {{ $client->prenom }} </option>
                                @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="date_debut">Date de début</label>
                            <input type="date" class="form-control" id="date_debut" name="date_debut" placeholder="Date"/>
                          </div>
                          <div class="form-group">
                            <label for="statut">statut</label>
                            <input type="text" class="form-control" id="statut" name="statut" placeholder="statut"/>
                          </div>
                          <div class="card-action">
                              <button class="btn btn-success">Submit</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection