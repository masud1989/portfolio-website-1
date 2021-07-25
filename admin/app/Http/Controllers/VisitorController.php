<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use VisitorModel;
use App\Models\VisitorModel;

class VisitorController extends Controller
{
    public function VisitorIndex()
    {   
        $visitor=json_decode(VisitorModel::orderBy('id','desc')
            ->take(11)
                ->get());
        return view('Visitor', compact('visitor'));
    }
}
