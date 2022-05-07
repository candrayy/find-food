<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use App\Models\Rasa;

class RasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rasa = Rasa::simplePaginate(5);
        return view('admin.rasa.rasa', compact('rasa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rasa.tambah-rasa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rasa = Rasa::create([
            'kd_rasa' => $request->kd_rasa,
            'nama_rasa' => $request->nama_rasa,
        ]);
        return redirect('rasa');
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
        $rasa = Rasa::findOrFail($id);
        return view('admin.rasa.edit-rasa', compact('rasa'));
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
        $rasa = Rasa::findOrFail($id);
        $rasa->update([
            'kd_rasa' => $request->kd_rasa,
            'nama_rasa' => $request->nama_rasa,
        ]);
        return redirect('rasa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rasa = Rasa::findOrFail($id);
        $rasa->delete();
        return redirect('rasa');
    }
}
