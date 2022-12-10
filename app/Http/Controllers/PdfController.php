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
        $pengadaan = DB::table('pengadaans')
            ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
            ->where('nilai_negosiasi', '<=', 50)
            // ->join('barangs', 'pengadaans.id', '=', 'barangs.pengadaan_id')
            ->join('jadwals', 'pengadaans.id', '=', 'jadwals.pengadaan_id')
            // ->groupBy('jadwals.pengadaan_id')
            ->paginate();

        $pejabat = Pejabat::all();

        return view(
            'admin.pengadaan',
            ['pengadaan' => $pengadaan],
            // ['pejabat' => $pejabat],
            ['pejabat' => $pejabat]

        );
        // dd($pengadaan, $pejabat);
    }

    // Nota Dinas1/ Nota Dinas dari KPA ke PPK
    public function nota_dinas1(Request $request, $id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();

        // dd($pengadaan, $barang );
        $pdf = PDF::loadview(
            // $pdf = word::loadview(
            'cetak/nota_dinas1',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            // ['pejabat' => $pejabat],
            // );
        )->setPaper('f4', 'potrait');
        return $pdf->download('NotaDinas1.pdf');
        // dd($pdf);
    }
    // Nota Dinas1/ Nota Dinas dari KPA ke PPK
    public function print1(Request $request, $id)
    {
        $pengadaan2 = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan2->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan, $barang );
        $pdf = PDF::loadview(
            // $pdf = word::loadview(
            'atas50/nota_dinas1',
            ['pengadaan2' => $pengadaan2],
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
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan, $barang );
        $pdf = PDF::loadview(
            // $pdf = word::loadview(
            'cetak/nota_dinas2',
            ['pengadaan' => $pengadaan],
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
        $pengadaan = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan, $barang );
        $pdf = PDF::loadview(
            // $pdf = word::loadview(
            'cetak/undangan_persiapan',
            ['pengadaan' => $pengadaan],
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
        $pengadaan = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan, $barang );
        // dd($pdf);
        $pdf = PDF::loadview(
            'cetak/pakta_integritas',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        return $pdf->download('PaktaIntegritas.pdf');
    }

    //Surat Pernyataan Minat
    //Pemasukan Dokumen Kualifikasi

    // Daftar Hadir Pengembalian Dokumen Prakualifikasi
    public function daftar_hadir(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan, $barang );
        // dd($pdf);
        $pdf = PDF::loadview(
            'cetak/daftar_hadir',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        return $pdf->download('Daftar_Hadir.pdf');
    }

    // BA. Evaluasi Dokumen Prakualifikasi
    public function ba_evaluasi(Request $request, $id)
    {
        $pengadaan = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan, $barang );
        // dd($pdf);
        $pdf = PDF::loadview(
            'cetak/ba_evaluasi',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        return $pdf->download('Berita_Acara_Evaluasi.pdf');
    }

    // Lampiran BA. Evaluasi Dokumen Prakualifikasi
    public function lampiran_ba_evaluasi(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan, $barang );
        // dd($pdf);
        $pdf = PDF::loadview(
            'cetak/lampiran_ba_evaluasi',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'landscape');
        return $pdf->download('lampiran_Berita_Acara_Evaluasi.pdf');
    }

    // Surat Undangan Permintaan Penawaran Harga
    public function undangan_penawaran(Request $request, $id)
    {
        $pengadaan = Jadwal::find($id);
        // $barang = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
        //     ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan, $barang );
        // dd($pdf);
        $pdf = PDF::loadview(
            'cetak/undangan_penawaran',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        return $pdf->download('UndanganPenawaran.pdf');
    }

    // BA. Penjelasan Pekerjaan
    public function ba_pekerjaan(Request $request, $id)
    {
        $pengadaan = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/ba_pekerjaan',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('BAPekerjaan.pdf');
    }

    // Pemasukan Penawaran

    // BA. Pembukaan Penawaran
    public function ba_penawaran(Request $request, $id)
    {
        $pengadaan = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/ba_penawaran',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        return $pdf->download('BAPenawaran.pdf');
    }

    // Surat Undangan Klarifikasi/Negosiasi
    public function undangan_nego(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/undangan_nego',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('UndanganNego.pdf');
    }

    // BA. Klarifikasi/Negosiasi
    public function ba_nego(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/ba_nego',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('BA_Nego.pdf');
    }

    // Lampiran BA. Klarifikasi/Negosiasi

    // BA. Hasil Pengadaan Langsung

    // Nota Dinas3/ Nota Dinas dari Pejabat Pengadaan ke PPK
    public function nota_dinas3(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/nota_dinas3',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('NotaDinas3.pdf');
    }

    // Penetapan Penyedia Jasa
    public function penetapan_penyedia(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/penetapan_penyedia',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('PenetapanPenyedia.pdf');
    }

    // Penunjukan Penyedia Barang/Jasa
    public function undangan_penyedia(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/undangan_penyedia',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('UndanganPenyedia.pdf');
    }

    // Surat Perintah Kerja
    public function surat_perintah_kerja(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            // ->join('pengadaans','pengadaans.id', '=', 'barangs.pengadaan_id')
            // ->join('jadwals','jadwals.pengadaan_id', '=', 'pengadaans.id')
            // ->select('barangs.harga_satuan', '*', 'barangs.jumlah_barang')
            ->get();
        // $sum = DB::table('barangs')
        //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
        //     ->sum('jumlah_harga');
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        //     ->get();
        // $total = DB::table('barangs')
        // ->get();
        // dd($barang, $sum);
        $pdf = PDF::loadview(
            'cetak/surat_perintah_kerja',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            // ['sum' => $sum],
            // ['pejabat' => $pejabat],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('surat perintah kerja.pdf');
    }
    // Surat Perintah Mulai Kerja (SPMK)
    public function surat_perintah_mulai_kerja(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/surat_perintah_mulai_kerja',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('SPMK.pdf');
    }

    // BA. Serah Terima Hasil Pekerjaan
    public function ba_serah_terima(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan, $barang );
        $pdf = PDF::loadview(
            // $pdf = word::loadview(
            'cetak/ba_serah_terima',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            // ['pejabat' => $pejabat],
            // );
        )->setPaper('f4', 'potrait');
        return $pdf->download('Berita Acara Serah Terima Hsil Pekerjaan.pdf');
        // dd($pdf);
    }

    // Laporan Proses Pengadaan Barang/Jasa 
    public function lap_proses_pengadaan(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        // $pejabat = DB::table('pejabats')
        //     ->where('id', '=', 1)
        // ->get();

        // $pejabat = Pejabat::all();



        // dd($pengadaan, $barang );
        $pdf = PDF::loadview(
            // $pdf = word::loadview(
            'cetak/lap_proses_pengadaan',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            // ['pejabat' => $pejabat],
            // );
        )->setPaper('f4', 'potrait');
        return $pdf->download('Laporan Proses Pengadaan Barang.pdf');
    }

    // BA. Penyerahan Barang/Jasa
    public function ba_peny_barang(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/ba_peny_barang',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('BeritaAcara_PenyerahanBarang/Jasa.pdf');
    }

    // BA. Hasil Pemeriksaan Administratif

    // BA. Hasil Pembayaran
    public function ba_pembayaran(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);

        $pdf = PDF::loadview(
            'cetak/ba_pembayaran',
            ['pengadaan' => $pengadaan],
        )->setPaper('f4', 'potrait');
        // )->setPaper('f4', 'legal');
        return $pdf->download('BeritaAcara_HasilPembayaran.pdf');
    }

    // Kuitansi Kontrak
    public function kuitansi_kontrak(Request $request, $id)
    {

        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pdf = PDF::loadview(
            'cetak/kuitansi_kontrak',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
        )->setPaper('f4', 'potrait');
        return $pdf->download('Kuitansi Kontrak.pdf');
    }
}
