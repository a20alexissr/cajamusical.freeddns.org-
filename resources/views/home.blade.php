@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="navbar navbar-expand-md">
                        <div class="container">
                            {{ __('Menú de usuario') }}


                            <div class="collapse navbar-collapse" id="navbarSupportedContent">


                                <ul class="navbar-nav ms-auto">

                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{__('Menú')}}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('postCanciones.index') }}">
                                                    {{ __('Administrar canciones') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('postSonidos.index') }}">
                                                    {{ __('Administrar sounds') }}
                                                </a>

                                            </div>
                                        </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>





                <div class="card-body">


                    <div class="row">
                        <div class="col-sm-9">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Tus salas
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-sm-start" aria-labelledby="navbarDropdown">

                                        @foreach($Room as $room)
                                            @if($room->iduserroom == Auth::user()->id)



                                                <form id="sala-form" action="{{ route('post.index') }}" method="GET" class="">
                                                    @csrf
                                                    <input type="hidden" name="idSalas" value="{{$room->id}}">
                                                    <input type="hidden" name="titulosalas" value="{{$room->tituloroom}}">
                                                    <button class="dropdown-item" type="submit">{{$room->tituloroom}}</button>
                                                </form>

                                            @endif

                                        @endforeach

                                    </div>
                                </li>
                            </ul>

                        </div>


                        <div class="col-sm-2 align-content-center">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Eliminar salas
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-sm-start" aria-labelledby="navbarDropdown">

                                        @foreach($Room as $room)
                                            @if($room->iduserroom == Auth::user()->id)



                                                <form id="sala-form" action="{{ route('post.destroy', $room->id) }}" method="POST" class="">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item" type="submit">{{$room->tituloroom}}</button>
                                                </form>

                                            @endif

                                        @endforeach

                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>





                        <br><br>
                        <fieldset class="border border-2 border-gray">
                            <h5>Nueva sala</h5>
                            <form method="POST" action="{{ route('post.store') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="tituloSala" class="col-md-4 col-form-label text-md-end">{{ __('Titulo') }}</label>

                                    <div class="col-md-6">


                                        <input id="idUserroom" type="hidden" class="form-control-sm" name="idUserroom" value="{{Auth::user()->id}}" required>

                                        <input id="tituloroom" type="text" class="form-control-sm" name="tituloroom" value="{{old('tituloroom')}}" required><br>
                                        @error('tituloroom')
                                            <small class="alert-danger"> {{$message}}</small>
                                        @enderror
                                        <br>

                                        <button type="submit" class="btn btn-primary align-content-md-start">
                                            {{ __('Crear') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </fieldset>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
