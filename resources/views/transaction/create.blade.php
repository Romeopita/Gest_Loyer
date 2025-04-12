@extends('master')

@section('content')

    <div class="container">
        
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title">
                    <span>Formulaire</span>
                </div>
                <a href="{{ route('transactions.index') }}" class="btn btn-primary">
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
                            <label for="choix-personnalise">Client :</label>
                            <input class="form-control" list="options" id="choix-personnalise" name="choix" placeholder="Sélectionnez ou tapez...">
                            <datalist id="options">
                                @for ($index = 1; $index <= 10; $index++)
                                  <option value="Option {{ $index }}">
                                @endfor
                            </datalist>
                        </div>
                        <div class="form-group">
                            <label for="choix-personnalise">Bien</label>
                            <input class="form-control" list="options" id="choix-personnalise" name="choix" placeholder="Sélectionnez ou tapez...">
                            <datalist id="options">
                                @for ($index = 1; $index <= 10; $index++)
                                  <option value="Option {{ $index }}">
                                @endfor
                            </datalist>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-select" id="type" name="type" required>
                                <option value="Berline">Location</option>
                                <option value="SUV">Vente</option>
                                <option value="Hatchback">Commission</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Mois</label>
                            <input type="number" class="form-control" id="mois" placeholder="Nombre de mois"/>
                        </div>
                          <div class="form-group">
                            <label for="carte">Montant</label>
                            <input type="number" class="form-control" id="carte" placeholder="" value=""/>
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