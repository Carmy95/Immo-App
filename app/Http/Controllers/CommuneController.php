<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommuneRequest;
use App\Models\Commune;
use App\Models\Ville;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Nos Villes';
        $data = Commune::paginate('5');
        return view('admin.communes.index', compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Communes';
        $data = Commune::paginate(5);
        $ville = Ville::all();
        return view('admin.communes.create', compact('title','data','ville'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommuneRequest $request)
    {
        $data = new Commune();
        $data->libelle = $request->input('commune');
        $data->ville_id = $request->input('ville');
        $data->save();
        return redirect()->route('communes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function show(Commune $commune)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function edit(Commune $commune)
    {
        $title = 'Communes';
        $datas = Commune::paginate(5);
        $data = Commune::findOrFail($commune->id);
        $ville = Ville::all();
        return view('admin.communes.edit', compact('title','datas','data','ville'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commune $commune)
    {
        $data = Commune::findOrFail($commune->id);
        $data->update([
            'ville_id' => $request->input('ville'),
            'libelle' => $request->input('commune')
        ]);
        return redirect()->route('communes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commune $commune)
    {
        Commune::destroy($commune->id);
        return redirect()->route('communes.index');
    }
}
