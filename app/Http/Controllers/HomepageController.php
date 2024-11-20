<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $trenutnoVrijeme = date("h:i:s");
        $sat = date("H");


        $poruka = $sat >= 0 && $sat <= 12
            ? 'Dobro jutro!'
            : 'Dobar dan' ;


        return view("welcome", compact('trenutnoVrijeme', 'sat', 'poruka'));
    }

}
