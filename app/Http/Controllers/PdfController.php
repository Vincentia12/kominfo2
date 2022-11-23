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
            ['barang'=>$barang],
            // ['pejabat' => $pejabat],
        // );
        )->setPaper('a4', 'potrait');
        return $pdf->download('NotaDinas1.pdf');
        // dd($pdf);
    }

    public function nota_dinas2()
    {
        // $pengadaan = DB::table('pengadaans')
        //     // ->select('*')
        //     // ->join('pengadaans', 'pelaksanas.id', '=', 'pengadaans.pelaksana_id')
        //     ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
        //     ->join('jadwals', 'pengadaans.id', '=', 'jadwals.pengadaan_id')
        //     ->join('barangs', 'pengadaans.id', '=', 'barangs.pengadaan_id')
        //     // ->groupBy('jadwals.pengadaan_id')
        //     // ->get();
        //     // ->paginate(10);
        // ->paginate();
        // $pengadaan = Jadwal::where('kegiatan', '=', 'Nota Dinas dari KPA ke PPK')
        // $pengadaan = Jadwal::where('jadwals.kegiatan','like',"%".'Nota Dinas dari KPA ke PPK'."%")
        // ->paginate();
        // $pejabat = Pejabat::all();

        // $data = [
        //     // 'title' => 'Welcome to Tutsmake.com',
        //     // 'date' => date('m/d/Y')
        //     'notadinas1' => $notadinas1
        // ];

        // $pdf = PDF::loadView('print.nota_dinas1', $data);
        // $pdf = Pengadaan::View('print.nota_dinas1', $data);

        $pdf = PDF::loadview(
            // $pdf = word::loadview(
            'cetak.nota_dinas2',
            // ['notadinas1' => $notadinas1],
            // ['pengadaan' => $pengadaan],
            // ['pejabat' => $pejabat]
        );
        return $pdf->download('NotaDinas2.pdf');
    }

    public function nota_dinas4()
    {
        // $pengadaan = DB::table('pengadaans')
        //     // ->select('*')
        //     // ->join('pengadaans', 'pelaksanas.id', '=', 'pengadaans.pelaksana_id')
        //     ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
        //     ->join('jadwals', 'pengadaans.id', '=', 'jadwals.pengadaan_id')
        //     ->join('barangs', 'pengadaans.id', '=', 'barangs.pengadaan_id')
        //     // ->groupBy('jadwals.pengadaan_id')
        //     // ->get();
        //     // ->paginate(10);
        // ->paginate();
        // $pengadaan = Jadwal::where('kegiatan', '=', 'Nota Dinas dari KPA ke PPK')
        // $pengadaan = Jadwal::where('jadwals.kegiatan','like',"%".'Nota Dinas dari KPA ke PPK'."%")
        // ->paginate();
        // $pejabat = Pejabat::all();

        // $data = [
        //     // 'title' => 'Welcome to Tutsmake.com',
        //     // 'date' => date('m/d/Y')
        //     'notadinas1' => $notadinas1
        // ];

        // $pdf = PDF::loadView('print.nota_dinas1', $data);
        // $pdf = Pengadaan::View('print.nota_dinas1', $data);

        $pdf = PDF::loadview(
            // $pdf = word::loadview(
            'cetak.nota_dinas4',
            // ['notadinas1' => $notadinas1],
            // ['pengadaan' => $pengadaan],
            // ['pejabat' => $pejabat]
        );
        return $pdf->download('NotaDinas4.pdf');
    }

    public function ba_evaluasi()
    {
        // $pengadaan = DB::table('pengadaans')
        //     // ->select('*')
        //     // ->join('pengadaans', 'pelaksanas.id', '=', 'pengadaans.pelaksana_id')
        //     ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
        //     ->join('jadwals', 'pengadaans.id', '=', 'jadwals.pengadaan_id')
        //     ->join('barangs', 'pengadaans.id', '=', 'barangs.pengadaan_id')
        //     // ->groupBy('jadwals.pengadaan_id')
        //     // ->get();
        //     // ->paginate(10);
        // ->paginate();
        // $pengadaan = Jadwal::where('kegiatan', '=', 'Nota Dinas dari KPA ke PPK')
        // $pengadaan = Jadwal::where('jadwals.kegiatan','like',"%".'Nota Dinas dari KPA ke PPK'."%")
        // ->paginate();
        // $pejabat = Pejabat::all();

        // $data = [
        //     // 'title' => 'Welcome to Tutsmake.com',
        //     // 'date' => date('m/d/Y')
        //     'notadinas1' => $notadinas1
        // ];

        // $pdf = PDF::loadView('print.nota_dinas1', $data);
        // $pdf = Pengadaan::View('print.nota_dinas1', $data);

        $pdf = PDF::loadview(
            // $pdf = word::loadview(
            'cetak.ba_evaluasi',
            // ['notadinas1' => $notadinas1],
            // ['pengadaan' => $pengadaan],
            // ['pejabat' => $pejabat]
        );
        return $pdf->download('BAEvaluasi.pdf');
    }

    public function ba_nego()
    {

        $pdf = PDF::loadview(
            'cetak.ba_nego',
        );
        return $pdf->download('BANego.pdf');
    }

    public function ba_pekerjaan()
    {

        $pdf = PDF::loadview(
            'cetak.ba_pekerjaan',
        );
        return $pdf->download('BAPekerjaan.pdf');
    }

    public function ba_penawaran()
    {

        $pdf = PDF::loadview(
            'cetak.ba_penawaran',
        );
        return $pdf->download('BAPenawaran.pdf');
    }

    public function daftar_hadir()
    {

        $pdf = PDF::loadview(
            'cetak.daftar_hadir',
        );
        return $pdf->download('DaftarHadir.pdf');
    }

    public function pakta_integritas()
    {

        $pdf = PDF::loadview(
            'cetak.pakta_integritas',
        );
        return $pdf->download('PaktaIntegritas.pdf');
    }

    public function penetapan_penyedia()
    {

        $pdf = PDF::loadview(
            'cetak.penetapan_penyedia',
        );
        return $pdf->download('PenetapanPenyedia.pdf');
    }

    public function undangan_nego()
    {

        $pdf = PDF::loadview(
            'cetak.undangan_nego',
        );
        return $pdf->download('UndanganNegosiasi.pdf');
    }

    public function undangan_penawaran()
    {

        $pdf = PDF::loadview(
            'cetak.undangan_penawaran',
        );
        return $pdf->download('UndanganPenawaran.pdf');
    }

    public function undangan_penyedia()
    {

        $pdf = PDF::loadview(
            'cetak.undangan_penyedia',
        );
        return $pdf->download('UndanganPenyedia.pdf');
    }
}
