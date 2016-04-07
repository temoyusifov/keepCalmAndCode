<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class poligonController extends Controller
{
    public function pageNotFound(){

        return view('404');

    }

    public function index(){

        $data = array('username' => 'temo', 'email' => 'temoyusifov@gmail.com');
        return view('shopIndex', $data);

    }

    public function login(){

        //$data = array('username' => 'temo', 'email' => 'temoyusifov@gmail.com');
        return view('shopLogin');

    }

    public function cart(){

        //$data = array('username' => 'temo', 'email' => 'temoyusifov@gmail.com');
        return view('shopCart');

    }

    public function shopPagination(){

        //$data = array('username' => 'temo', 'email' => 'temoyusifov@gmail.com');
        return view('shopPagination');

    }

    public function productDetails(){

        //$data = array('username' => 'temo', 'email' => 'temoyusifov@gmail.com');
        return view('productDetails');

    }
}
