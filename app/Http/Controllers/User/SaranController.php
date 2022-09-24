<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Saran;
use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class SaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saran = Saran::all();
        $info = Info::all();
        return view('User/infosaran.create', compact('saran', 'info'));
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
            'nama' => 'required',
            'rt' => 'required',
            'alamat' => 'required',
            'no' => 'required',
            'saran' => 'required',            
        ]);

        $saran=Saran::create([
            'nama'=>$request->nama,
            'rt'=>$request->rt,
            'alamat'=>$request->alamat,
            'no'=>$request->no,
            'saran'=>$request->saran,
        ]);

        return redirect()->route('User.infosaran.create')->with('status', 'Saran anda berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Saran  $saran
     * @return \Illuminate\Http\Response
     */
    public function detail()
    {
        $saran = Saran::all();
        $info = Info::all();
        return view('User/infosaran.detail', compact('saran', 'info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Saran  $saran
     * @return \Illuminate\Http\Response
     */
    public function ubah($id)
    {
        $decryptID = Crypt::decryptString($id);

        $saran = Saran::findOrFail($decryptID);
        $info = Info::all();
        return view('User/infosaran.ubah', compact('saran', 'info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Saran  $saran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saran $saran)
    {
        
        Saran::where('id', $saran->id)
          ->update([

              'nama' => $request->nama,
              'rt' => $request->rt,
              'no' => $request->no,
              'alamat' => $request->alamat,
              'saran' => $request->saran,
          ]);
        
          return redirect()->route('User.infosaran.detail')->with('status', 'Saran berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Saran  $saran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saran $saran)
    {
        $saran->delete();
        return redirect()->route('User.infosaran.detail')->with('status', 'Saran berhasil dihapus!');
    }
}
