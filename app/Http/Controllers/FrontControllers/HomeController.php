<?php

namespace App\Http\Controllers\FrontControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
class HomeController extends Controller
{
	protected $country;

    public function __construct(Country $country)
    {
    	$this->country = $country;    
    }

    public function index()
    {
    	return view('Content.index',['countries' => $this->country->getObj()]);
    }
}
