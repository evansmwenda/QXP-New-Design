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
    	return view('education');
    }
    public function healthcare(){
    	return view('healthcare');
    }
    public function legal(){
    	return view('legal');
    }
    public function financial(){
    	return view('financial');
    }
    public function resources(){
    	return view('humanresources');
    }
    public function industries(){
        return view('industries');
    }
}
