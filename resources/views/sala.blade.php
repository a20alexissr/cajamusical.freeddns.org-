@extends('layouts.app')


@section('content')
    <div class="container">

        <div class="container">
            <!--TODO: Seleccion de canciones en un buscador o selecionador javascript-->
            <!--TODO: creador de botones con javascript-->

            <div class="navbar navbar-expand-md">
                {{ __('Menú de usuario') }} | | Sala: {{session('titulosalas')}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{__('Menú')}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}">
                                    {{ __('Home') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('postSonidos.index') }}">
                                    {{ __('Administrar sounds') }}
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            <div>
        </div>
    </div>

        <div class="row justify-content-sx-start">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header bg bg-info opacity-50">{{ __('Sonidos') }}</div>
                    <!--<p>{{session('idSalas')}}</p>-->
                    <div class="card-body row-1">
                        <!--TODO: SERVICIO DE STREAMING-->
                        <table>
                            <thead>
                            <tr>
                                <td><h3>titulo</h3></td>
                                <td><h3>Sonido</h3></td>
                            </tr>
                            </thead>

                            <tbody>


                            @foreach($sounds as $sound)
                                @if($sound->idUserSonidos == Auth::user()->id)
                                    <tr>
                                        <td>{{$sound->titlesound}}</td>
                                        <td><audio src="{{asset('sounds')}}/{{$sound->linksound}}" type="audio/mp3" controls>Your browser does not support the <code>audio</code> element</audio></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg bg-info opacity-50">{{ __('Musica') }}</div>

                    <div class="card-body row-1">
                        <!--TODO: SERVICIO DE STREAMING-->

                            <table>
                                <thead>
                                <tr>
                                    <td><h3>Titulo</h3></td>
                                    <td><h3>Cancion</h3></td>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($music as $musi)
                                    @if($musi->idUserCancion == Auth::user()->id)
                                        <tr>
                                            <td>{{$musi->titlemusic}}</td>
                                            <td><audio src="{{asset('music')}}/{{$musi->linkmusic}}" type="audio/mp3" controls>Your browser does not support the <code>audio</code> element</audio></td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
