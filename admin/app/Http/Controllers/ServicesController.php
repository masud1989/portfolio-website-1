<?php

namespace App\Http\Controllers;
use App\Models\ServicesModel;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    function ServicesIndex()
    {
        return view('services');
    }

    public function getServicesData()
    {
        $result=ServicesModel::all();
        return $result;
    }
}
