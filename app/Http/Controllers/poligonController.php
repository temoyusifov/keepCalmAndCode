<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class poligonController extends Controller
{
    public function index(){

        $data = array('username' => 'temo', 'email' => 'temoyusifov@gmail.com');
        return view('shopIndex', $data);

    }

    public function login(){

        //$data = array('username' => 'temo', 'email' => 'temoyusifov@gmail.com');
        return view('shopLogin');

    }
}
