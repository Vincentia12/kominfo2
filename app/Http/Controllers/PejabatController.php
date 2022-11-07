<?php

namespace App\Http\Controllers;

use App\Models\pejabat;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Redirect;
use Redirect;

class PejabatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pejabat = Pejabat::all();

        return view('index.admin', ['pejabat' => $pejabat]);
        // return view('admin.input_pejabat', compact('pejabats'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     // $pejabats = pejabat::all();

    //     // return view('pejabat', compact('pejabats'));

    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     // $request->validate([
    //     //     'id' => 'required',
    //     //     'tahun_sk' => 'required',
    //     //     'tanggal_sk' => 'required',
    //     //     'nomor_sk' => 'required',
    //     //     'kuasa_pengguna_anggaran' => 'required',
    //     //     'nip_kuasa_pengguna' => 'required',
    //     //     'pejabat_pembuatan_komitmen' => 'required',
    //     //     'nip_pejabat_komitmen' => 'required',
    //     //     'pejabat_pengadaan' => 'required',
    //     //     'nip_pejabat_pengadaan' => 'required',
    //     //     'bpp' => 'required',
    //     //     'nip_bpp' => 'required'

    //     // ]);

    //     // Pejabat::create($request->all());
    //     // // $asets = Aset::create($request->except(['aset_id', 'nama', 'keterangan']));
    //     // // $pemilik = Pemilik::create(['aset_id' => $asets->id, $request->only(['nama', 'keterangan', 'aset_id'])]);

    //     // return redirect()->route('pejabat.index')
    //     //     ->with('success', 'Data Pelaksana Berhasil Disimpan!');

    //     $pejabat = new Pejabat();
    //         $pejabat->id = $request->id;
    //         $pejabat->tahun_sk = $request->tahun_sk;
    //         $pejabat->tanggal_sk = $request->tanggal_sk;
    //         $pejabat->nomor_sk = $request->nomor_sk;
    //         $pejabat->kuasa_pengguna_anggaran = $request->kuasa_pengguna_anggaran;
    //         $pejabat->nip_kuasa_pengguna = $request->nip_kuasa_pengguna;
    //         $pejabat->pejabat_pembuatan_komitmen = $request->pejabat_pembuatan_komitmen;
    //         $pejabat->nip_pejabat_komitmen = $request->nip_pejabat_komitmen;
    //         $pejabat->pejabat_pengadaan = $request->pejabat_pengadaan;
    //         $pejabat->nip_pejabat_pengadaan = $request->nip_pejabat_pengadaan;
    //         $pejabat->bpp = $request->bpp;
    //         $pejabat->nip_bpp = $request->nip_bpp;
    //     $pejabat->save();
    //     return Redirect('home');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pejabat  $pejabat
     * @return \Illuminate\Http\Response
     */
    // public function show(pejabat $pejabat)
    // {
    //     // return view('admin.show', compact('pejabat'));
    //     // return response()->json([
    //     //     'success' => true,
    //     //     'message' => 'Detail Data Post',
    //     //     'data'    => $pejabat 
    //     // ]); 
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pejabat  $pejabat
     * @return \Illuminate\Http\Response
     */
    // public function edit(pejabat $id)
    // // public function edit(Request $request, $id)
    // {
    //     // $pejabat = Pejabat::find($id);
    //     // $pejabat->distribution_code=Input::get('distribution_code');
    //     // $pejabat->destination=Input::get('destination');
    //     // $pejabat->hlr=Input::get('hlr');
    //     // $pejabat->first_iccid=Input::get('first_iccid');
    //     // $pejabat->last_iccid=Input::get('last_iccid');
    //     // $pejabat->quantity=Input::get('quantity');

    //     // return view('index.admin', compact('pejabat'));

    //     // $pejabat = Pejabat::select('*')
    //     // ->where('id', $id)
    //     // ->get();

    //     // return view('index.admin', ['pejabat' => $pejabat]);
        
    //     $pejabat = Pejabat::where('id',$id)->first();
    //     return view('pejabat-edit',compact('pejabat'));
    // }
    public function edit($id)
    {
        $pejabat = Pejabat::findOrFail($id);
        // return response()->json($pejabat, 200); 
        return view('index.admin', ['pejabat' => $pejabat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pejabat  $pejabat
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, pejabat $pejabat)
    // // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'tahun_sk' => 'required',
    //         'tanggal_sk' => 'required',
    //         'nomor_sk' => 'required',
    //         'kuasa_pengguna_anggaran' => 'required',
    //         'nip_kuasa_pengguna' => 'required',
    //         'pejabat_pembuatan_komitmen' => 'required',
    //         'nip_pejabat_komitmen' => 'required',
    //         'pejabat_pengadaan' => 'required',
    //         'nip_pejabat_pengadaan' => 'required',
    //         'bpp' => 'required',
    //         'nip_bpp' => 'required'
    //     ]);

    //     $pejabat->update($request->all());
    //     // Pejabat::update($request->all());

    //     // return redirect()->route('home');
    //     return redirect()->route('home')
    //                     ->with('success','pejabat Berhasil updated!');

    //     // $pejabat = Pejabat::where('id', $request->id);
    //     // $pejabat = Pejabat::where('id', $id)->first();
    //     //     $pejabat->id = $request->id;
    //     //     $pejabat->tahun_sk = $request->tahun_sk;
    //     //     $pejabat->tanggal_sk = $request->tanggal_sk;
    //     //     $pejabat->nomor_sk = $request->nomor_sk;
    //     //     $pejabat->kuasa_pengguna_anggaran = $request->kuasa_pengguna_anggaran;
    //     //     $pejabat->nip_kuasa_pengguna = $request->nip_kuasa_pengguna;
    //     //     $pejabat->pejabat_pembuatan_komitmen = $request->pejabat_pembuatan_komitmen;
    //     //     $pejabat->nip_pejabat_komitmen = $request->nip_pejabat_komitmen;
    //     //     $pejabat->pejabat_pengadaan = $request->pejabat_pengadaan;
    //     //     $pejabat->nip_pejabat_pengadaan = $request->nip_pejabat_pengadaan;
    //     //     $pejabat->bpp = $request->bpp;
    //     //     $pejabat->nip_bpp = $request->nip_bpp;
    //     // $pejabat->save();
    //     // // Session::flash('sukses', 'pejabat Berhasil updated!');
    //     // // return Redirect('home');
    //     // return redirect()->route('home')
    //     //                 ->with('success','pejabat Berhasil updated!');
    // }
    public function update(Request $request, $id)
    {
        $pejabat = Pejabat::find($id)->update($request->all()); 

        return back()->with('success',' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pejabat  $pejabat
     * @return \Illuminate\Http\Response
     */
    // public function destroy(pejabat $pejabat)
    // {
    //     $pejabat->delete();

    //     return redirect()->route('pejabat.index')
    //         ->with('success', 'Aset Berhasil Dihapus!');
    // }

    // public function ubahpejabat($id)
    // {
    //     $pejabat = Pejabat::select('*')
    //                 ->where('id', $id)
    //                 ->get();

    //     return view('index.admin', ['pejabat' => $pejabat]);
    // }
    // public function updatepejabat(Request $request, Pejabat $pejabat)
    // {
    //     // $pejabat = Pejabat::where('id', $request->id)
    //     //             ->update([
    //     //                 'tahun_sk' => $request->tahun_sk,
    //     //                 'tanggal_sk' => $request->tanggal_sk,
    //     //                 'nomor_sk' => $request->nomor_sk,
    //     //                 'kuasa_pengguna_anggaran' => $request->kuasa_pengguna_anggaran,
    //     //                 'nip_kuasa_pengguna' => $request->nip_kuasa_pengguna,
    //     //                 'pejabat_pembuatan_komitmen' => $request->pejabat_pembuatan_komitmen,
    //     //                 'nip_pejabat_komitmen' => $request->nip_pejabat_komitmen,
    //     //                 'pejabat_pengadaan' => $request->pejabat_pengadaan,
    //     //                 'nip_pejabat_pengadaan' => $request->nip_pejabat_pengadaan,
    //     //                 'bpp' => $request->bpp,
    //     //                 'nip_bpp' => $request->nip_bpp
    //     //             ]);


    //     // // $data = $pejabat->insert->Pejabat::all();

    //     // return redirect()->route('home');
    //     // return redirect()->route('home', $data);
        
    //     // return view('index.admin', ['pejabat' => $pejabat]);

    //     $request->validate([
    //         'tahun_sk' => 'required',
    //             'tanggal_sk' => 'required',
    //             'nomor_sk' => 'required',
    //             'kuasa_pengguna_anggaran' => 'required',
    //             'nip_kuasa_pengguna' => 'required',
    //             'pejabat_pembuatan_komitmen' => 'required',
    //             'nip_pejabat_komitmen' => 'required',
    //             'pejabat_pengadaan' => 'required',
    //             'nip_pejabat_kpengadaan' => 'required',
    //             'bpp' => 'required',
    //             'nip_bpp' => 'required'
    //     ]);
    
    //     $pejabat->update($request->all());
    
    //     return redirect()->route('home')
    //                     ->with('success','Aset Berhasil updated!');

    // }
}
