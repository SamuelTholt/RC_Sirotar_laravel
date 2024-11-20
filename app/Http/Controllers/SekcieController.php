<?php

namespace App\Http\Controllers;

use App\Models\Sekcie;
use Illuminate\Http\Request;

class SekcieController extends Controller
{
    //
    public function index()
    {
        $sekcia_about_us = Sekcie::find(1);
        $sekcia_act_herna = Sekcie::find(2);
        $sekcia_act_herna_deti = Sekcie::find(3);
        $sekcia_act_herna_prednasky = Sekcie::find(4);
        $sekcia_act_atrium = Sekcie::find(5);
        $sekcia_act_atrium_stretnutia = Sekcie::find(6);

        $sekcia_program = Sekcie::find(7);
        return view('RCSirotar',
            compact('sekcia_about_us', 'sekcia_act_herna', 'sekcia_act_herna_deti',
                'sekcia_act_herna_prednasky', 'sekcia_act_atrium','sekcia_act_atrium_stretnutia',
                'sekcia_program'));
    }
}
