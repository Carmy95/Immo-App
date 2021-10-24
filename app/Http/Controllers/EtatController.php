<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtatRequest;
use App\Models\Etat;
use Illuminate\Http\Request;

class EtatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Nos Etats';
        $data = Etat::paginate(5);
        return view('admin.etats.index',compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Nos Etats';
        $data = Etat::paginate(5);
        return view('admin.etats.create',compact('title','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtatRequest $request)
    {
        $data = new Etat();
        $data->libelle = $request->input('etat');
        $data->save();
        return redirect()->route('etats.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etat  $etat
     * @return \Illuminate\Http\Response
     */
    public function show(Etat $etat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etat  $etat
     * @return \Illuminate\Http\Response
     */
    public function edit(Etat $etat)
    {
        $title = 'Nos Etats';
        $datas = Etat::paginate('5');
        $data = Etat::findOrFail($etat->id);
        return view('admin.etats.edit',compact('title','datas','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etat  $etat
     * @return \Illuminate\Http\Response
     */
    public function update(EtatRequest $request, Etat $etat)
    {
        $data = Etat::findOrFail($etat->id);
        $data->update([
            'libelle' => $request->input('etat')
        ]);
        return redirect()->route('etats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etat  $etat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etat $etat)
    {
        Etat::destroy($etat->id);
        return redirect()->route('etats.index');
    }
}
