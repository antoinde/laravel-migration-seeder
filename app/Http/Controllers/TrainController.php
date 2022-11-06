<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    //

    public function getTrains(){

        $trains = Train::where('data_partenza', '>=', '2020-12-07')->get();

        
        return view('home_trains', compact('trains'));
    }
}
