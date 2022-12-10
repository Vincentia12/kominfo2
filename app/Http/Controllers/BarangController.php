<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\pengadaan;
use App\Models\pelaksana;
use App\Models\jadwal;
// use App\Models\Trigger;
use App\Models\Triggers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $barang = DB::table('barangs')
        //     ->join('pengadaans', 'pengadaan_id', '=', 'pengadaans.id')
        //     ->select('barangs.*', 'pengadaans.jenis_pengadaan',)
        //     ->get();
        $barang = Barang::all();
        $pengadaan = Pengadaan::all();

        return view(
            'admin.input_barang',
            // 'admin.input_pengadaan',
            ['barang' => $barang],
            ['pengadaan' => $pengadaan]
        );

        // return view(
        //     'admin.input_barang',
        //     ['barang' => $barang],
        //     ['pengadaan' => $pengadaan],
        // )->with('i', (request()->input('page', 1) - 1) * 5);

        // $pengadaans = pengadaan::all();
        // $pelaksanas = Pelaksana::all();
        // $barangs = barang::all();
        // $jadwals = Jadwal::all();

        // return view('admin.input_pengadaan',compact('pengadaans'))
        // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        // $pengadaans = pengadaan::all();

        return view('admin.input_barang');
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
            'pengadaan_id' => 'required',
            'barang' => 'required',
            'jumlah_barang' => 'required',
            'satuan' => 'required',
            'harga_satuan' => 'required',
            // 'harga_total' => 
        ]);

        Barang::create($request->post());
        Triggers::create($request->post());
        // Triggers::create([
        //     'hash' => $request->hash
        // ]);

        return redirect()->route('barang.index')
            ->with('success', 'Data Barang Berhasil Ditambahkan');
        // $jumlah = 'jumlah_barang * harga_satuan';
        // Barang::create($request->only([
        // // $barangs = Barang::create($request->only([
        //     'pengadaan_id',
        //     'barang',
        //     'jumlah_barang',
        //     'satuan',
        //     'harga_satuan',
        //     // 'jumlah_harga' => $jumlah
        // ]));


        // return redirect()->route('barang.index')
        // // return redirect()->route('barang.barang')
        //     ->with('success', 'Data Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        // return view('admin.input_barang', compact('barang'));
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        return view('admin.input_barang', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id)->update($request->all());
        Triggers::create($request->post());

        return back()->with('success', ' Data telah diperbaharui!');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        $barang->delete();

        return redirect()->route('barang.index')
            ->with('success', 'Barang Berhasil Dihapus!');
    }
}
