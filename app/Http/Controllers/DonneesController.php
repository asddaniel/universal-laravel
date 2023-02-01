<?php

namespace App\Http\Controllers;

use App\Models\Donnees;
use App\Http\Requests\StoreDonneesRequest;
use App\Http\Requests\UpdateDonneesRequest;

class DonneesController extends Controller
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
     * @param  \App\Http\Requests\StoreDonneesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonneesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donnees  $donnees
     * @return \Illuminate\Http\Response
     */
    public function show(Donnees $donnees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donnees  $donnees
     * @return \Illuminate\Http\Response
     */
    public function edit(Donnees $donnees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonneesRequest  $request
     * @param  \App\Models\Donnees  $donnees
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonneesRequest $request, Donnees $donnees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donnees  $donnees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donnees $donnees)
    {
        //
    }
}
