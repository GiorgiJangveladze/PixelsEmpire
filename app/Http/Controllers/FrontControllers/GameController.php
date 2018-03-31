<?php

namespace App\Http\Controllers\FrontControllers;

use App\Models\Coordinate;
use App\Models\Messages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    protected $coordinatel;
    protected $message;

    public function __construct(Coordinate $cordinate,Messages $message)
    {
        $this->coordinatel = $cordinate;
        $this->message = $message;
    }

    public function index()
    {
        $coords = array_column($this->coordinatel->get()->toArray(), 'y_coordinates');

        foreach ($coords as $coord){
            $data['coord'][] = unserialize($coord);
        }
        $data['messages'] = $this->message->getObj();
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

    public function sendMessage(Request $request)
    {
        $this->message->create([
            'message'=>$request->mess,
            'user_id'=>auth()->user()->id
        ]);

    }

    public function getMessage()
    {
        return $this->message->all();
    }


}
