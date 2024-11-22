<?php

namespace App\Http\Controllers;

use App\Models\Fotografie;
use App\Models\Sekcie;
use Illuminate\Http\Request;

class FotografieController extends Controller
{
    //
    public function create()
    {
        $foto = new Fotografie();
        $sekcie = Sekcie::all();
        return view('createFoto' , compact('foto', 'sekcie'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nadpis' => 'nullable|string|max:255',
            'text' => 'nullable|string',
            'subor' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5120',
            'priradena_sekcia_id' => 'required|exists:sekcie,id',
        ]);

        $subor = $request->file('subor');
        $nazovSuboru = time() . '_' . $subor->getClientOriginalName();
        $cesta = 'assets/images/'.$nazovSuboru;

        $subor->move(public_path('assets/images'), $nazovSuboru);

        $fotografia = Fotografie::create([
            'nadpis' => $validatedData['nadpis'],
            'text' => $validatedData['text'],
            'nazov_suboru' => $nazovSuboru,
            'cesta_k_suboru' => $cesta,
            'priradena_sekcia_id' => $validatedData['priradena_sekcia_id'],
        ]);

        return redirect()->route('editor')->with('success', 'Fotografia bola úspešne pridaná.');


    }
}
