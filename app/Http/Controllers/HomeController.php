<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //return auth()->user();
        /*$user= Auth::user;
        $rol = $user->rol->nombre_rol;
        if ($rol === 'Admin'){
            return ("SOY ADMIN");
        }
        else{
            return ("SOY USER");
        }*/

        //if (Auth::user->rol )
        //return view('home');
    }

    /*public function check_rol(){
        $user= auth()->user();
        $rol = $user->rol->nombre_rol;
        return "HOLA ESTO ES UNA PRUEBA";
        //return $rol;
        /*if ($rol === 'Admin'){
            return ("SOY ADMIN");
        }
        else{
            return ("SOY USER");
        }
    }*/
}
