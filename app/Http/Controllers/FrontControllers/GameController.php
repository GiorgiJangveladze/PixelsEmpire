<?php

namespace App\Http\Controllers\FrontControllers;

use App\Models\Coordinate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    public $coordinatel;

    public function __construct()
    {
        $this->coordinatel = new Coordinate();
    }
    public function index()
    {
        $coords = array_column($this->coordinatel->get()->toArray(), 'y_coordinates');

        foreach ($coords as $coord){
            $data['coord'][] = unserialize($coord);
        }
        return view('Content.game', $data);
    }

    public function updateMap(Request $request){
        $mainCoordinate = $this->coordinatel->where('id',$request->x+1)->first();
        $coordinateData = unserialize($mainCoordinate['y_coordinates']);
        $coordinateData[$request->y] = (int)$request->countryID;
        $mainCoordinate->y_coordinates = serialize($coordinateData);
        $mainCoordinate->save();
        return  $mainCoordinate[$request->y];
    }

    public function updateMapOnline(Request $request){
        $coords = array_column($this->coordinatel->get()->toArray(), 'y_coordinates');

        foreach ($coords as $coord){
            $data['coord'][] = unserialize($coord);
        }
        return $data['coord'];
//        $data = $request->map;
//        $mainCoordinate = $this->coordinatel->where('id',$request->x+1)->first();
//        $coordinateData = unserialize($mainCoordinate['y_coordinates']);
//        for($i=0; $i<count($data)-1; $i++){
//            if(array_diff($coordinateData[$i], $data[$i])){
//
//            }
//        }
    }

}
