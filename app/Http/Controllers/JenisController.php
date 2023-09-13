<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        $jenis = Jenis::all();
        return view('jenis/index', compact('jenis'));
    }

    public function create()
    {
        return view('jenis/tambah');
    }

    public function store(Request $request)
    {
        $jenis = Jenis::create([
            'id_jenis' => $request->id_jenis,
            'jenis_laundry' => $request->jenis_laundry,
            'lama_proses' => $request->lama_proses,
            'tarif' => $request->tarif
        ]);

        return redirect('jenis');
    }

    public function edit($id)
    {
        $jenis = Jenis::find($id);
        return view('jenis/edit', compact('jenis'));
    }

    public function update(Request $request, $id)
    {
        $jenis = Jenis::find($id);
        $jenis->update([
            'id_jenis' => $request->id_jenis,
            'jenis_laundry' => $request->jenis_laundry,
            'lama_proses' => $request->lama_proses,
            'tarif' => $request->tarif
        ]);

        return redirect('/jenis');
    }

    public function delete(Request $request, $id){
        $jenis = Jenis::find($id); 
        $jenis->delete();
        return redirect('jenis');
      }
}
