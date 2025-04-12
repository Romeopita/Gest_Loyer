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
                    <select class="form-select" id="ville" name="ville" required>
                        <option value="Berline">Kara</option>
                        <option value="SUV">Bafilo</option>
                        <option value="Hatchback">Kétao</option>
                        <option value="Break">Niamtougou</option>
                        <option value="Cabriolet">Pya</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="quartier">Quartier</label>
                    <input type="text" class="form-control" id="quartier" name="quartier" placeholder="Entrez le quartier">
                  </div>
                  <div class="form-group">
                    <label for="type">Type</label>
                    <select class="form-select" id="type" name="type" value="" required>
                        <option value=""></option>
                        <option value="Chambre">Chambre</option>
                        <option value="Chambre-Salon">Chambre-Salon</option>
                        <option value="Villa/appartement">Villa/appartement</option>
                        <option value="Boutique<">Boutique</option>
                        <option value="Terrain">Terrain</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="prix">Prix</label>
                    <input type="number" class="form-control" id="prix" placeholder="Entrez le prix"/>
                  </div>
                  <div class="form-group">
                    <label for="carte">statuts</label>
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