@extends('master')

@section('content')

    <div class="container">
        
        <div class="card">
            <div class="card-header d-flex justify-content-between">
              <div class="card-title">
                <span>Formulaire</span>
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
                  <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville" placeholder="Entrez la ville" required>
                  </div>
                  <div class="form-group">
                    <label for="quartier">Quartier</label>
                    <input type="text" class="form-control" id="quartier" name="quartier" placeholder="Entrez le quartier">
                  </div>
                  <div class="form-group">
                    <label for="type">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Entrez la description" required>
                  </div>
                  <div class="form-group">
                    <label for="prix">Prix Mensuel</label>
                    <input type="number" class="form-control" id="prix" placeholder="Entrez le prix"/>
                  </div>
                  <div class="form-group">
                    <label for="statuts">statuts</label>
                    <select class="form-select" id="carosserie" name="carosserie" required>
                        <option value="Berline">Libre</option>
                        <option value="SUV">Occupé</option>
                    </select>
                  </div>
                </div>
            </div>
        </div>
    </div>

@endsection