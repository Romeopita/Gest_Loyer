<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biens = Bien::all();
        return view("bien.index", compact("biens"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("bien.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Bien::create($request->except("_token"));
        return to_route("biens.index")->with("success", "Bien ajouté avec succès");
    }

    /**
     * Display the specified resource.
     */
    public function show(Bien $bien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bien $bien)
    {
        return view("bien.edit", compact("bien"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bien $bien)
    {
        // dd($request->all());
        $bien->update($request->except("_token", "_method"));
        return to_route("biens.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bien $bien)
    {
        $bien->delete();
        return to_route("biens.index");
    }
}
