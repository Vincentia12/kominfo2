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
            ->join('jadwals', 'pengadaans.id', '=', 'jadwals.pengadaan_id')
            ->join('barangs', 'pengadaans.id', '=', 'barangs.pengadaan_id')
            // ->select('pengadaans.*', 'pelaksanas.pt_pelaksana',)
            ->select('pengadaans.*', 'pelaksanas.*', 'jadwals.*', 'barangs.*')
            // ->where('jadwals.kegiatan', '=', 'Nota Dinas dari KPA ke PPK')
            ->get();
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
        // $pengadaan = Pengadaan::all();
        $pejabat = Pejabat::all();

    	return view(
            'print.nota_dinas1',
            ['pengadaan'=>$pengadaan],
            // ['notadinas1'=>$notadinas1],
            ['pejabat'=>$pejabat]
        );
    }

    public function nota_dinas1() 
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
            'cetak.nota_dinas1',
            // ['notadinas1' => $notadinas1],
            // ['pengadaan' => $pengadaan],
            // ['pejabat' => $pejabat]
        );
        return $pdf->download('NotaDinas1.pdf');
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

    public function undangan_nego() 
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
            'cetak.undangan_nego',
            // ['notadinas1' => $notadinas1],
            // ['pengadaan' => $pengadaan],
            // ['pejabat' => $pejabat]
        );
        return $pdf->download('UndanganNego.pdf');
    }
}
