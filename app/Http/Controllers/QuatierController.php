<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuatierRequest;
use App\Models\Commune;
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
        $title = 'Nos Quatires';
        $data = Quatier::paginate('5');
        return view('admin.quarties.index', compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Nos Quatires';
        $data = Quatier::paginate(5);
        $commune = Commune::all();
        return view('admin.quarties.create', compact('title','data','commune'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuatierRequest $request)
    {
        $data = new Quatier();
        $data->libelle = $request->input('quatier');
        $data->commune_id = $request->input('commune');
        $data->save();
        return redirect()->route('quatiers.index');
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
        $title = 'Communes';
        $datas = Quatier::paginate(5);
        $data = Quatier::findOrFail($quatier->id);
        $commune = Commune::all();
        return view('admin.quarties.edit', compact('title','datas','data','commune'));
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
        $data = Quatier::findOrFail($quatier->id);
        $data->update([
            'quatier_id' => $request->input('commune'),
            'libelle' => $request->input('quatier')
        ]);
        return redirect()->route('quatier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quatier  $quatier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quatier $quatier)
    {
        Quatier::destroy($quatier->id);
        return redirect()->route('quatiers.index');
    }
}
