<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $active = 'home';
        $sliders = Slider::where('active',1);
        $biens = Bien::paginate(6);
        return view('site.home',compact('active','sliders','biens'));
    }
    public function about()
    {
        $active = 'about';
        return view('site.about',compact('active'));
    }
    public function bien()
    {
        $active = 'bien';
        $biens = Bien::paginate(15);
        return view('site.bien',compact('active','biens'));
    }
    public function detail($id)
    {
        $active = 'bien';
        $data = Bien::findOrFail($id);
        return view('site.bien_show',compact('active','data'));
    }
    public function contact()
    {
        $active = 'tel';
        return view('site.contact',compact('active'));
    }
    public function home_presonnel()
    {
        $title = 'Administration';
        $active = 'tel';
        $menu = 'personnel';
        return view('admin.accueil',compact('active','menu','title'));
    }

    public function erreur()
    {
        return view('admin.errors.file');
    }
}
