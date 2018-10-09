<?php

namespace vume\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
    {
      return view('index');  //
    }

    public function servicios()
    {
        return view('servicios'); //
    }
    public function informacion()
    {
        //
    }
    public function login()
    {
        return view('login'); //  //
    }

    public function admin()
    {
        return view('admins.index'); //  //
    }



}
