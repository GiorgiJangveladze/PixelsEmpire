<?php

namespace App\Http\Controllers\FrontControllers;

use App\Models\Coordinate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    public function index()
    {
        $coords = array_column(Coordinate::All()->toArray(), 'y_coordinates');

        foreach ($coords as $coord){
            $data['coord'][] = unserialize($coord);
        }
        return view('Content.game', $data);
    }
}
