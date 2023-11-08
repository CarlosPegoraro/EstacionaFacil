<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParkingLot;

class HomeController extends Controller
{
    public function index() {
        return view('home.index');
    }
    public function create() {
        return view('home.create');
    }
    public function store(Request $request) {
        ParkingLot::create($request->all());
        return to_route('home.index')->with('successMessage', "Vaga reservada com sucesso");
    }
}
