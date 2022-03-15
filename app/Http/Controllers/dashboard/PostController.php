<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoomPost;
use App\Models\Musics;
use App\Models\Room;
use App\Models\sounds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $room = Room::get();
        $sounds = sounds::get();
        $music = musics::get();
        //$this->sendMail();


        session(['idSalas'=>$request->input('idSalas')]);
        session(['titulosalas'=>$request->input('titulosalas')]);


        return view('sala', ['Room'=> $room, 'sounds'=>$sounds, 'music'=>$music]);

    }



    /**+
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
    public function store(StoreRoomPost $request)
    {
        Room::create($request->validated());
        return back()->with('status', 'Sala creada con exito');
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

        Room::findOrFail($id)->delete();
        //dd($id);
        return back()->with('status', 'Sala eliminada con exito');
    }
}
