<?php

namespace App\Http\Controllers;

use App\Models\Terror;
use Illuminate\Http\Request;

class TerrorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categoria.terror');
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
    public function show(Terror $terror)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Terror $terror)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Terror $terror)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Terror $terror)
    {
        //
    }
}
