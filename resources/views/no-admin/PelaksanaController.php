<?php

namespace App\Http\Controllers;

use App\Models\Pelaksana;
use App\Models\pengadaan;

use Illuminate\Http\Request;

class PelaksanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pelaksana = Pelaksana::all();

        return view('admin.input_pelaksana', ['pelaksana' => $pelaksana]);

        // return view('admin.input_pelaksana', compact('pelaksana'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        // $pelaksana = Pelaksana::all();
        // $pengadaan = Pengadaan::all();
        // $pelaksanas = pelaksana::orderBy('id','desc')->paginate(5);
        // return view('pelaksanas.index', compact('pelaksanas'));
        // $getmodel = new pelaksana()

        // $pelaksana = Pelaksana::select('*')
        //                 ->get();

        // return view(
        //     'admin.input_pelaksana',
        //     ['pelaksana' => $pelaksana],
        //     //  ['pengadaan'=>$pengadaan] 
        // )->with('i', (request()->input('page', 1) - 1) * 5);
        // dd($pelaksana);


    }

    /**
     * Show the form for creating a new resource.
     
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pelaksanas.create');
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
            'pt_pelaksana' => 'required',
            'alamat' => 'required',
            'nama_pelaksana' => 'required',
            'jabatan_pelaksana' => 'required',
            'kode_rekening' => 'required',
            'npwp' => 'required',
            'tlp' => 'required'
        ]);

        // Pelaksana::create($request->post());
        Pelaksana::create($request->all());

        return redirect()->to('input_pelaksana');
        // return redirect()->route('pelaksana.index')
        //     ->with('success', 'Data Pelaksana Berhasil Ditambahkan');
        // $asets = Aset::create($request->except(['aset_id', 'nama', 'keterangan']));
        // $pemilik = Pemilik::create(['aset_id' => $asets->id, $request->only(['nama', 'keterangan', 'aset_id'])]);

        // return redirect()->route('admin.input_pelaksana')
        //                 ->with('success','Data Pelaksana Berhasil Disimpan!');

        // return redirect()->to('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelaksana  $pelaksana
     * @return \Illuminate\Http\Response
     */
    public function show(Pelaksana $pelaksana)
    {
        return view('pelaksana.index', compact('pelaksana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelaksana  $pelaksana
     * @return \Illuminate\Http\Response
     */
    // public function edit(Pelaksana $pelaksana)
    public function edit($id)
    {
        $pelaksana = Pelaksana::findOrFail($id);
        // return view('admin.input_pelaksana', compact('pelaksana'));
        return view('admin.input_pelaksana', ['pelaksana' => $pelaksana]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelaksana  $pelaksana
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, pelaksana $pelaksana)
    // public function update(Request $request, $id)
    // {
    //     $pelaksana = Pelaksana::find($id)->update($request->all()); 

    //     return back()->with('success',' Data telah diperbaharui!');

    //     // $request->validate([
    //     //     'pt_pelaksana' => 'required',
    //     //     'alamat' => 'required',
    //     //     'nama_pelaksana' => 'required',
    //     //     'jabatan_pelaksana' => 'required',
    //     //     'kode_rekening' => 'required',
    //     //     'npwp' => 'required',
    //     //     'tlp' => 'required'
    //     // ]);

    //     // $pelaksana->update($request->all());

    //     // return redirect()->route('pelaksana.index')
    //     //     ->with('success', 'Data Pelaksana Berhasil di Update');

    //     // $pelaksana->fill($request->post())->save();

    //     // return redirect()->route('pelaksanas.index')
    //     //     ->with('success', 'Aset Berhasil updated!');
    // }
    public function update(Request $request, $id)
    {
        // $pelaksana = Pelaksana::find($id);

        // $pelaksana->pt_pelaksana = $request->pt_pelaksana;
        // $pelaksana->alamat = $request->alamat;
        // $pelaksana->nama_pelaksana = $request->nama_pelaksana;
        // $pelaksana->jabatan_pelaksana = $request->jabatan_pelaksana;
        // $pelaksana->kode_rekening = $request->kode_rekening;
        // $pelaksana->npwp = $request->npwp;
        // $pelaksana->tlp = $request->tlp;
        // $pelaksana->save();
        // return redirect('/input_pelaksana');
        // // return dd($pelaksana);

        $pelaksana = Pelaksana::find($id)->update($request->all()); 

        return back()->with('success',' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelaksana  $pelaksana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelaksana $pelaksana)
    {
        $pelaksana->delete();

        return redirect()->route('pelaksana.index')
            ->with('success', 'Barang Berhasil Dihapus!');
    }
    // public function destroy($id)
    // {
    //     Pelaksana::destroy($id);
    //     // return dd($id);
    //     return view('admin.input_pelaksana',
    //     //  ['pelaksana' => $pelaksana]
    //      )->with('success', 'Barang Berhasil Dihapus!');
    // }
}
