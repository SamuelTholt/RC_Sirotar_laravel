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

        $sekcia_galeria = Sekcie::find(8);

        $sekcia_tim = Sekcie::find(9);

        $sekcia_kontakt = Sekcie::find(10);
        $sekcia_kontakt_adresa = Sekcie::find(11);
        $sekcia_kontakt_fb = Sekcie::find(12);
        $sekcia_kontakt_mail = Sekcie::find(13);
        $sekcia_kontakt_map = Sekcie::find(14);

        return view('RCSirotar',
            compact('sekcia_about_us', 'sekcia_act_herna', 'sekcia_act_herna_deti',
                'sekcia_act_herna_prednasky', 'sekcia_act_atrium','sekcia_act_atrium_stretnutia',
                'sekcia_program', 'sekcia_galeria', 'sekcia_tim', 'sekcia_kontakt', 'sekcia_kontakt_adresa',
                'sekcia_kontakt_fb', 'sekcia_kontakt_mail', 'sekcia_kontakt_map'));
    }

    public function index_editor()
    {
        $vsetky_sekcie = Sekcie::all();
        return view('editor', compact('vsetky_sekcie'));
    }

    public function edit($id)
    {
        $sekcia = Sekcie::findOrFail($id); //
        return view('editSekcie', compact('sekcia'));
    }

    public function update(Request $request, $id)
    {
        $sekcia = Sekcie::findOrFail($id);

        $data = $request->only([
            'nazov_sekcie',
            'nadpis', 'typografia_nadpisu', 'farba_nadpisu', 'font_nadpisu',
            'ikonka_nadpisu', 'farba_ikonky_nadpisu',
            'text', 'velkost_textu', 'farba_textu', 'font_textu',
            'podtext', 'velkost_podtextu', 'farba_podtextu', 'font_podtextu',
        ]);

        foreach ($data as $key => $value) {
            if ($value !== null) {
                $sekcia->$key = $value;
            }
        }

        $sekcia->save();
        return redirect()->route('editor')->with('success', 'Sekcia bola úspešne upravená.');;
    }

}