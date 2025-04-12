@extends('master')

@section('content')

    <div class="container">
        
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title">
                    <span>Formulaire</span>
                </div>
                <a href="{{ route('clients.index') }}" class="btn btn-primary">
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
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom"/>
                          </div>
                          <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="prenom" class="form-control" id="prenom" placeholder="Enter votre Prénom"/>
                          </div>
                          <div class="form-group">
                            <label for="num_tel">Téléphone</label>
                            <input type="tel" class="form-control" id="num_tel" name="num_tel" placeholder="Numéro de Téléphone"/>
                          </div>
                          <div class="form-group">
                            <label for="carte">CNI</label>
                            <input type="text" class="form-control" id="carte" name="carte" placeholder="xxxx-xxx-xxxx"/>
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