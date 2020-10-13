<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function pricing(){
    	return view('plans');
    }
    public function education(){
    	return view('industries.education');
    }
    public function healthcare(){
    	return view('industries.healthcare');
    }
    public function legal(){
    	return view('industries.legal');
    }
    public function financial(){
    	return view('industries.financial');
    }
    public function resources(){
    	return view('industries.humanresources');
    }
    public function industries(){
        return view('industries');
    }
}
