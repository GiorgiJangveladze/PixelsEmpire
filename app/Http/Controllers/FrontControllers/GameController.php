<?php

namespace App\Http\Controllers\FrontControllers;

use App\Models\Coordinate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    public function index()
    {
        $data['coord'] = array_column(Coordinate::All()->toArray(), 'y_coordinates');
        dd($data);
        return view('Content.game', $data);
    }
}
