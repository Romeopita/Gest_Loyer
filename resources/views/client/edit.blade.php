@extends('master')

@section('content')

    <div class="container">
        
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title">
                    <span>Formulaire de Modification</span>
                </div>
                <a href="{{ route('clients.create') }}" class="btn btn-primary">
                    <span class="btn-label">
                    <i class="fa fa-arrow-left"></i>
                    </span>
                    Retour
                </a>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                    <form action="">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name" value="" placeholder="Entrez votre nom"/>
                          </div>
                          <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="prenom" class="form-control" id="prenom" value="" placeholder="Enter votre Prénom"/>
                          </div>
                          <div class="form-group">
                            <label for="prenom">Téléphone</label>
                            <input type="tel" class="form-control" id="phone" value="" placeholder="Numéro de Téléphone"/>
                          </div>
                          <div class="form-group">
                            <label for="carte">CNI</label>
                            <input type="text" class="form-control" id="carte" value="" placeholder="xxxx-xxx-xxxx"/>
                          </div>
                          <div class="card-action">
                              <button class="btn btn-success">Submit</button>
                              <button class="btn btn-danger">Cancel</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection