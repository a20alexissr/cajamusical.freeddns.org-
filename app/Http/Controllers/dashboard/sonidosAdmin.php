<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditSonidosPost;
use App\Http\Requests\StoreSonidosPost;
use App\Models\sounds;
use Illuminate\Http\Request;

class sonidosAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sounds = sounds::simplePaginate(20);

        return view('adminSonidos', ['sounds'=>$sounds]);
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
    public function store(StoreSonidosPost $request)
    {
        $datosValidados = $request->validated();


        $filename = time() . "." .$request->linksound->extension();

        $request->linksound->move(public_path('sounds'),$filename);

        $datosValidados['linksound'] = $filename;

        sounds::create($datosValidados);
        return back()->with('status', 'Sonido añadido con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sounds  $sounds
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(sounds $sounds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sounds  $sounds
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $sounds = sounds::findOrFail($id);

        return view('formularioEditSonidos', ['sounds'=>$sounds]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sounds  $sonidos
     * @return \Illuminate\Http\Response
     */
    public function update(EditSonidosPost $request, $id)
    {
        $sounds = sounds::findOrFail($id);

        $sounds->update($request->validated());
        return view('formularioEditSonidos', ['$sounds'=>$sounds]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sounds  $sounds
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sounds::findOrFail($id)->delete();

        return back()->with('status', 'Sonido eliminado con exito');
    }
}
