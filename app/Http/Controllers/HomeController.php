<?php

namespace App\Http\Controllers;

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
        return view('site.home',compact('active'));
    }
    public function about()
    {
        $active = 'about';
        return view('site.about',compact('active'));
    }
    public function bien()
    {
        $active = 'bien';
        return view('site.bien',compact('active'));
    }
    public function detail()
    {
        $active = 'bien';
        return view('site.bien_show',compact('active'));
    }
    public function contact()
    {
        $active = 'tel';
        return view('site.contact',compact('active'));
    }
    public function home_presonnel()
    {
        $active = 'tel';
        $menu = 'personnel';
        return view('admin.accueil',compact('active','menu'));
    }

    public function erreur()
    {
        return view('admin.errors.file');
    }
}
