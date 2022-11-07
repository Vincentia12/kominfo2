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

        $pelaksana = Pelaksana::latest()->paginate(5);

        return view('admin.input_pelaksana', compact('pelaksana'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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

        return redirect()->route('pelaksana.index')
            ->with('success', 'Data Pelaksana Berhasil Ditambahkan');
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
    public function edit(Pelaksana $pelaksana)
    {
        return view('admin.input_pelaksana', compact('pelaksana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelaksana  $pelaksana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

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
}