<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\projek;
use Illuminate\Http\Request;

class ProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagename = 'Data Projek';
        $data=projek::all();
        return view('admin.projek.index', compact('data','pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data_projek = projek::all();
        $pagename = 'Data Projek';
        return view('admin.projek.create', compact('pagename', 'data_projek'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'txtnama_projek'=>'required',
            'txtjenis_projek'=>'required'
        ]);

        $data_projek = new projek([
            'nama_projek'=>$request->get('txtnama_projek'),
            'jenis_projek'=>$request->get('txtjenis_projek')
        ]);

        // dd($data_projek);
        
        $data_projek -> save();
        return redirect('admin/projek')->with('sukses', 'tugas berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
