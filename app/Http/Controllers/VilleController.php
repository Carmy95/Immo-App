<?php

namespace App\Http\Controllers;

use App\Http\Requests\VilleRequest;
use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Nos Villes';
        $data = Ville::paginate('5');
        return view('admin.villes.index',compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Nos Villes';
        $data = Ville::paginate('5');
        return view('admin.villes.create',compact('title','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VilleRequest $request)
    {
        $data = new Ville();
        $data->libelle = $request->input('ville');
        $data->save();
        return redirect()->route('villes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function show(Ville $ville)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function edit(Ville $ville)
    {
        $title = 'Nos Villes';
        $datas = Ville::paginate('5');
        $data = Ville::findOrFail($ville->id);
        return view('admin.villes.edit',compact('title','datas','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function update(VilleRequest $request, Ville $ville)
    {
        $data = Ville::findOrFail($ville->id);
        $data->update([
            'libelle' => $request->input('ville')
        ]);
        return redirect()->route('villes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ville $ville)
    {
        Ville::destroy($ville->id);
        return redirect()->route('villes.index');
    }
}
