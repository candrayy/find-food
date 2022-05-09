<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Makanan;
use App\Models\Rasa;
use DB;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kriteria = Kriteria::all();
        // $makanan = Makanan::all();
        // $rasa = Rasa::all();
        // return view('hasil', compact('kriteria', 'makanan', 'rasa'));
    }

    public function hasil(Request $request)
    {
        $kriterias = Makanan::select('kriteria_id')->get()->sort();
        $rasas = Makanan::select('rasa_id')->get()->sort();

        $makanan = Makanan::query();
        if($request->filled('kriteria_id')){
            $makanan->whereIn('kriteria_id', $request->kriteria_id);
        }
        if($request->filled('rasa_id')){
            $makanan->whereIn('rasa_id', $request->rasa_id);
        }
        
        $checked = $_GET['kriteria_id'];
        $checked2 = $_GET['rasa_id'];

        return view('hasil', [
            'kriterias' => $checked,
            'rasas' => $checked2,
            'makanans' => $makanan->get(),
        ]);
        // $hasil = ([
        //     'kriterias' => $kriterias,
        //     'rasas' => $rasas,
        //     'makanans' => $makanans->get(),
        // ]);
        // return view('hasil', compact('kriteria', 'rasa', 'makanan'));
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
        return $request->all();
        return view('hasil');
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
