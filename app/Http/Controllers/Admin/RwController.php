<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Rw;
use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RwController extends Controller
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
    public function rw()
    {
        $rw = Rw::all();
        $info = Info::all();
        return view('Admin/rw', compact('rw', 'info'));
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
            'rw' => 'required',
            'rw1' => 'required',
            'rt1' => 'required',
            'rt2' => 'required',
            'rt3' => 'required',
            'rt4' => 'required',             
            'rt5' => 'required', 
            'rt6' => 'required', 
            'rt7' => 'required', 
            'rt8' => 'required', 
            'rt9' => 'required', 
            'jlhrw' => 'required', 
            'jlhrt' => 'required', 
        ]);

        $rw=Rw::create([
            'rw'=>$request->rw,
            'rw1'=>$request->rw1,
            'rt1'=>$request->rt1,
            'rt2'=>$request->rt2,
            'rt3'=>$request->rt3,
            'rt4'=>$request->rt4,
            'rt5'=>$request->rt5,
            'rt6'=>$request->rt6,
            'rt7'=>$request->rt7,
            'rt8'=>$request->rt8,
            'rt9'=>$request->rt9,
            'jlhrw'=>$request->jlhrw,
            'jlhrt'=>$request->jlhrt,
        ]);

        return redirect()->route('Admin.rw')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $rw = Rw::all();
        $info = Info::all();
        return view('Admin/show', compact('rw', 'info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decryptID = Crypt::decryptString($id);

        $rw = Rw::findOrFail($decryptID);
        $info = Info::all();
        return view('Admin/edit', compact('rw', 'info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rw $rw)
    {

        Rw::where('id', $rw->id)
          ->update([

              'rw' => $request->rw,
              'rw1' => $request->rw1,
              'rt1' => $request->rt1,
              'rt2' => $request->rt2,
              'rt3' => $request->rt3,
              'rt4' => $request->rt4,
              'rt5' => $request->rt5,
              'rt6' => $request->rt6,
              'rt7' => $request->rt7,
              'rt8' => $request->rt8,
              'rt9' => $request->rt9,
              'jlhrw' => $request->jlhrw,
              'jlhrt' => $request->jlhrt,

          ]);
        
          return redirect()->route('Admin.show')->with('status', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rw $rw)
    {
        $rw->delete();
        return redirect()->route('Admin.show')->with('status', 'Data berhasil dihapus!');
    }
}
