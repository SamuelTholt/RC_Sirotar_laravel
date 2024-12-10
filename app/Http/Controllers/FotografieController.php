<?php

namespace App\Http\Controllers;

use App\Models\Fotografie;
use App\Models\Sekcie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'subor' => 'required|array',
            'subor.*' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5120',
            'priradena_sekcia_id' => 'required|exists:sekcie,id',
        ]);

        $subory = $request->file('subor'); // Získať všetky súbory

        // Pre každý súbor v poli, urobíme spracovanie
        foreach ($subory as $subor) {
            $nazovSuboru = time() . '_' . $subor->getClientOriginalName();
            $cesta = 'assets/images/' . $nazovSuboru;

            $subor->move(public_path('assets/images'), $nazovSuboru);

            // Získame nové poradie v sekcii
            $novePoradie = Fotografie::where('priradena_sekcia_id', $validatedData['priradena_sekcia_id'])
                    ->max('poradie') + 1;

            // Uložíme každý obrázok do databázy
            Fotografie::create([
                'nadpis' => $validatedData['nadpis'],
                'text' => $validatedData['text'],
                'nazov_suboru' => $nazovSuboru,
                'cesta_k_suboru' => $cesta,
                'priradena_sekcia_id' => $validatedData['priradena_sekcia_id'],
                'poradie' => $novePoradie,
            ]);
        }

        return redirect()->route('editor')->with('success', 'Fotografia bola úspešne pridaná.');


    }

    public function edit($id)
    {

        $foto = Fotografie::findOrFail($id);
        return view('editPhoto', compact('foto'));
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'nadpis' => 'nullable|string|max:255',
            'text' => 'nullable|string',
            'subor' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:5120',
            'priradena_sekcia_id' => 'required|exists:sekcie,id',
        ]);


        $fotografia = Fotografie::findOrFail($id);

        if ($request->hasFile('subor')) {

            $starySubor = public_path($fotografia->cesta_k_suboru);
            if (File::exists($starySubor)) {
                File::delete($starySubor);
            }


            $subor = $request->file('subor');
            $nazovSuboru = time() . '_' . $subor->getClientOriginalName();
            $cesta = 'assets/images/' . $nazovSuboru;

            $subor->move(public_path('assets/images'), $nazovSuboru);

            $fotografia->nazov_suboru = $nazovSuboru;
            $fotografia->cesta_k_suboru = $cesta;
        }

        $fotografia->nadpis = $validatedData['nadpis'];
        $fotografia->text = $validatedData['text'];
        $fotografia->priradena_sekcia_id = $validatedData['priradena_sekcia_id'];


        $fotografia->save();

        return redirect()->route('editor')->with('success', 'Fotografia bola úspešne aktualizovaná.');
    }



    public function destroy($id)
    {
        $fotografia = Fotografie::findOrFail($id);

        $cestaSuboru = public_path($fotografia->cesta_k_suboru);


        if (File::exists($cestaSuboru)) {
            File::delete($cestaSuboru);
        }

        $fotografia->delete();

        return redirect()->route('editor')->with('success', 'Fotografia bola úspešne odstránená.');
    }
}
