@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
                                                <a class="dropdown-item" href="{{ route('home') }}">
                                                    {{ __('Home') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('postSonidos.index') }}">
                                                    {{ __('Administrar Sonidos') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('postCanciones.index') }}">
                                                    {{ __('Administrar Canciones') }}
                                                </a>
                                            </div>
                                        </li>

                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>



                    <div class="card-body">


                        <br><br>

                        <p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#añadirCancion" aria-expanded="false" aria-controls="collapseExample">
                                Añadir Cancion
                            </button>
                        </p>
                        <div class="collapse" id="añadirCancion">
                            <div class="card card-body">
                                <fieldset class="border border-2 border-gray ">
                                    <h5>Añadir cancion</h5>
                                    <form method="POST" action="{{ route('postCanciones.store') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row mb-6">


                                            <div class="col-md-11">

                                                <input id="idUserCancion" type="hidden" class="form-control-sm" name="idUserCancion" value="{{Auth::user()->id}}" required>
                                                <!--<input id="totalreproductionmusic" type="hidden" class="form-control-sm" name="totalreproductionmusic" value="0" required>-->


                                                <label for="titlemusic" class="col-md-2 col-form-label text-md-end">{{ __('Titulo') }}</label>
                                                <input id="titlemusic" type="text" class="form-control-sm" name="titlemusic" value="{{old('titlemusic')}}" required><br>
                                                @error('titlemusic')
                                                <small class="alert-danger"> {{$message}}</small>
                                                @enderror
                                                <br>
                                                <label for="artistmusic" class="col-md-2 col-form-label text-md-end">{{ __('Artista') }}</label>
                                                <input id="artistmusic" type="text" class="form-control-sm" name="artistmusic" value="{{old('artistmusic')}}" required><br>
                                                @error('artistmusic')
                                                <small class="alert-danger"> {{$message}}</small>
                                                @enderror
                                                <br>
                                                <label for="descriptionmusic" class="col-md-2 col-form-label text-md-end">{{ __('Descripcion') }}</label>
                                                <textarea id="descriptionmusic" class="form-control-sm" name="descriptionmusic">{{old('descriptionmusic')}}</textarea><br>
                                                @error('descriptionmusic')
                                                <small class="alert-danger"> {{$message}}</small>
                                                @enderror
                                                <br>
                                                <label for="category1music" class="col-md-2 col-form-label text-md-end">{{ __('Categoria 1') }}</label>


                                                    <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#category1music" aria-expanded="false" aria-controls="collapseExample">
                                                        Genero musical
                                                    </button>

                                                <div class="collapse" id="category1music">
                                                    <div class="card card-body">
                                                        <div>
                                                            <label for="category1music" class="col-md-2 col-form-label text-md-end">{{ __('Pop') }}</label>
                                                            <input id="category1music" type="radio" class="form-check-input" name="category1music" value="pop" required>
                                                        </div>
                                                        <div>
                                                            <label for="category1music" class="col-md-2 col-form-label text-md-end">{{ __('Rock') }}</label>
                                                            <input id="category1music" type="radio" class="form-check-input" name="category1music" value="rock" required>
                                                        </div>
                                                        <div>
                                                            <label for="category1music" class="col-md-2 col-form-label text-md-end">{{ __('Blues') }}</label>
                                                            <input id="category1music" type="radio" class="form-check-input" name="category1music" value="blues" required>
                                                        </div>
                                                        <div>

                                                            <label for="category1music" class="col-md-2 col-form-label text-md-end">{{ __('Country') }}</label>
                                                            <input id="category1music" type="radio" class="form-check-input" name="category1music" value="country" required>
                                                        </div>
                                                        <div>
                                                            <label for="category1music" class="col-md-2 col-form-label text-md-end">{{ __('Instrumental') }}</label>
                                                            <input id="category1music" type="radio" class="form-check-input" name="category1music" value="instrumental" required>
                                                        </div>
                                                        <div>
                                                            <label for="category1music" class="col-md-2 col-form-label text-md-end">{{ __('Clasica') }}</label>
                                                            <input id="category1music" type="radio" class="form-check-input" name="category1music" value="clasica" required>
                                                        </div>

                                                        <div>
                                                            <label for="category1music" class="col-md-2 col-form-label text-md-end">{{ __('Techno') }}</label>
                                                            <input id="category1music" type="radio" class="form-check-input" name="category1music" value="techno" required>
                                                        </div>
                                                        <div>
                                                            <label for="category1music" class="col-md-2 col-form-label text-md-end">{{ __('Rap') }}</label>
                                                            <input id="category1music" type="radio" class="form-check-input" name="category1music" value="rap" required>
                                                        </div>
                                                        <div>
                                                            <label for="category1music" class="col-md-2 col-form-label text-md-end">{{ __('A cappella') }}</label>
                                                            <input id="category1music" type="radio" class="form-check-input" name="category1music" value="cappella" required>
                                                        </div>
                                                        <div>
                                                            <label for="category1music" class="col-md-2 col-form-label text-md-end">{{ __('Salsa') }}</label>
                                                            <input id="category1music" type="radio" class="form-check-input" name="category1music" value="salsa" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                @error('category1music')
                                                <small class="alert-danger"> {{$message}}</small>
                                                @enderror
                                                <br>


                                                <label for="category2music" class="col-md-2 col-form-label text-md-end">{{ __('Categoria 2') }}</label>
                                                <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#category2music" aria-expanded="false" aria-controls="collapseExample">
                                                    Ambientacion
                                                </button>

                                                <div class="collapse" id="category2music">
                                                    <div class="card card-body">
                                                        <div>
                                                            <label for="category2music" class="col-md-2 col-form-label text-md-end">{{ __('Batalla') }}</label>
                                                            <input id="category2music" type="radio" class="form-check-input" name="category2music" value="batalla" required>
                                                        </div>
                                                        <div>
                                                            <label for="category2music" class="col-md-2 col-form-label text-md-end">{{ __('Viajando') }}</label>
                                                            <input id="category2music" type="radio" class="form-check-input" name="category2music" value="viajando" required>
                                                        </div>
                                                        <div>
                                                            <label for="category2music" class="col-md-2 col-form-label text-md-end">{{ __('Suspense') }}</label>
                                                            <input id="category2music" type="radio" class="form-check-input" name="category2music" value="Suspense" required>
                                                        </div>
                                                        <div>

                                                            <label for="category2music" class="col-md-2 col-form-label text-md-end">{{ __('Ciudad') }}</label>
                                                            <input id="category2music" type="radio" class="form-check-input" name="category2music" value="ciudad" required>
                                                        </div>
                                                        <div>
                                                            <label for="category2music" class="col-md-2 col-form-label text-md-end">{{ __('Naturaleza') }}</label>
                                                            <input id="category2music" type="radio" class="form-check-input" name="category2music" value="naturaleza" required>
                                                        </div>
                                                        <div>
                                                            <label for="category2music" class="col-md-2 col-form-label text-md-end">{{ __('Epico') }}</label>
                                                            <input id="category2music" type="radio" class="form-check-input" name="category2music" value="Epico" required>
                                                        </div>
                                                        <div>
                                                            <label for="category2music" class="col-md-2 col-form-label text-md-end">{{ __('ninguna') }}</label>
                                                            <input id="category2music" type="radio" class="form-check-input" name="category2music" value="ninguna" required>
                                                        </div>

                                                    </div>
                                                </div>
                                                @error('category2music')
                                                <small class="alert-danger"> {{$message}}</small>
                                                @enderror
                                                <br>
                                                <label for="category3music" class="col-md-2 col-form-label text-md-end">{{ __('Categoria 3') }}</label>
                                                <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#category3music" aria-expanded="false" aria-controls="collapseExample">
                                                    Emociones
                                                </button>

                                                <div class="collapse" id="category3music">
                                                    <div class="card card-body">
                                                        <div>
                                                            <label for="category3music" class="col-md-2 col-form-label text-md-end">{{ __('Alegria') }}</label>
                                                            <input id="category3music" type="radio" class="form-check-input" name="category3music" value="alegria" required>
                                                        </div>
                                                        <div>
                                                            <label for="category3music" class="col-md-2 col-form-label text-md-end">{{ __('Enfado') }}</label>
                                                            <input id="category3music" type="radio" class="form-check-input" name="category3music" value="enfado" required>
                                                        </div>
                                                        <div>
                                                            <label for="category3music" class="col-md-2 col-form-label text-md-end">{{ __('Sorpresa') }}</label>
                                                            <input id="category3music" type="radio" class="form-check-input" name="category3music" value="sorpresa" required>
                                                        </div>
                                                        <div>
                                                            <label for="category3music" class="col-md-2 col-form-label text-md-end">{{ __('Excitación') }}</label>
                                                            <input id="category3music" type="radio" class="form-check-input" name="category3music" value="excitación" required>
                                                        </div>
                                                        <div>
                                                            <label for="category3music" class="col-md-2 col-form-label text-md-end">{{ __('Nostalgia') }}</label>
                                                            <input id="category3music" type="radio" class="form-check-input" name="category3music" value="nostalgia" required>
                                                        </div>
                                                        <div>
                                                            <label for="category3music" class="col-md-2 col-form-label text-md-end">{{ __('Romance') }}</label>
                                                            <input id="category3music" type="radio" class="form-check-input" name="category3music" value="romance" required>
                                                        </div>
                                                        <div>
                                                            <label for="category3music" class="col-md-2 col-form-label text-md-end">{{ __('Terror') }}</label>
                                                            <input id="category3music" type="radio" class="form-check-input" name="category3music" value="terror" required>
                                                        </div>

                                                        <div>
                                                            <label for="category3music" class="col-md-2 col-form-label text-md-end">{{ __('Dolor') }}</label>
                                                            <input id="category3music" type="radio" class="form-check-input" name="category3music" value="dolor" required>
                                                        </div>
                                                        <div>
                                                            <label for="category3music" class="col-md-2 col-form-label text-md-end">{{ __('ninguna') }}</label>
                                                            <input id="category3music" type="radio" class="form-check-input" name="category3music" value="ninguna" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                @error('category3music')
                                                <small class="alert-danger"> {{$message}}</small>
                                                @enderror
                                                <br>

                                                <label for="linkmusic" class="col-md-2 col-form-label text-md-end">{{ __('Cancion') }}</label>
                                                <input type="file" name="linkmusic" id="linkmusic" class="form-control-sm">
                                                @error('linkmusic')
                                                <small class="alert-danger"> {{$message}}</small>
                                                @enderror
                                                <br>

                                                <button type="submit" class="btn btn-primary align-content-md-start col-sm-1">
                                                    {{ __('Añadir') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </fieldset>
                            </div>
                        </div>

                        <p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#verCanciones" aria-expanded="false" aria-controls="collapseExample">
                                listar tus canciones
                            </button>
                        </p>
                        <div class="collapse" id="verCanciones">
                            <div class="card card-body">
                                <table>
                                    <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Titulo</td>
                                            <td>Artista</td>
                                            <td>Descripcion</td>
                                            <td>Categoria 1</td>
                                            <td>Categoria 2</td>
                                            <td>Categoria 3</td>

                                        </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($music as $musi)
                                        @if($musi->idUserCancion == Auth::user()->id)
                                            <tr>
                                                <td>{{$musi->id}}</td>
                                                <td>{{$musi->titlemusic}}</td>
                                                <td>{{$musi->artistmusic}}</td>
                                                <td>{{$musi->descriptionmusic}}</td>
                                                <td>{{$musi->category1music}}</td>
                                                <td>{{$musi->category2music}}</td>
                                                <td>{{$musi->category3music}}</td>
                                                <td>
                                                    <a href="{{route('postCanciones.edit', $musi->id)}}" class="btn btn-success">editar</a>
                                                    <form method="POST" action="{{route('postCanciones.destroy',$musi->id)}}" >
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" >Eliminar</button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                    </tbody>
                                </table>
                                {{$music->links()}}

                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
