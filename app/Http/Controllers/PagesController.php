<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function root(){
    	//return page fold root.blade.php
    	return view('pages.root');
    }
}
