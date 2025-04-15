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
                    <form action="{{ route('contrats.store') }}">
                        <div class="form-group">
                            <label for="client">Client</label>
                            <select name="client" id="client" class="form-control">
                                <option value=""></option>
                                <option value="1">Client 1</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="prenom">Bien</label>
                            <select name="bien" id="bien" class="form-control">
                                <option value=""></option>
                                <option value="1">Bien 1</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="date_debut">Date de début</label>
                            <input type="date" class="form-control" id="date_debut" name="date_debut" placeholder="Date"/>
                          </div>
                          <div class="form-group">
                            <label for="statut">statut</label>
                            <input type="text" class="form-control" id="carte" name="statut" placeholder=""/>
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