<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\Pelaksana;
use App\Models\pengadaan;
// use Illuminate\Support\Facades\DB;

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

        // return view(
        //     'admin.input_jadwal',
        //     // 'admin.input_pengadaan',
        //     ['jadwal' => $jadwal],
        //     ['pengadaan' => $pengadaan]
        // );
        // return view('admin.input_jadwal', compact('jadwal'));
        return view(
            'admin.input_jadwal',
            ['jadwal' => $jadwal],
            ['pengadaan' => $pengadaan],
        );
        // $jadwal = Jadwal::all();

        // return view('admin.input_jadwal', ['jadwal'=>$jadwal]);
        // dd($jadwal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.input_jadwal');
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
            'tanggal' => 'required',
            'nomor' => 'required',
            'deskripsi_tgl' => 'required'
        ]);

        Jadwal::create($request->post());

        return redirect()->route('jadwal.index')
            ->with('success', 'Data Jadwal Berhasil Ditambahkan');
        // return redirect()->to('input_barang');
    }

    public function Cari1(Request $request)
    {
        // menangkap data pencarian
        $cari1 = $request->cari1;

        // mengambil data dari table pegawai sesuai pencarian data
        $pengadaan = Jadwal::where('pengadaan_id', 'like', "%" . $cari1 . "%")
            ->join('pengadaans', 'pengadaan_id', '=', 'pengadaans.id')
            ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            // ->select('jadwals.*', 'pengadaans.*', 'pelaksana.*')

            // ->paginate();
            ->get();

        // $pejabat = Pejabat::all();
        // mengirim data pegawai ke view index
        return view('admin.pengadaan1', ['pengadaan' => $pengadaan]);
        // dd($pengadaan1);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        // return view('print.nota_dinas1',compact('jadwal'));
        return view('jadwal.index', compact('jadwal'));
        //
    }
    public function show1(Jadwal $jadwal)
    // public function show(Request $request,$id)
    {
            // $pengadaan = Pengadaan::all();
            // $jadwal = Jadwal::all();
            // $jadwal = $jadwal = DB::table('jadwals')
            // ->join('pengadaans', 'pengadaan_id', '=', 'pengadaans.id')
            // ->select('jadwals.*', 'pengadaans.jenis_pengadaan',)
            // ->get();
            // return view('admin.input_pengadaan', compact('pengadaan'));
            // return view('admin.detail', compact('pengadaan'));
            // $pengadaan1 = Pengadaan::find($id);
            // return view('admin.pengadaan1',compact('pengadaans'))
            // return view('print.nota_dinas1',compact('jadwal'))
            // ->renderSections()['content']
        ;
        // dd($pengadaan);
        dd($jadwal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(jadwal $jadwal)
    {
        return view('admin.input_jadwal', compact('jadwal'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::find($id)->update($request->all());

        return back()->with('success', ' Data telah diperbaharui!');
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
        $jadwal->delete();

        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal Berhasil Dihapus!');
        //
    }
}
