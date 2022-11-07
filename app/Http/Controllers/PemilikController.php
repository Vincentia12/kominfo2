<?php

namespace App\Http\Controllers;

use App\Models\aset;
use App\Models\Pemilik;
use App\Models\pemilik as ModelsPemilik;
use Illuminate\Http\Request;

use App\Http\Controllers\AsetController;

class PemilikController extends Controller
{
    public function index()
    {
    	// mengambil semua data pengguna
    	// $pemilik = Pemilik::all();
        $asets = Aset::all();
        $pemilik = Pemilik::all();
        // $pemilik = Pemilik::with('aset')->paginate(2);
    	// return data ke view
    	return view('admin.tersertifikasi', compact('pemilik')
        );
    }

    public function create(){
        $asets = aset::all();
        // $pemilik = Pemilik::all();
        // return view('pemilik', compact('asets', 'pemilik'));
        return view('pemilik', compact('asets'));
        
    }

    public function store(Request $request)
    {
        $asets = Aset::create($request->except(['nama', 'keterangan']));

        $request['aset_id'] = $asets->id;
        $pemilik = Pemilik::create($request->only(['aset_id', 'nama', 'keterangan']));

        return back()->with('success',' Post baru berhasil dibuat.');
    }
    
    public function show(Pemilik $pemilik)
    {
        return view('admin.lihat',compact('pemilik'));
    }

    public function edit(Pemilik $pemilik)
    {
        return view('admin.edit',compact('pemilik'));
    }

    public function destroy(Pemilik $pemilik)
    {
        $pemilik->delete();
       
        return redirect()->route('pemilik.index')
                        ->with('success','Aset Berhasil Dihapus!');
    
    }
}