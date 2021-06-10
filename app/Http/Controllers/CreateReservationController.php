<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use Illuminate\Http\Request;

class CreateReservationController extends Controller
{
    public function print() {
        return view('reservations');
    }
    
    public function add(){      
        return view('reservations'); 
    }
}
