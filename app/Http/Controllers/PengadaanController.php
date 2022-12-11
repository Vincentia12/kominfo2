<?php

namespace App\Http\Controllers;

use App\Models\Pengadaan;
use App\Models\pelaksana;
use App\Models\barang;
use App\Models\jadwal;
use App\Models\Pejabat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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

    // pengadaan dibawa 50juta
    // public function index1(Request $request)
    public function index1()
    {
        $pengadaan = DB::table('pengadaans')
            ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            ->where('nilai_negosiasi', '<=', 50000000)
            // ->where('nilai_negosiasi', '<=', 50)
            // ->join('barangs', 'pengadaans.id', '=', 'barangs.pengadaan_id')
            ->join('jadwals', 'pengadaans.id', '=', 'jadwals.pengadaan_id')
            // ->groupBy('jadwals.pengadaan_id')
            // ->paginate();
            ->get();
        // }

        // $pilihan = Pengadaan::all();
        // $pilihan = DB::table('pengadaans')
        $pilihan = DB::table('pelaksanas')
            // ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            ->join('pengadaans', 'pengadaans.pelaksana_id', '=', 'pelaksanas.id')
            ->where('pengadaans.nilai_negosiasi', '<=', 50000000)
            // ->where('pengadaans.nilai_negosiasi', '<=', 50)
            // ->paginate();
            ->get();

        // $pejabat = Pejabat::all();
        // $time = jadwal::get('tanggal');
        // $tanggal = Carbon::parse($time)->translatedFormat('l D F Y');

        return view(
            'admin.pengadaan1',
            ['pengadaan' => $pengadaan],
            ['pilihan' => $pilihan],
            // ['tanggal' =>$tanggal]
            // ['pejabat' => $pejabat],
            // ['pejabat' => $pejabat]
        );
        // )->with('i', (request()->input('page', 1) - 1) * 5);
        // dd($pengadaan, $pilihan);

    }

    public function Cari1(Request $request)
    {
        $cari1 = $request->cari1;

        $pengadaan = Jadwal::where('pengadaan_id', 'like', "%" . $cari1 . "%")
            ->join('pengadaans', 'jadwals.pengadaan_id', '=', 'pengadaans.id')
            ->join('pelaksanas', 'pengadaans.pelaksana_id', '=', 'pelaksanas.id')
            // ->paginate();
        ->get();
        $pilihan = DB::table('pelaksanas')
            // ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            ->join('pengadaans', 'pengadaans.pelaksana_id', '=', 'pelaksanas.id')
            ->where('pengadaans.nilai_negosiasi', '<=', 50000000)
            // ->where('pengadaans.nilai_negosiasi', '<=', 50)
            // ->paginate();
            ->get();

        // $pejabat = Pejabat::all();
        // mengirim data pegawai ke view index
        return view(
            'admin.pengadaan1',
            ['pengadaan' => $pengadaan],
            ['pilihan' => $pilihan],
        );
        // return view('admin.pengadaan', compact('pengadaan'));
        // dd($pengadaan);
    }

    public function index2()
    {
        $pengadaan = DB::table('pengadaans')
            ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            ->where('nilai_negosiasi', '>', 50000000)
            // ->where('nilai_negosiasi', '>', 50)
            // ->join('barangs', 'pengadaans.id', '=', 'barangs.pengadaan_id')
            ->join('jadwals', 'pengadaans.id', '=', 'jadwals.pengadaan_id')
            // ->groupBy('jadwals.pengadaan_id')
            // ->paginate();
            ->get();

        $pilihan = DB::table('pelaksanas')
            // ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            ->join('pengadaans', 'pengadaans.pelaksana_id', '=', 'pelaksanas.id')
            ->where('pengadaans.nilai_negosiasi', '>', 50000000)
            // ->where('pengadaans.nilai_negosiasi', '>', 50)
            // ->paginate();
            ->get();

        $pejabat = Pejabat::all();

        return view(
            'admin.pengadaan2',
            ['pengadaan' => $pengadaan],
            ['pilihan' => $pilihan],
            ['pejabat' => $pejabat],
            // ['jadwal' => $jadwal],
            // ['pelaksana' => $pelaksana]
        );
        // dd($pengadaan);
    }
    public function cari2(Request $request)
    {
        // menangkap data pencarian
        $cari2 = $request->cari2;

        // mengambil data dari table pegawai sesuai pencarian data
        $pengadaan = Jadwal::where('pengadaan_id', 'like', "%" . $cari2 . "%")
            ->join('pengadaans', 'jadwals.pengadaan_id', '=', 'pengadaans.id')
            ->join('pelaksanas', 'pengadaans.pelaksana_id', '=', 'pelaksanas.id')
            // ->paginate();
            ->get();

        $pilihan = DB::table('pelaksanas')
            // ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            ->join('pengadaans', 'pengadaans.pelaksana_id', '=', 'pelaksanas.id')
            ->where('pengadaans.nilai_negosiasi', '>', 50000000)
            // ->where('pengadaans.nilai_negosiasi', '>', 50)
            // ->paginate();
            ->get();

        // $pejabat = Pejabat::all();
        // mengirim data pegawai ke view index
        return view(
            'admin.pengadaan2',
            ['pengadaan' => $pengadaan],
            ['pilihan' => $pilihan],
        );
        // return view('admin.pengadaan2', compact('pengadaan2'));
        // dd($pengadaan, $pejabat);
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
            'kode_rekening' => 'required',
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    // Nota Dinas1/ Nota Dinas dari KPA ke PPK
    public function show1($id)
    // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.nota_dinas1',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan, $barang, $pejabat, );

    }

    // Nota Dinas2/Nota Dinas dari PPK ke Pejabat Pengadaan + Lampiran OE (HPS)
    public function show2($id)
    // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.nota_dinas2',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan, $barang, $pejabat, );
    }

    //Surat Undangan, Pengambilan Dokumen Kualifikasi dan Dokumen Pengadaan Langsung kepada Penyedia Barang/Jasa
    public function show3($id)
    // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.undangan_persiapan',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan, $barang, $pejabat, );
    }

    //PAKTA  INTEGRITAS
    public function show4($id)
    // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.pakta_integritas',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan, $barang, $pejabat, );
    }

    //Surat Pernyataan Minat
    public function show5(Pengadaan $pengadaan)
    // public function show(Request $request,$id)
    {
        // $pengadaan = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
        // ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // // $pejabat = Pejabat::all();


        // return view(
        //     'detail.',
        //     ['pengadaan' => $pengadaan],
        //     ['barang'=>$barang],
        //     ['pejabat' => $pejabat],
        // );
        // // dd($pengadaan, $barang, $pejabat, );
    }

    //Pemasukan Dokumen Kualifikasi
    public function show6(Pengadaan $pengadaan)
    // public function show(Request $request,$id)
    {
        return view('detail.ba_nego', compact('pengadaan'));
    }

    // Daftar Hadir Pengembalian Dokumen Prakualifikasi
    public function show7($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.daftar_hadir',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan, $barang, $pejabat, );
    }

    // BA. Evaluasi Dokumen Prakualifikasi
    public function show8($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.ba_evaluasi',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan, $barang, $pejabat, );
    }

    // Lampiran BA. Evaluasi Dokumen Prakualifikasi
    public function show9($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.lampiran_ba_evaluasi',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan, $barang, $pejabat, );
    }

    // Surat Undangan Permintaan Penawaran Harga
    public function show10($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.undangan_penawaran',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan, $barang, $pejabat, );
    }

    // BA. Penjelasan Pekerjaan
    public function show11($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.ba_pekerjaan',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan, $barang, $pejabat, );
    }

    // Pemasukan Penawaran
    public function show12(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        // $pengadaan = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        //     ->get();

        // // $pejabat = Pejabat::all();


        // return view(
        //     'detail.ba_pekerjaan',
        //     ['pengadaan' => $pengadaan],
        //     ['barang' => $barang],
        //     ['pejabat' => $pejabat],
        // );
    }

    // BA. Pembukaan Penawaran
    public function show13($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.ba_penawaran',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // Surat Undangan Klarifikasi/Negosiasi
    public function show14($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.undangan_nego',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // BA. Klarifikasi/Negosiasi
    public function show15($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.ba_nego',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // Lampiran BA. Klarifikasi/Negosiasi
    public function show16(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('detail.undangan_penyedia', compact('pengadaan'));
    }

    // BA. Hasil Pengadaan Langsung
    public function show17(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('detail.undangan_penyedia', compact('pengadaan'));
    }

    // Nota Dinas3/ Nota Dinas dari Pejabat Pengadaan ke PPK
    public function show18($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.nota_dinas3',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // Penetapan Penyedia Jasa
    public function show19($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.penetapan_penyedia',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // Penunjukan Penyedia Barang/Jasa
    public function show20($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.undangan_penyedia',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // Surat Perintah Kerja
    public function show21($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'detail.surat_perintah_kerja',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // Surat Perintah Mulai Kerja (SPMK)
    public function show22($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        return view(
            'detail.surat_perintah_mulai_kerja',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // BA. Serah Terima Hasil Pekerjaan
    public function show23(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('detail.undangan_penyedia', compact('pengadaan'));
    }

    // BA. Penyerahan Barang/Jasa
    public function show24(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('detail.undangan_penyedia', compact('pengadaan'));
    }

    // BA. Hasil Pemeriksaan Administratif
    public function show25(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('detail.undangan_penyedia', compact('pengadaan'));
    }

    // BA. Hasil Pembayaran
    public function show26(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('detail.undangan_penyedia', compact('pengadaan'));
    }

    // Laporan Proses Pengadaan Barang/Jasa
    public function show27($id) // public function show(Request $request,$id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'lap_proses_pengadaan',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
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
    }
}
