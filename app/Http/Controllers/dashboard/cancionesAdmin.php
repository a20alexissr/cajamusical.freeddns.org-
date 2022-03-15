<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCancionPost;
use App\Http\Requests\EditCancionPost;
use App\Models\Musics;
use Illuminate\Http\Request;

class cancionesAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $music = musics::simplePaginate(20);


        return view('adminCanciones', ['music'=>$music]);
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
    public function store(StoreCancionPost $request)
    {
        $datosValidados = $request->validated();

        $filename = time() . "." .$request->linkmusic->extension();

        $request->linkmusic->move(public_path('music'),$filename);

        $datosValidados['linkmusic'] = $filename;

        musics::create($datosValidados);
        return back()->with('status', 'Cancion añadida con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\canciones  $canciones
     * @return \Illuminate\Http\Response
     */
    public function show(Musics $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Musics $musics
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $music = musics::findOrFail($id);


        return view('formularioEditCanciones', ['music'=>$music]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\canciones  $canciones
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCancionPost $request, $id)
    {
        $musi = musics::findOrFail($id);

        $musi->update($request->validated());
        return view('formularioEditCanciones', ['music'=>$musi]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\canciones  $canciones
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        musics::findOrFail($id)->delete();
        //dd($id);
        return back()->with('status', 'Cancion eliminada con exito');
    }
}
