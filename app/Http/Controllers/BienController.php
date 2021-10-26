<?php

namespace App\Http\Controllers;

use App\Http\Requests\BienRequest;
use App\Models\Bien;
use App\Models\Etat;
use App\Models\Quatier;
use Illuminate\Http\Request;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Nos Biens';
        $data = Bien::paginate('5');
        return view('admin.biens.index', compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quatier = Quatier::all();
        $title = 'Nos Biens';
        $etat = Etat::all();
        $data = Bien::paginate('5');
        return view('admin.biens.create', compact('title','data','quatier','etat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BienRequest $request)
    {
        $data = new Bien();
        $data->description =$request->input('description');
        $data->quatier_id =$request->input('quatier');
        $data->etat_id =$request->input('etat');
        $data->libelle =$request->input('titre');
        if ($request->input('chambre') > 0 ) {
            $data->chambre = $request->input('chambre');
        }
        if ($request->input('garage') > 0) {
            $data->garage = $request->input('garage');
        }
        if ($request->input('manger') > 0) {
            $data->salle_manger = $request->input('manger');
        }
        if ($request->input('sejour') > 0) {
            $data->sejour = $request->input('sejour');
        }
        if ($request->input('cuisine') > 0) {
            $data->cuisine =$request->input('cuisine');
        }
        if ($request->input('wc') > 0) {
            $data->wc = $request->input('wc');
        }
        if ($request->input('prix') > 0 ) {
            $data->prix = $request->input('prix');
        }
        if ($request->input('superficie') > 0 ) {
            $data->superficie = $request->input('superficie');
        }
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $images =['jpg','jpeg','png'];
            if (in_array($extension,$images)) {
                $files = $file->store('Biens', 'public');
                $photo = 'storage/'.$files;
            }else {
                session()->flash('photo', 'L\'extenxion de votre photo n\'est pas un .png ou .jpg ou .jpeg');
                return redirect()->route('erreur');
            }
        }else {
            $photo = 'assets/images/bg-1.png';
        }
        $data->photo = $photo;
        $data->save();
        return redirect()->route('biens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function show(Bien $bien)
    {
        $title = 'Nos Biens';
        $datas = Bien::paginate('5');
        $data = Bien::findOrFail($bien->id);
        return view('admin.biens.show', compact('title','data','datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function edit(Bien $bien)
    {
        $quatier = Quatier::all();
        $title = 'Nos Biens';
        $etat = Etat::all();
        $datas = Bien::paginate('5');
        $data = Bien::findOrFail($bien->id);
        return view('admin.biens.edit', compact('title','datas','data','quatier','etat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function update(BienRequest $request, Bien $bien)
    {
        $chambre = $garage = $sejour = $cuisine = null;
        $wc = $prix = $superficie = $salle_manger = null;
        $data = Bien::findOrfail($bien->id);
        if ($request->input('chambre') > 0 ) {
            $chambre = $request->input('chambre');
        }
        if ($request->input('garage') > 0) {
            $garage = $request->input('garage');
        }
        if ($request->input('manger') > 0) {
            $salle_manger = $request->input('manger');
        }
        if ($request->input('sejour') > 0) {
            $sejour = $request->input('sejour');
        }
        if ($request->input('cuisine') > 0) {
            $cuisine =$request->input('cuisine');
        }
        if ($request->input('wc') > 0) {
            $wc = $request->input('wc');
        }
        if ($request->input('prix') > 0 ) {
            $prix = $request->input('prix');
        }
        if ($request->input('superficie') > 0 ) {
            $superficie = $request->input('superficie');
        }
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $images =['jpg','jpeg','png'];
            if (in_array($extension,$images)) {
                $files = $file->store('Biens', 'public');
                $photo = 'storage/'.$files;
            }else {
                session()->flash('photo', 'L\'extenxion de votre photo n\'est pas un .png ou .jpg ou .jpeg');
                return redirect()->route('erreur');
            }
        }else {
            $photo = $data->photo;
        }
        $data->update([
            'description' => $request->input('description'),
            'quatier_id' => $request->input('quatier'),
            'etat_id' => $request->input('etat'),
            'libelle' => $request->input('titre'),
            'chambre' => $chambre,
            'garage' => $garage,
            'salle_manger' => $salle_manger,
            'sejour' => $sejour,
            'prix' => $prix,
            'superficie' => $superficie,
            'wc' => $wc,
            'cuisine' => $cuisine,
            'photo' => $photo
    ]);
        return redirect()->route('biens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bien $bien)
    {
        Bien::destroy($bien->id);
        return redirect()->route('biens.index');
    }
}
