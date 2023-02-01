<?php

namespace App\Http\Controllers;

use App\Models\Enregistrement;
use App\Http\Requests\StoreEnregistrementRequest;
use App\Http\Requests\UpdateEnregistrementRequest;

class EnregistrementController extends Controller
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
     * @param  \App\Http\Requests\StoreEnregistrementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnregistrementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enregistrement  $enregistrement
     * @return \Illuminate\Http\Response
     */
    public function show(Enregistrement $enregistrement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enregistrement  $enregistrement
     * @return \Illuminate\Http\Response
     */
    public function edit(Enregistrement $enregistrement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnregistrementRequest  $request
     * @param  \App\Models\Enregistrement  $enregistrement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnregistrementRequest $request, Enregistrement $enregistrement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enregistrement  $enregistrement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enregistrement $enregistrement)
    {
        //
    }
}
