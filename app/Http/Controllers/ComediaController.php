<?php

namespace App\Http\Controllers;

use App\Models\Comedia;
use Illuminate\Http\Request;

class ComediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categoria.comedia');
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
    public function show(Comedia $comedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comedia $comedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comedia $comedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comedia $comedia)
    {
        //
    }
}
