<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Client;
use App\Models\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contrats = Contrat::with(["client", "bien"])->get();
        return view("contrat.index", compact("contrats"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        $biens = Bien::all();
        return view("contrat.create", compact("clients","biens"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Contrat::create($request->except("_token"));
        return to_route("contrats.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Contrat $contrat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contrat $contrat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contrat $contrat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contrat $contrat)
    {
        //
    }
}
