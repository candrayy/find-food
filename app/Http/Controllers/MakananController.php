<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;
use Illuminate\Support\Str;
use App\Models\Kriteria;
use App\Models\Makanan;
use App\Models\Rasa;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanan = Makanan::simplePaginate(5);
        return view('admin.makanan.makanan', compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriteria = Kriteria::all();
        $rasa = Rasa::all();
        return view('admin.makanan.tambah-makanan', compact('kriteria', 'rasa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $makanan = new Makanan;
        $makanan->kriteria_id = $request->kriteria_id;
        $makanan->rasa_id = $request->rasa_id;
        if($request->hasfile('gambar'))
        {
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/makanan/', $filename);
            $makanan->gambar = $filename;
        }
        $makanan->nama_makanan = $request->nama_makanan;
        $makanan->save();
        return redirect('makanan');
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
        $makanan = Makanan::findOrFail($id);
        $kriteria = Kriteria::all();
        $rasa = Rasa::all();
        return view('admin.makanan.edit-makanan', compact('makanan', 'kriteria', 'rasa'));
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
        $makanan = Makanan::findOrFail($id);
        $makanan->kriteria_id = $request->kriteria_id;
        $makanan->rasa_id = $request->rasa_id;
        if($request->hasfile('gambar'))
        {
            $destination = 'images/makanan/'.$makanan->gambar;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/makanan/', $filename);
            $makanan->gambar = $filename;
        }
        $makanan->nama_makanan = $request->nama_makanan;
        $makanan->save();
        return redirect('makanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $makanan = Makanan::findOrFail($id);
        $makanan->delete();
        return redirect('makanan');
    }
}
