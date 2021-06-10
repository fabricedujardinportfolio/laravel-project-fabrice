<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Booking;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //Route
    public function recherche(Request $request) {

        $booking = Booking::create($request->all());

        return redirect()->back();
    }
    public function index() {        
        $doctors = Doctor::orderBy("name","asc")->get();
        return view('reservation',compact('doctors'));
    }
    // Suite
}
