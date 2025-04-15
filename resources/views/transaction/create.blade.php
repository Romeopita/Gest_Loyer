@extends('master')

@section('content')

    <div class="container">
        
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title">
                    <span>Formulaire de transaction</span>
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
                            <label for="contrat">Contrat</label>
                            <select name="contrat" id="contrat" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Mois</label>
                            <input type="number" class="form-control" id="mois" placeholder="Nombre de mois"/>
                        </div>
                        <div class="form-group">
                            <label for="date_paiement">Date de paiement</label>
                            <input type="date" class="form-control" name="date_paiement" id="carte" placeholder="" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="carte">Mois couverts</label>
                            <input type="text" class="form-control" name="mois_couvert" id="mois_couvert" placeholder="Janvier-Décembre" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="mode_paiement">Mode de Paiement</label>
                            <select name="mode_paiement" id="mode_paiement" class="form-control">
                                <option value="Espèce">Espèce</option>
                                <option value="Espèce">Mixx by Yas</option>
                                <option value="Espèce">Flooz</option>
                            </select>
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