<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class view extends Controller
{
    public function index()
    {
        return view('index/admin');
    }

    public function login()
    {
        return view('admin/login');
    }

    public function pengguna()
    {
        // $data=User::all();
        // return view('admin/pengguna',$data);
        $data=DB::table('users')->get();
        return view('admin/pengguna',compact('data'));
        // return view('admin.pengguna');
        // dd($data);
    }

    public function save(Request $request)
    {
        // $this->validate($request,[
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        // User::create($request->all());
        return redirect()->route('pengguna')
                        ->with(['success' => 'Data Berhasil Disimpan!']);
    }
    // public function destroy(User $data)
    // {
    //     // $data= User::findOrFail('id');
    //     $data->delete('id');
       
    //     return redirect()->route('pengguna')
    //                     ->with(['success' => 'Data Berhasil Dihapus!']);
    
    // }

    public function hapus($id){
        DB::table('users')->where('id', $id)->delete();

        return redirect('/pengguna');
        // return redirect()->route('admin.index')
        //                 ->with(['success' => 'Data Berhasil Dihapus!']);
    
    }
}
