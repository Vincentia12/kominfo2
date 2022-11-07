<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\pengadaan;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pengadaan = Pengadaan::all();
        $jadwal = Jadwal::all();
        $pengadaan = Pengadaan::all();

        // $pengadaan = Pengadaan::all();
        // $pelaksanas = pelaksana::orderBy('id','desc')->paginate(5);
        // return view('pelaksanas.index', compact('pelaksanas'));
        // $getmodel = new pelaksana()

        // $pelaksana = Pelaksana::select('*')
        //                 ->get();

        return view(
            'admin.input_jadwal',
            ['jadwal' => $jadwal],
            ['pengadaan' => $pengadaan],
        );
        // $jadwal = Jadwal::all();

        // return view('admin.input_jadwal', ['jadwal'=>$jadwal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.input_pelaksana');
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
            'kegiatan' => 'required',
            'alokasi' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'nomor' => 'required',
            'deskripsi_tgl' => 'required'
        ]);

        Jadwal::create($request->post());

        return redirect()->to('input_barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        return view('admin.input_jadwal', compact('jadwal'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwal $jadwal)
    {
        //
    }
}
