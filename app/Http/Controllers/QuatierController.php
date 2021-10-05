<?php

namespace App\Http\Controllers;

use App\Models\Quatier;
use Illuminate\Http\Request;

class QuatierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.quarties.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.quarties.create');
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
     * @param  \App\Models\Quatier  $quatier
     * @return \Illuminate\Http\Response
     */
    public function show(Quatier $quatier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quatier  $quatier
     * @return \Illuminate\Http\Response
     */
    public function edit(Quatier $quatier)
    {
        return view('admin.quarties.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quatier  $quatier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quatier $quatier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quatier  $quatier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quatier $quatier)
    {
        //
    }
}
