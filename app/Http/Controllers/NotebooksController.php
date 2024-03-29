<?php

namespace App\Http\Controllers;

use App\Models\Notebooks;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNotebooksRequest;
use App\Http\Requests\UpdateNotebooksRequest;

class NotebooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreNotebooksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Notebooks $notebooks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notebooks $notebooks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotebooksRequest $request, Notebooks $notebooks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notebooks $notebooks)
    {
        //
    }
}
