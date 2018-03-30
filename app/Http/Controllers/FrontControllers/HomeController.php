<?php

namespace App\Http\Controllers\FrontControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
    	return view('Content.index');
    }
}
