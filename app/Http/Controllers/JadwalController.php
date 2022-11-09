<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\pengadaan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function index1()
    {
        // $pengadaan = Pengadaan::all();
        // $jadwal1 = Jadwal::all();
        $jadwal1 = DB::table('jadwals')
            ->join('pengadaans', function ($join) {
                $join->on('pengadaans.id', '=', 'jadwals.pengadaan_id');
                    // ->where('jadwals.pengadaan_id', '<=', 10);
                    // ->where('pengadaans.nilai_negosiasi', '<=', 50);
            })
            ->join('pelaksanas', function ($join) {
                $join->on('pelaksanas.id', '=', 'pengadaans.pelaksana_id');
                    // ->where('pengadaans.pelaksana_id', '<=', 50);
            })
            // ->join('pengadaans', 'pengadaan_id', '=', 'pengadaans.id')
            // // ->where('pengadaans.nilai_negosiasi', '<=', 50)
            // ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            // // ->join('barangs', 'pengadaan_id', '=', 'pengadaans.id')
            ->select('jadwals.*', 
            'pelaksanas.pt_pelaksana', 'pelaksanas.alamat', 'pelaksanas.nama_pelaksana', 'pelaksanas.jabatan_pelaksana', 'pelaksanas.kode_rekening', 'pelaksanas.npwp', 'pelaksanas.tlp',
            'pengadaans.jenis_pengadaan', 'pengadaans.total_hps', 'pengadaans.deskripsi_hps', 'pengadaans.harga_penawaran', 'pengadaans.deskripsi_penawaran', 'pengadaans.nilai_negosiasi', 'pengadaans.deskripsi_negosiasi',
            // 'barangs.barang', 'barangs.jumlah_barang', 'barangs.satuan', 'barangs.harga_satuan'
            )
        ->get();
        
        // $pengadaan1 = DB::table('pengadaans')
        //     ->where('nilai_negosiasi', '<=', 50)
        //     ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
        //     // ->join('jadwals', 'pengadaan_id', '=', 'pengadaans.id')
        //     // ->join('barangs', 'pengadaan_id', '=', 'pengadaans.id')
        //     ->select('pengadaans.*', 'pelaksanas.pt_pelaksana', 'pelaksanas.alamat', 'pelaksanas.nama_pelaksana', 'pelaksanas.jabatan_pelaksana', 'pelaksanas.kode_rekening', 'pelaksanas.npwp', 'pelaksanas.tlp',
        //         // 'jadwals.kegiatan', 'jadwals.alokasi', 'jadwals.hari', 'jadwals.tanggal', 'jadwals.nomor', 'jadwals.deskripsi_tgl',
        //         // 'barangs.barang', 'barangs.jumlah_barang', 'barangs.satuan', 'barangs.harga_satuan'
        //         )
        //     ->get();

        // $pengadaan = Pengadaan::all();
        // $pelaksanas = pelaksana::orderBy('id','desc')->paginate(5);
        // return view('pelaksanas.index', compact('pelaksanas'));
        // $getmodel = new pelaksana()

        // $pelaksana = Pelaksana::select('*')
        //                 ->get();

        return view(
            'admin.pengadaan1',
            ['jadwal1' => $jadwal1],
            // ['pengadaan1' => $pengadaan1],
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
