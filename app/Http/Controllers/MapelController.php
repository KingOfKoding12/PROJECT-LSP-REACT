<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mengajar;
use App\Models\Mapel;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('mapel.index', [
            'mapel' => Mapel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mapel.create');
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
        $data_mapel = $request->validate([
            'nama_mapel' => ['required']
        ]);
        Mapel::create($data_mapel);
        return redirect('/mapel/index')->with('success','Data Mapel Berhasil Di Tambah');

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
    public function edit(Mapel $mapel)
    {
        //
        return view('mapel.edit', [
            'mapel' => $mapel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapel $mapel)
    {
        //
        $data_mapel = $request->validate([
            'nama_mapel' => ['required']
        ]);

        $mapel->update($data_mapel);
        return redirect('/mapel/index')->with('success', "Data Mapel Berhasil di Ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        //
        $kelas = Mengajar::where('mapel_id', $mapel->id)->first();
        if ($kelas) {
        return back()->with('error', "$mapel->nama_mapel Masih di Gunakan di Menu Kelas");
        }
        $mapel->delete();
        return back()->with('success', "Data Mapel berhasil di hapus");
    }

    };