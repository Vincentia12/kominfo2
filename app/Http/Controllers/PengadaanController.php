<?php

namespace App\Http\Controllers;

use App\Models\Pengadaan;
use App\Models\pelaksana;
use App\Models\barang;
use App\Models\jadwal;
use App\Models\Pejabat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pelaksana = Pelaksana::all();
        $pengadaan = Pengadaan::all();
        // $barang = Barang::all();
        // $jadwals = Jadwal::all();
        // $pejabat = Pejabat::all();

        return view(
            'admin.input_pengadaan',
            // 'admin.input_pengadaan',
            ['pelaksana' => $pelaksana],
            ['pengadaan' => $pengadaan],
            // ['barang' => $barang],
            // ['pejabat' => $pejabat],
        );

        // return view('admin.input_pengadaan',compact('pengadaan'))
        // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // pengadaan1 dibawa 50juta
    public function index1()
    {
        // $pengadaan1 = DB::table('jadwals')
        //     ->join('pengadaans', 'pengadaan_id', '=', 'pengadaans.id')
        //     ->where('nilai_negosiasi', '<=', 50)
        //     ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
        //     // ->join('barangs', 'pelaksana_id', '=', 'pelaksanas.id')
        //     // ->groupBy('jadwals.pengadaan_id')
        //     // ->get();
        // ->paginate();
        // $pengadaan1 = DB::table('pelaksans')
        //     ->join('pengadaans', 'pengadaan_id', '=', 'pengadaans.id')
        //     ->where('nilai_negosiasi', '<=', 50)
        //     ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
        //     ->join('jadwals', 'jadwals.pengadaan_id', '=', 'pengadaan.id')
        //     // ->join('barangs', 'barangs.pengadaan_id', '=', 'pengadaan.id')
        //     // ->groupBy('jadwals.pengadaan_id')
        //     // ->get();
        // ->paginate();

        // $pejabat = Pejabat::all();
        // mengirim data pegawai ke view index
        // return view('admin.pengadaan1',['pengadaan1' => $pengadaan1]);
        // return view('print.nota_dinas1', compact('pengadaan1'));
        // $pengadaan1 = DB::table('pelaksanas')
        // $pejabat = Pejabat::find(1);
        // $pejabat = DB::table('pejabats');
        $pengadaan1 = DB::table('pengadaans')
            ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            ->where('nilai_negosiasi', '<=', 50)
            // ->join('barangs', 'pengadaans.id', '=', 'barangs.pengadaan_id')
            ->join('jadwals', 'pengadaans.id', '=', 'jadwals.pengadaan_id')
            // ->groupBy('jadwals.pengadaan_id')
        ->paginate();

        $pejabat = Pejabat::all();

        return view(
            'admin.pengadaan1',
            ['pengadaan1' => $pengadaan1],
            // ['pejabat' => $pejabat],
            ['pejabat' => $pejabat]

        );
        // dd($pengadaan1, $pejabat);

    }

    public function Cari1(Request $request)
    {
        // menangkap data pencarian
        $cari1 = $request->cari1;

        // mengambil data dari table pegawai sesuai pencarian data
        $pengadaan = Jadwal::where('pengadaan_id', 'like', "%" . $cari1 . "%")
            ->join('pengadaans', 'pengadaan_id', '=', 'pengadaans.id')
            ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            ->select('jadwals.*', 'pengadaans.*', 'pelaksana.*')

            // ->paginate();
            ->get();

        // $pejabat = Pejabat::all();
        // mengirim data pegawai ke view index
        // return view('admin.pengadaan1',['pengadaan1' => $pengadaan1]);
        return view('admin.pengadaan1', compact('pengadaan1'));

        //pengadaan2
    }

    public function index2()
    {
        $pengadaan2 = DB::table('pengadaans')
            // ->select('*')
            // ->join('pengadaans', 'pelaksanas.id', '=', 'pengadaans.pelaksana_id')
            ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            ->where('nilai_negosiasi', '>', 50)
            ->join('jadwals', 'pengadaans.id', '=', 'jadwals.pengadaan_id')
            ->groupBy('jadwals.pengadaan_id')
            // ->get();
            // ->paginate(10);
            ->paginate();

        // $pejabat = Pejabat::all();

        return view(
            'admin.pengadaan2',
            ['pengadaan2' => $pengadaan2],
            // ['pejabat' => $pejabat]
            // ['jadwal' => $jadwal],
            // ['pelaksana' => $pelaksana]
        );
        // dd($pengadaan1);

        // $pengadaan2 = Pengadaan::select('select * where nilai_negosiasi > 10000000');
        // $pengadaan2 = DB::table('pengadaans')
        //     ->where('nilai_negosiasi', '>', 50)
        //     ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
        //     ->join('jadwals', 'pengadaan_id', '=', 'jadwals.id')
        //     ->select('pengadaans.*', 'pelaksanas.pt_pelaksana', 'pelaksanas.alamat', 'pelaksanas.nama_pelaksana', 'pelaksanas.jabatan_pelaksana', 'pelaksanas.kode_rekening', 'pelaksanas.npwp', 'pelaksanas.tlp',
        //         'jadwals.kegiatan', 'jadwals.alokasi', 'jadwals.hari', 'jadwals.tanggal', 'jadwals.nomor', 'jadwals.deskripsi_tgl',
        //         'barangs.barang', 'barangs.jumlah_barang', 'barangs.satuan', 'barangs.harga_satuan')
        //     ->get();

        // return view(
        //     'admin.pengadaan2',
        //     ['pengadaan2' => $pengadaan2]
        // );
    }
    public function Cari2(Request $request)
    {
        // menangkap data pencarian
        $cari2 = $request->cari2;

        // mengambil data dari table pegawai sesuai pencarian data
        $pengadaan2 = Jadwal::where('pengadaan_id', 'like', "%" . $cari2 . "%")
            ->join('pengadaans', 'pengadaan_id', '=', 'pengadaans.id')
            ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            ->paginate();

        // $pejabat = Pejabat::all();
        // mengirim data pegawai ke view index
        // return view('admin.pengadaan1',['pengadaan1' => $pengadaan1]);
        return view('admin.pengadaan2', compact('pengadaan2'));
        // dd($pengadaan1, $pejabat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.input_pengadaan');
        // $pelaksana = Pelaksana::all();
        // $pengadaans = Pengadaan::all();
        // $barang = Barang::all();

        // return view('pengadaan', compact('pelaksanas'));
        return view('admin.input_pengadaan');
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
            'pelaksana_id' => 'required',
            'jenis_pengadaan' => 'required',
            'total_hps' => 'required',
            'deskripsi_hps' => 'required',
            'harga_penawaran' => 'required',
            'deskripsi_penawaran' => 'required',
            'nilai_negosiasi' => 'required',
            'deskripsi_negosiasi' => 'required'
        ]);

        Pengadaan::create($request->post());

        return redirect()->route('pengadaan.index')
            ->with('success', 'Data Pelaksana Berhasil Ditambahkan');
        // return redirect()->to('input_jadwal');
        // return redirect()->route('home')
        //                 ->with('success','Aset Berhasil Dihapus!');


        // return redirect()->route('jadwals.index')
        //                 ->with('success','Data Pelaksana Berhasil Disimpan!');

        // $pelaksana =   Pelaksana::create($request->except([

        //     'jenis_pengadaan',
        //     'tanggal_acara',
        //     'deskripsi_tgl_acara',
        //     'waktu_acara',
        //     'tempat_acara',
        //     'total_hps',
        //     'deskripsi_hps',
        //     'nilai_negosiasi',
        //     'deskripsi_nilai_nego',        
        // ]));

        // $request['pelaksana_id'] = $pelaksana->id;
        // $pengadaan = Pengadaan::create($request->only([
        //     'pelaksana_id',
        //     'jenis_pengadaan',
        //     'tanggal_acara',
        //     'deskripsi_tgl_acara',
        //     'waktu_acara',
        //     'tempat_acara',
        //     'total_hps',
        //     'deskripsi_hps',
        //     'nilai_negosiasi',
        //     'deskripsi_nilai_nego'        
        // ]));

        // return back()->with('success',' Post baru berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    //Nota Dinas 1
    public function show1($id)
    // public function show(Request $request,$id)
    {
        $pengadaan1 = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
        ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
        ->get();

        // $pejabat = Pejabat::all();
        
        
        return view(
            'print.nota_dinas1',
            ['pengadaan1' => $pengadaan1],
            ['barang'=>$barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan1, $barang, $pejabat, );
        
    }
    //Nota Dinas 2
    public function show2($id)
    // public function show(Request $request,$id)
    {
        $pengadaan1 = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
        ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
        ->get();

        // $pejabat = Pejabat::all();
        
        
        return view(
            'print.nota_dinas2',
            ['pengadaan1' => $pengadaan1],
            ['barang'=>$barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan1, $barang, $pejabat, );
    }
    //Nota Dinas 3
    public function show3($id)
    // public function show(Request $request,$id)
    {
        $pengadaan1 = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
        ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
        ->get();

        // $pejabat = Pejabat::all();
        
        
        return view(
            'print.nota_dinas4',
            ['pengadaan1' => $pengadaan1],
            ['barang'=>$barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan1, $barang, $pejabat, );
    }

    public function show4($id)
    // public function show(Request $request,$id)
    {
        $pengadaan1 = Jadwal::find($id);
        // return view('admin.input_pengadaan', compact('pengadaan'));
        // return view('admin.detail', compact('pengadaan'));
        // $pengadaan1 = Pengadaan::find($id);
        // return view('admin.pengadaan1',compact('pengadaans'))
        return view('print.ba_evaluasi', compact('pengadaan'))
            // ->renderSections()['content']
        ;
    }

    public function show5(Pengadaan $pengadaan) 
    // public function show(Request $request,$id)
    {
        return view('print.ba_nego', compact('pengadaan'));
    }

    public function show6(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.ba_pekerjaan', compact('pengadaan'));
    }

    public function show7(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.ba_penawaran', compact('pengadaan'));
    }

    public function show8(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.daftar_hadir', compact('pengadaan'));
    }

    public function show9(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.pakta_integritas', compact('pengadaan'));
    }

    public function show10(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.penetapan_penyedia', compact('pengadaan'));
    }

    public function show11(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.undangan_nego', compact('pengadaan'));
    }

    public function show12(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.undangan_penawaran', compact('pengadaan'));
    }

    public function show13(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.undangan_penyedia', compact('pengadaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengadaan $pengadaan)
    {

        // $pengadaan = Pengadaan::where('id', $pengadaan)->first();
        // return view('admin.edit', compact('pengadaan'));
        return view('admin.input_pengadaan', compact('pengdaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, pengadaan $pengadaan)
    public function update(Request $request, $id)
    {
        $pengadaan = Pengadaan::find($id)->update($request->all());

        return back()->with('success', ' Data telah diperbaharui!');

        // $pengadaan = Pengadaan::where('id', $pengadaan)->first();
        // // $pengadaan->
        // // $pengadaan
        // $request->validate([
        //     // 'id' => 'required',
        //     'pelaksana_id' => 'required',
        //     'jenis_pengadaan' => 'required',
        //     'total_hps' => 'required',
        //     'deskripsi_hps' => 'required',
        //     'harga_penawaran' => 'required',
        //     'deskripsi_penawaran' => 'required',
        //     'nilai_negosiasi' => 'required',
        //     'deskripsi_negosiasi' => 'required'
        // ]);

        // Pengadaan::create($request->post());

        // return redirect()->to('input_jadwal');


        // $pengadaan =   Pelaksana::updating($request->except([
        //     'pelaksana_id',
        //     'jenis_pengadaan',
        //     'total_hps',
        //     'deskripsi_hps',
        //     'harga_penawaran',
        //     'deskripsi_penawaran',
        //     'nilai_negosiasi',
        //     'deskripsi_negosiasi'
        // ]));

        // $request['pelaksana_id'] = $pelaksanas ->id;
        // $pengadaans = Pengadaan::updating($request->only([
        //     'pelaksana_id',
        //     'jenis_pengadaan',
        //     'total_hps',
        //     'deskripsi_hps',
        //     'harga_penawaran',
        //     'deskripsi_penawaran',
        //     'nilai_negosiasi',
        //     'deskripsi_negosiasi'  
        // ]));

        // return back()->with('success',' Post baru berhasil dibuat.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengadaan $pengadaan)
    {
        $pengadaan->delete();

        return redirect()->route('pengadaan.index')
            ->with('success', 'Pengadaan Berhasil Dihapus!');
        // return view(
        //     'admin.input_pengadaan',
        //     // 'admin.input_pengadaan',
        //     // ['pelaksana' => $pelaksana],
        //     ['pengadaan' => $pengadaan],)
        // ->with('success', 'Pengadaan Berhasil Dihapus!');
    }
    // public function destroy1(pengadaan $pengadaan1)
    // {
    //     $pengadaan1->delete();

    //     return redirect()->route('pengadaan.index1')
    //         ->with('success', 'Pengadaan Berhasil Dihapus!');
    // }

        // public function lihat($request)
        // {
        //     // $cari1 = $request->cari1;
        //     $pengadaannew = DB::table('pengadaans')
        //         ->join('pengadaans', 'pengadaan_id', '=', 'pengadaans.id')
        //         ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
        //         // ->paginate();
        //         ->get();
        //     return view('print.nota_dinas1', compact('pengadaannew'));
        // }
}
