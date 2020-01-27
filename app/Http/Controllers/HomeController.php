<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function api(){
        $cliente = new Client(['base_uri' => 'https://www.transparencia.gob.sv/api/v1/']);
        $respuesta = $cliente->request('GET','institutions.json?per_page=50')->getBody();
        return view('welcome', compact('respuesta'));
     }
}
