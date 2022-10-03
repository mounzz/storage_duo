<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMembresRequest;
use App\Http\Requests\UpdateMembresRequest;
use App\Models\Membres;

class MembresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Membres::all();
        return view('membres', compact('membres'));
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
     * @param  \App\Http\Requests\StoreMembresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function show(Membres $membres)
    {
        $membres = new Membre;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function edit(Membres $membres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMembresRequest  $request
     * @param  \App\Models\Membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMembresRequest $request, Membres $membres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membres $membres)
    {
        //
    }
}
