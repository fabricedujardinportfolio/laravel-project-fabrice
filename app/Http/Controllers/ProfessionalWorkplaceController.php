<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessionalWorkplaceController extends Controller
{
    //ROOT
    public function rootPro() {
        return view('professional-workplace');
    }
}
