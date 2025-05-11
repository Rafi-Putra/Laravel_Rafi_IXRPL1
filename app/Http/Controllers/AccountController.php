<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    function index(){
        return view('form.index');
    }
    function frm(){
        return view('form.frm');
    }
    function welcome(){
        return view('form.akhir');
    }
    
}
