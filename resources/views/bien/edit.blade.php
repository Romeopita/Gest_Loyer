@extends('master')

@section('content')

    <div class="container">
        
        <div class="card">
            <div class="card-header d-flex justify-content-between">
              <div class="card-title">
                <span>Formulaire de modification</span>
              </div>
                <a href="{{ route('biens.index') }}" class="btn btn-primary">
                    <span class="btn-label">
                    <i class="fa fa-arrow-left"></i>
                    </span>
                    Retour
                </a>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <form action="{{ route('biens.update', [$bien]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="ville">Ville</label>
                      <input type="text" class="form-control" id="ville" name="ville" value="{{ $bien->ville }}" placeholder="Entrez la ville" required>
                    </div>
                    <div class="form-group">
                      <label for="quartier">Quartier</label>
                      <input type="text" class="form-control" id="quartier" name="quartier" value="{{ $bien->quartier }}" placeholder="Entrez le quartier">
                    </div>
                    <div class="form-group">
                      <label for="secription">Description</label>
                      <input type="text" class="form-control" id="description" name="description" value="{{ $bien->description }}" placeholder="Entrez la description" required>
                    </div>
                    <div class="form-group">
                      <label for="prix_mensuel">Prix Mensuel</label>
                      <input type="number" class="form-control" id="prix_mensuel" name="prix_mensuel" value="{{ $bien->prix_mensuel }}" placeholder="Entrez le prix"/>
                    </div>
                    <div class="form-group">
                      <label for="statuts">statuts</label>
                      <select class="form-select" id="statuts" name="statuts" required>
                          <option value="Libre" @selected('Libre' == $bien->statuts)>Libre</option>
                          <option value="Occupé" @selected('Occupé' == $bien->statuts)>Occupé</option>
                      </select>
                    </div>
                    <div class="card-action">
                      <button class="btn btn-success">Modifier</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>

@endsection