<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MenadzerResource;
use App\Models\Menadzer;
use Illuminate\Http\Request;

class MenadzerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menadzeri = Menadzer::all();
        return MenadzerResource::collection($menadzeri);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menadzer  $menadzer
     * @return \Illuminate\Http\Response
     */
    public function show(Menadzer $menadzer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menadzer  $menadzer
     * @return \Illuminate\Http\Response
     */
    public function edit(Menadzer $menadzer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menadzer  $menadzer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menadzer $menadzer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menadzer  $menadzer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menadzer $menadzer)
    {
        $menadzer->delete();
        return response()->json(['Menadžer je uspešno obrisan.', new MenadzerResource($menadzer)]);
    }
}
