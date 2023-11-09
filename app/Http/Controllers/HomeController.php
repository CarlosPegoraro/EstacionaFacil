<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParkingLot;
use App\Models\Place;

class HomeController extends Controller
{
    public function index() {
        $parkingLot = ParkingLot::all();

        return view('home.index')->with('parkingLotList', $parkingLot);
    }
    public function create() {

        $place = Place::all();
        return view('home.create')->with('placeList', $place);
    }
    public function store(Request $request) {
        ParkingLot::create($request->all());
        return to_route('home.index')->with('successMessage', "Vaga reservada com sucesso");
    }
}
