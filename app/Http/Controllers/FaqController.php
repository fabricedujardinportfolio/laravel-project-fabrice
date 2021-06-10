<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    //ROOT
    public function rootFaq() {
        return view('faq');
    }
}
