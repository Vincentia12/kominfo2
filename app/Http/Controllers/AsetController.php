<?php

namespace App\Http\Controllers;

use App\Models\aset;
use App\Models\Pemilik;

use Illuminate\Http\Request;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asets = Aset::all();
        $pemiliks = Pemilik::all();
      
        return view('admin.LPpengadaan1',compact('asets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $asets 
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id' => 'required',
            'no_sertifikat' => 'required',
            'nama_aset' => 'required',
            'alamat_aset' => 'required',
            'luas_aset' => 'required',
            'status_aset' => 'required',
            'kondisi_aset' => 'required',
            'kondisi_geografis' => 'required',
            'asalusul_aset' => 'required',
            'th_kepemilikan' => 'required',
            'th_pembangunan' => 'required',
            'th_rehab' => 'required',
            'keterangan_aset' => 'required'
        ]);
      
        Aset::create($request->all()); 
        // $asets = Aset::create($request->except(['aset_id', 'nama', 'keterangan']));
        // $pemilik = Pemilik::create(['aset_id' => $asets->id, $request->only(['nama', 'keterangan', 'aset_id'])]);

        return redirect()->route('asets.index')
                        ->with('success','Aset Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Aset $aset)
    {
        return view('admin.show',compact('aset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aset $aset)
    {
        return view('admin.edit',compact('aset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aset $aset)
    {
        $request->validate([
            'no_sertifikat' => 'required',
            'nama_aset' => 'required',
            'alamat_aset' => 'required',
            'luas_aset' => 'required',
            'status_aset' => 'required',
            'kondisi_aset' => 'required',
            'kondisi_geografis' => 'required',
            'asalusul_aset' => 'required',
            'th_kepemilikan' => 'required',
            'th_pembangunan' => 'required',
            'th_rehab' => 'required',
            'keterangan_aset' => 'required'
        ]);
      
        $aset->update($request->all());
      
        return redirect()->route('asets.index')
                        ->with('success','Aset Berhasil updated!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aset $aset)
    {
        $aset->delete();
       
        return redirect()->route('asets.index')
                        ->with('success','Aset Berhasil Dihapus!');
    
    }
}
