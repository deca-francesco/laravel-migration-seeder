<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // prendo i treni dal db ordinati cronologicamente
        $trains = Train::orderBy('created_at', 'desc')->get();
        // li passo come array alla view trains
        return view("trains", compact("trains"));
    }
}
