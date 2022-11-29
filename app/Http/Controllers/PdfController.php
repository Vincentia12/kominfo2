<?php

namespace App\Http\Controllers;

use App\Models\Pejabat;
use App\Models\Pengadaan;
use App\Models\Jadwal;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PdfController extends Controller
{
    public function index()
    {
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

    // Nota Dinas1/ Nota Dinas dari KPA ke PPK
    public function nota_dinas1(Request $request, $id)
    {
        $pengadaan1 = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan1, $barang );
        $pdf = PDF::loadview(
            // $pdf = word::loadview(
            'cetak/nota_dinas1',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            // ['pejabat' => $pejabat],
            // );
        )->setPaper('f4', 'potrait');
        return $pdf->download('NotaDinas1.pdf');
        // dd($pdf);
    }

    // Nota Dinas2/Nota Dinas dari PPK ke Pejabat Pengadaan + Lampiran OE (HPS)
    public function nota_dinas2(Request $request, $id)
    {
        $pengadaan1 = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
            ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan1, $barang );
        $pdf = PDF::loadview(
            // $pdf = word::loadview(
            'cetak/nota_dinas2',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            // ['pejabat' => $pejabat],
            // );
        )->setPaper('f4', 'potrait');
        return $pdf->download('NotaDinas2.pdf');
        // dd($pdf);
    }

    //Surat Undangan, Pengambilan Dokumen Kualifikasi dan Dokumen Pengadaan Langsung kepada Penyedia Barang/Jasa
    public function undangan_persiapan(Request $request, $id)
    {
        $pengadaan1 = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan1, $barang );
        $pdf = PDF::loadview(
            // $pdf = word::loadview(
            'cetak/undangan_persiapan',
            ['pengadaan1' => $pengadaan1],
            // ['barang' => $barang],
            // ['pejabat' => $pejabat],
            // );
        )->setPaper('f4', 'potrait');
        return $pdf->download('UndanganPersiapan.pdf');
        // dd($pdf);
    }

    //PAKTA  INTEGRITAS
    public function pakta_integritas(Request $request, $id)
    {
        $pengadaan1 = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan1, $barang );
        // dd($pdf);
        $pdf = PDF::loadview(
            'cetak/pakta_integritas',
            ['pengadaan1' => $pengadaan1],
        )->setPaper('f4', 'potrait');
        return $pdf->download('PaktaIntegritas.pdf');
    }

    //Surat Pernyataan Minat
    //Pemasukan Dokumen Kualifikasi

    // Daftar Hadir Pengembalian Dokumen Prakualifikasi
    public function daftar_hadir(Request $request, $id)
    {

        $pengadaan1 = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan1, $barang );
        // dd($pdf);
        $pdf = PDF::loadview(
            'cetak/daftar_hadir',
            ['pengadaan1' => $pengadaan1],
        )->setPaper('f4', 'potrait');
        return $pdf->download('Daftar_Hadir.pdf');
    }

    // BA. Evaluasi Dokumen Prakualifikasi
    public function ba_evaluasi(Request $request, $id)
    {
        $pengadaan1 = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan1, $barang );
        // dd($pdf);
        $pdf = PDF::loadview(
            'cetak/ba_evaluasi',
            ['pengadaan1' => $pengadaan1],
        )->setPaper('f4', 'potrait');
        return $pdf->download('Berita_Acara_Evaluasi.pdf');
    }

    // Lampiran BA. Evaluasi Dokumen Prakualifikasi
    public function lampiran_ba_evaluasi(Request $request, $id)
    {

        $pengadaan1 = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan1, $barang );
        // dd($pdf);
        $pdf = PDF::loadview(
            'cetak/lampiran_ba_evaluasi',
            ['pengadaan1' => $pengadaan1],
        )->setPaper('f4', 'landscape');
        return $pdf->download('lampiran_Berita_Acara_Evaluasi.pdf');
    }

    // Surat Undangan Permintaan Penawaran Harga
    public function undangan_penawaran(Request $request, $id)
    {
        $pengadaan1 = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan1, $barang );
        // dd($pdf);
        $pdf = PDF::loadview(
            'cetak/undangan_penawaran',
            ['pengadaan1' => $pengadaan1],
        )->setPaper('f4', 'potrait');
        return $pdf->download('UndanganPenawaran.pdf');
    }

    // BA. Penjelasan Pekerjaan
    public function ba_pekerjaan(Request $request, $id)
    {
        $pengadaan1 = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/ba_pekerjaan',
            ['pengadaan1' => $pengadaan1],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('BAPekerjaan.pdf');
    }

    // Pemasukan Penawaran

    // BA. Pembukaan Penawaran
    public function ba_penawaran(Request $request, $id)
    {
        $pengadaan1 = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/ba_penawaran',
            ['pengadaan1' => $pengadaan1],
        )->setPaper('f4', 'potrait');
        return $pdf->download('BAPenawaran.pdf');
    }

    // Surat Undangan Klarifikasi/Negosiasi
    public function undangan_nego(Request $request, $id)
    {

        $pengadaan1 = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/undangan_nego',
            ['pengadaan1' => $pengadaan1],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('UndanganNego.pdf');
    }

    // BA. Klarifikasi/Negosiasi
    public function ba_nego(Request $request, $id)
    {

        $pengadaan1 = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/ba_nego',
            ['pengadaan1' => $pengadaan1],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('BA_Nego.pdf');
    }

    // Lampiran BA. Klarifikasi/Negosiasi

    // BA. Hasil Pengadaan Langsung

    // Nota Dinas3/ Nota Dinas dari Pejabat Pengadaan ke PPK
    public function nota_dinas3(Request $request, $id)
    {

        $pengadaan1 = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/nota_dinas3',
            ['pengadaan1' => $pengadaan1],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('NotaDinas3.pdf');
    }

    // Penetapan Penyedia Jasa
    public function penetapan_penyedia(Request $request, $id)
    {

        $pengadaan1 = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/penetapan_penyedia',
            ['pengadaan1' => $pengadaan1],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('PenetapanPenyedia.pdf');
    }

    // Penunjukan Penyedia Barang/Jasa
    public function undangan_penyedia(Request $request, $id)
    {

        $pengadaan1 = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/undangan_penyedia',
            ['pengadaan1' => $pengadaan1],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('UndanganPenyedia.pdf');
    }

    // Surat Perintah Kerja
    public function surat_perintah_kerja(Request $request, $id)
    {

        $pengadaan1 = Jadwal::find($id);
        $barang = DB::table('barangs')
        // ->join('pengadaans.id', '=', 'barangs.pengadaan_id')
        // ->join('pelaksanas.pelaksana_id', '=', 'pelaksanas.id')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan1->pengadaan_id . "%")
            // ->select('barangs.harga_satuan', '*', 'barangs.jumlah_barang')
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();
        // $total = DB::table('barangs')
        // ->get();

        $pdf = PDF::loadview(
            'cetak/surat_perintah_kerja',
            ['pengadaan1' => $pengadaan1],
            ['barang' => $barang],
            // ['total' => $total],
            // ['pejabat' => $pejabat],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('surat perintah kerja.pdf');
    }
    // Surat Perintah Mulai Kerja (SPMK)
    public function surat_perintah_mulai_kerja(Request $request, $id)
    {

        $pengadaan1 = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/surat_perintah_mulai_kerja',
            ['pengadaan1' => $pengadaan1],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('SPMK.pdf');
    }

    // BA. Serah Terima Hasil Pekerjaan

    // BA. Hasil Pemeriksaan Administratif

    // BA. Hasil Pembayaran

}
