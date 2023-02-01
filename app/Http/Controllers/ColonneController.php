<?php

namespace App\Http\Controllers;

use App\Models\Colonne;
use App\Http\Requests\StoreColonneRequest;
use App\Http\Requests\UpdateColonneRequest;

class ColonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreColonneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreColonneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colonne  $colonne
     * @return \Illuminate\Http\Response
     */
    public function show(Colonne $colonne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Colonne  $colonne
     * @return \Illuminate\Http\Response
     */
    public function edit(Colonne $colonne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateColonneRequest  $request
     * @param  \App\Models\Colonne  $colonne
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateColonneRequest $request, Colonne $colonne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colonne  $colonne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colonne $colonne)
    {
        //
    }
}
