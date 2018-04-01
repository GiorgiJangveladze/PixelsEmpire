<?php

namespace App\Http\Controllers\FrontControllers;

use App\Models\Coordinate;
use App\Models\Messages;
use App\Models\Shtab;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;



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
        $count = 0;

        $arrayOfShtab = [

            ['x'=>1200/20, 'y'=>660/20],
            ['x'=>1200/20, 'y'=>640/20],
            ['x'=>1180/20, 'y'=>660/20],
            ['x'=>1180/20, 'y'=>640/20],
            ['x'=>140/20, 'y'=>180/20],
            ['x'=>140/20, 'y'=>160/20],
            ['x'=>120/20, 'y'=>180/20],
            ['x'=>120/20, 'y'=>160/20],
        ];

        $mainCoordinate = $this->coordinatel->where('id', $request->x+1)->first();
        $coordinateData = unserialize($mainCoordinate['y_coordinates']);
        $coordinateData[$request->y] = (int)$request->countryID;
        $mainCoordinate->y_coordinates = serialize($coordinateData);
        $mainCoordinate->save();

        foreach ($arrayOfShtab as $shtab){
            $shtabData =  $this->coordinatel->where('id', $shtab['y'])->first();
            $newShtabData = unserialize($shtabData['y_coordinates']);
            if($newShtabData[$shtab['x']]==$request->countryID){
                $count++;
            }
        }

        if($count==6){
            return ['win'];
        }elseif($count == 0 ) {
            return ['lose'];
        }else{
            return ['continue'];
        }
    }

    public function updateMapOnline(Request $request){
        $coords = array_column($this->coordinatel->get()->toArray(), 'y_coordinates');

        foreach ($coords as $coord){
            $data['coord'][] = unserialize($coord);
        }
        return $data['coord'];
    }

    public function sendMessage(Request $request)
    {
        $this->message->create([
            'message'=>$request->mess,
            'name'=>auth()->user()->name
        ]);

    }

    public function getMessage()
    {
        return $this->message->all();
    }
}
