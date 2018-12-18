<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.index');
    }

    public function administrar(){
        $users = User::all();
        return view('admin.administrar')->with("usuarios",$users);
    }

    public function configurar_empresa(){

    }
}
