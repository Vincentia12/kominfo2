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

        )->with('i', (request()->input('page', 1) - 1) * 5);
        // dd($pengadaan1, $pejabat);

    }

    // public function Cari1(Request $request)
    // {
    //     // menangkap data pencarian
    //     $cari1 = $request->cari1;

    //     // mengambil data dari table pegawai sesuai pencarian data
    //     $pengadaan = Jadwal::where('pengadaan_id', 'like', "%" . $cari1 . "%")
    //         ->join('pengadaans', 'pengadaan_id', '=', 'pengadaans.id')
    //         ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
    //         ->select('jadwals.*', 'pengadaans.*', 'pelaksana.*')

    //         // ->paginate();
    //         ->get();

    //     // $pejabat = Pejabat::all();
    //     // mengirim data pegawai ke view index
    //     // return view('admin.pengadaan1',['pengadaan1' => $pengadaan1]);
    //     return view('admin.pengadaan1', compact('pengadaan1'));

    //     //pengadaan2
    // }

    public function index2()
    {
        $pengadaan2 = DB::table('pengadaans')
            ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            ->where('nilai_negosiasi', '>', 50)
            // ->join('barangs', 'pengadaans.id', '=', 'barangs.pengadaan_id')
            ->join('jadwals', 'pengadaans.id', '=', 'jadwals.pengadaan_id')
            // ->groupBy('jadwals.pengadaan_id')
            ->paginate();
        // $pengadaan2 = DB::table('pengadaans')
        //     // ->select('*')
        //     // ->join('pengadaans', 'pelaksanas.id', '=', 'pengadaans.pelaksana_id')
        //     ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
        //     ->where('nilai_negosiasi', '>', 50)
        //     ->join('jadwals', 'pengadaans.id', '=', 'jadwals.pengadaan_id')
        //     ->groupBy('jadwals.pengadaan_id')
        //     // ->get();
        //     // ->paginate(10);
        //     ->paginate();

        $pejabat = Pejabat::all();

        return view(
            'admin.pengadaan2',
            ['pengadaan2' => $pengadaan2],
            ['pejabat' => $pejabat]
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
    // Nota Dinas1/ Nota Dinas dari KPA ke PPK
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
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan1, $barang, $pejabat, );

    }

    // Nota Dinas2/Nota Dinas dari PPK ke Pejabat Pengadaan + Lampiran OE (HPS)
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
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan1, $barang, $pejabat, );
    }

    //Surat Undangan, Pengambilan Dokumen Kualifikasi dan Dokumen Pengadaan Langsung kepada Penyedia Barang/Jasa
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
            'print.undangan_persiapan',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan1, $barang, $pejabat, );
    }

    //PAKTA  INTEGRITAS
    public function show4($id)
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
            'print.pakta_integritas',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan1, $barang, $pejabat, );
    }

    //Surat Pernyataan Minat
    public function show5(Pengadaan $pengadaan)
    // public function show(Request $request,$id)
    {
        // $pengadaan1 = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
        // ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // // $pejabat = Pejabat::all();


        // return view(
        //     'print.',
        //     ['pengadaan1' => $pengadaan1],
        //     ['barang'=>$barang],
        //     ['pejabat' => $pejabat],
        // );
        // // dd($pengadaan1, $barang, $pejabat, );
    }

    //Pemasukan Dokumen Kualifikasi
    public function show6(Pengadaan $pengadaan)
    // public function show(Request $request,$id)
    {
        return view('print.ba_nego', compact('pengadaan'));
    }

    // Daftar Hadir Pengembalian Dokumen Prakualifikasi
    public function show7($id) // public function show(Request $request,$id)
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
            'print.daftar_hadir',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan1, $barang, $pejabat, );
    }

    // BA. Evaluasi Dokumen Prakualifikasi
    public function show8($id) // public function show(Request $request,$id)
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
            'print.ba_evaluasi',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan1, $barang, $pejabat, );
    }

    // Lampiran BA. Evaluasi Dokumen Prakualifikasi
    public function show9($id) // public function show(Request $request,$id)
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
            'print.evaluasi_dok',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan1, $barang, $pejabat, );
    }

    // Surat Undangan Permintaan Penawaran Harga
    public function show10($id) // public function show(Request $request,$id)
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
            'print.undangan_penawaran',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan1, $barang, $pejabat, );
    }

    // BA. Penjelasan Pekerjaan
    public function show11($id) // public function show(Request $request,$id)
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
            'print.ba_pekerjaan',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan1, $barang, $pejabat, );
    }

    // Pemasukan Penawaran
    public function show12(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        // $pengadaan1 = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        //     ->get();

        // // $pejabat = Pejabat::all();


        // return view(
        //     'print.ba_pekerjaan',
        //     ['pengadaan1' => $pengadaan1],
        //     ['barang' => $barang],
        //     ['pejabat' => $pejabat],
        // );
    }

    // BA. Pembukaan Penawaran
    public function show13($id) // public function show(Request $request,$id)
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
            'print.ba_penawaran',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // Surat Undangan Klarifikasi/Negosiasi
    public function show14($id) // public function show(Request $request,$id)
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
            'print.undangan_nego',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // BA. Klarifikasi/Negosiasi
    public function show15($id) // public function show(Request $request,$id)
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
            'print.ba_nego',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // Lampiran BA. Klarifikasi/Negosiasi
    public function show16(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.undangan_penyedia', compact('pengadaan'));
    }

    // BA. Hasil Pengadaan Langsung
    public function show17(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.undangan_penyedia', compact('pengadaan'));
    }

    // Nota Dinas3/ Nota Dinas dari Pejabat Pengadaan ke PPK
    public function show18($id) // public function show(Request $request,$id)
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
            'print.nota_dinas3',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // Penetapan Penyedia Jasa
    public function show19($id) // public function show(Request $request,$id)
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
            'print.penetapan_penyedia',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // Penunjukan Penyedia Barang/Jasa
    public function show20($id) // public function show(Request $request,$id)
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
            'print.undangan_penyedia',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // Surat Perintah Kerja
    public function show21($id) // public function show(Request $request,$id)
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
            'print.surat_perintah_kerja',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
    }

    // Surat Perintah Mulai Kerja (SPMK)
    public function show22(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.undangan_penyedia', compact('pengadaan'));
    }

    // BA. Serah Terima Hasil Pekerjaan
    public function show23(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.undangan_penyedia', compact('pengadaan'));
    }

    // BA. Penyerahan Barang/Jasa
    public function show24(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.undangan_penyedia', compact('pengadaan'));
    }

    // BA. Hasil Pemeriksaan Administratif
    public function show25(Pengadaan $pengadaan) // public function show(Request $request,$id)
    {
        return view('print.undangan_penyedia', compact('pengadaan'));
    }

    // BA. Hasil Pembayaran
    public function show26(Pengadaan $pengadaan) // public function show(Request $request,$id)
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
