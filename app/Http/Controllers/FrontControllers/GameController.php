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

        dd($coords);
        foreach ($coords as $coord){
            $data['coord'][] = $coord;
        }
        dd($data['coord']);
        return view('Content.game', $data);
    }
}
