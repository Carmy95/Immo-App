<?php

namespace App\Http\Controllers;

use App\Models\Visiteur;
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Nos Visiteurs';
        $data = Visiteur::paginate(5);
        return view('admin.visiteurs.index',compact('data','title'));
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
     * @param  \App\Models\Visiteur  $visiteur
     * @return \Illuminate\Http\Response
     */
    public function show(Visiteur $visiteur)
    {
        $title = 'Nos Visiteurs';
        $datas = Visiteur::paginate('5');
        $data = Visiteur::findOrFail($visiteur->id);
        return view('admin.visiteurs.show',compact('data','datas','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visiteur  $visiteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Visiteur $visiteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visiteur  $visiteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visiteur $visiteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visiteur  $visiteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visiteur $visiteur)
    {
        Visiteur::destroy($visiteur->id);
        return redirect()->route('visiteurs.index');
    }
}
