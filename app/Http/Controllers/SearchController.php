<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //ROOT
    public function rootSearch() {
        $doctors = Doctor::orderBy("name","asc")->paginate(3);
        return view('search',compact('doctors'));
    }
}
