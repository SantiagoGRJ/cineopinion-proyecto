<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use Illuminate\Http\Request;

class AccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categoria.accion');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Accion $accion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accion $accion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accion $accion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accion $accion)
    {
        //
    }
}
