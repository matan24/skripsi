<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Info;
use App\Rw;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function info1()
    {
        $info = Info::all();
        return view('Admin/info1', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'thumbnail' => 'mimes:jpeg,png,jpg,gif,svg',
        //     'judul' => 'required',
        //     'isi' => 'required',
        // ]);

        //mengambil data gambar sekaligus menghindari data input sama ( name )
        // $imgName =  $request->thumbnail->getClientOriginalName() . '-' . time()
        //  . '.' . $request->thumbnail->extension();

        // $request->thumbnail->move(public_path('image'), $imgName);

        // $path=$request->file('thumbnail')->store('image','public');

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'waktu' => 'required',
        ]);

        $info= Info::create([
            'judul'=>$request->judul,
            'isi'=>$request->isi,
            'waktu'=> $request->waktu,
        ]);

        return redirect()->route('Admin.info1')->with('status', 'Informasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function showinfo()
    { 
        $info = Info::all();
        $rw = Rw::all();
        return view('Admin/info.showinfo', compact('info', 'rw'));      
    }

    public function nampil()
    { 
        $info = Info::all();
        $rw = Rw::all();
        return view('Admin/info.nampil', compact('info', 'rw'));      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit1(Info $info)
    {
        $data = Info::all();
        $rw = Rw::all();
        return view('Admin/info.edit1', compact('info', 'data', 'rw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {

        Info::where('id', $info->id)
          ->update([

              'judul' => $request->judul,
              'isi' => $request->isi,
              'waktu'=> $request->waktu,

          ]);
        
          return redirect()->route('Admin.info.showinfo')->with('status', 'Informasi berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        $info->delete();
        return redirect()->route('Admin.info.showinfo')->with('status', 'Informasi berhasil dihapus!');
    }
}
