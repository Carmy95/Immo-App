<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Nos Sliders';
        $slide = Slider::all()->sortDesc();
        $data = Slider::paginate(5);
        return view('admin.sliders.index',compact('title','data','slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Nos Sliders';
        $data = Slider::paginate(5);
        return view('admin.sliders.create',compact('title','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $t = date('Y-m-d');
        $data = new Slider();
        $data->titre = $request->input('titre');
        $d = $request->input('date_debut');
        if ($request->input('date_fin') == '') {
            $f = $request->input('date_fin');
        }else {
            $f = $d;
        }
        $data->date_fin = $request->input('date_fin');
        if($t > $d){
            $d = $t;
        }
        if ($t === $d)
        {
            $data->active = 1;
        }else{
            $data->active = 0;
        }
        $df = ($f<$d) ? $d : $f ;
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $images =['jpg','jpeg','png'];
            if (in_array($extension,$images)) {
                $files = $file->store('Sliders', 'public');
                $photo = 'storage/'.$files;
            }else {
                session()->flash('photo', 'L\'extenxion de votre photo n\'est pas un .png ou .jpg ou .jpeg');
                return redirect()->route('erreur');
            }
        }
        $data->date_debut = $d;
        $data->date_fin = $df;
        $data->photo = $photo;
        $data->save();
        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        $title = 'Nos Sliders';
        $datas = Slider::paginate(5);
        $data = Slider::findOrFail($slider->id);
        return view('admin.sliders.show',compact('title','datas','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $title = 'Nos Sliders';
        $datas = Slider::paginate(5);
        $data = Slider::findOrFail($slider->id);
        return view('admin.sliders.edit',compact('title','datas','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $data = Slider::findOrFail($slider->id);
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $images =['jpg','jpeg','png'];
            if (in_array($extension,$images)) {
                $files = $file->store('Sliders', 'public');
                $photo = 'storage/'.$files;
            }else {
                session()->flash('photo', 'L\'extenxion de votre photo n\'est pas un .png ou .jpg ou .jpeg');
                return redirect()->route('erreur');
            }
        }else{
            $photo = $data->photo;
        }
        $t = date('Y-m-d');
        $f = $request->input('date_fin');
        $d = $request->input('date_debut');
        if ($request->input('date_fin') == '') {
            $f = $data->date_fin;
        }
        if($t > $d){
            $d = $t;
        }
        $df = ($f<$d) ? $d : $f ;
        if ($request->input('active') == 1) {
            $active = 1;
            $d = $t;
        }else {
            $active = 0;
        }
        $data->update([
            'titre' => $request->input('titre'),
            'date_debut' => $d,
            'date_fin' =>$df,
            'active' => $active,
            'photo' => $photo
        ]);
        return redirect()->route('sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        Slider::destroy($slider->id);
        return redirect()->route('sliders.index');
    }
}
