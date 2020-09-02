<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fuente;
use App\Models\Suscripcion;


use Illuminate\Support\Collection as Collection;
// use Request;
use Response;
use Storage;
use App;
use Carbon\Carbon;
use Redirect;
use Image;
// use Helpers;
use URL;
use View;
use Auth;
use Session;

class WebController extends Controller
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
        return view('home');
    }

    public function home() {

        $validar = 'Inicio';
        // $validar = true;
        $titulo = 'Home';
        return view('welcome',compact('titulo','validar'));
    }

    public function pricing() {
        

        $contacto = 'Inicio';
        $titulo = 'Pricing';        
        return View::make('web.precios',compact('titulo','contacto'));
    }

    public function contacto(Request $request) {
        $data = $request->all();

        Suscripcion::create($data);

        $contacto = 'Enviado';
        $titulo = 'Contacto';                
        return view('web.precios',compact('titulo','contacto'));
    }

    public function validarUrl(Request $request) {                
        $data = $request->all();
        $url = $data['url'];                     
       
        $edit_url = str_replace("https://www.","",$url);
        $edit_url = str_replace("https://","",$edit_url);
        $edit_url = str_replace("http://www.","",$edit_url);
        $edit_url = str_replace("http://","",$edit_url);
                            

        $split_url = explode("/",$edit_url);        

        $dominio = $split_url[0];                
    
        $fuente = Fuente::where('dominio',$dominio)->first();        

        if ($fuente != null) {
            $validar = 'validada';
        }else {
            $validar = 'no_validada';
        }

        $titulo = 'Validator';
        return view('welcome',compact('titulo','validar'));
    }
}
