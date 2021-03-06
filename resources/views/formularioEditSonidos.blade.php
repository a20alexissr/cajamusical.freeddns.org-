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
                                                <a class="dropdown-item" href="{{ route('postCanciones.index') }}">
                                                    {{ __('Administrar Canciones') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('postSonidos.index') }}">
                                                    {{ __('Administrar Sonidos') }}
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
                        <div class="card card-body">
                                <h5>Añadir Sonidos</h5>
                                <form method="POST" action="{{ route('postSonidos.update', $sounds->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row mb-6">


                                        <div class="col-md-11">

                                            <input id="idUserSonidos" type="hidden" class="form-control-sm" name="idUserSonidos" value="{{Auth::user()->id}}" required>
                                            <!--<input id="linksound" type="hidden" class="form-control-sm" name="linksound" value="elqeuseas" required>-->
                                            <input id="totalreproductionsound" type="hidden" class="form-control-sm" name="totalreproductionsound" value="0" required>


                                            <label for="titlesound" class="col-md-2 col-form-label text-md-end">{{ __('Titulo') }}</label>
                                            <input id="titlesound" type="text" class="form-control-sm" name="titlesound" value="{{$sounds->titlesound}}" required><br>
                                            @error('titlesound')
                                            <small class="alert-danger"> {{$message}}</small>
                                            @enderror
                                            <br>
                                            <label for="descriptionsound" class="col-md-2 col-form-label text-md-end">{{ __('Descripcion') }}</label>
                                            <textarea id="descriptionsound" class="form-control-sm" name="descriptionsound" value="">{{$sounds->descriptionsound}}</textarea><br>
                                            @error('descriptionsound')
                                            <small class="alert-danger"> {{$message}}</small>
                                            @enderror
                                            <br>
                                            <label for="category1sound" class="col-md-2 col-form-label text-md-end">{{ __('Categoria 1') }}</label>


                                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#category1sound" aria-expanded="false" aria-controls="collapseExample">
                                                Genero musical
                                            </button>

                                            <div class="collapse" id="category1sound">
                                                <div class="card card-body">
                                                    <div>
                                                        <label for="category1sound" class="col-md-2 col-form-label text-md-end">{{ __('Pop') }}</label>
                                                        <input id="category1sound" type="radio" class="form-check-input" name="category1sound" value="pop" required>
                                                    </div>
                                                    <div>
                                                        <label for="category1sound" class="col-md-2 col-form-label text-md-end">{{ __('Rock') }}</label>
                                                        <input id="category1sound" type="radio" class="form-check-input" name="category1sound" value="rock" required>
                                                    </div>
                                                    <div>
                                                        <label for="category1sound" class="col-md-2 col-form-label text-md-end">{{ __('Blues') }}</label>
                                                        <input id="category1sound" type="radio" class="form-check-input" name="category1sound" value="blues" required>
                                                    </div>
                                                    <div>

                                                        <label for="category1sound" class="col-md-2 col-form-label text-md-end">{{ __('Country') }}</label>
                                                        <input id="category1sound" type="radio" class="form-check-input" name="category1sound" value="country" required>
                                                    </div>
                                                    <div>
                                                        <label for="category1sound" class="col-md-2 col-form-label text-md-end">{{ __('Instrumental') }}</label>
                                                        <input id="category1sound" type="radio" class="form-check-input" name="category1sound" value="instrumental" required>
                                                    </div>
                                                    <div>
                                                        <label for="category1sound" class="col-md-2 col-form-label text-md-end">{{ __('Clasica') }}</label>
                                                        <input id="category1sound" type="radio" class="form-check-input" name="category1sound" value="clasica" required>
                                                    </div>

                                                    <div>
                                                        <label for="category1sound" class="col-md-2 col-form-label text-md-end">{{ __('Techno') }}</label>
                                                        <input id="category1sound" type="radio" class="form-check-input" name="category1sound" value="techno" required>
                                                    </div>
                                                    <div>
                                                        <label for="category1sound" class="col-md-2 col-form-label text-md-end">{{ __('Rap') }}</label>
                                                        <input id="category1sound" type="radio" class="form-check-input" name="category1sound" value="rap" required>
                                                    </div>
                                                    <div>
                                                        <label for="category1sound" class="col-md-2 col-form-label text-md-end">{{ __('A cappella') }}</label>
                                                        <input id="category1sound" type="radio" class="form-check-input" name="category1sound" value="cappella" required>
                                                    </div>
                                                    <div>
                                                        <label for="category1sound" class="col-md-2 col-form-label text-md-end">{{ __('Salsa') }}</label>
                                                        <input id="category1sound" type="radio" class="form-check-input" name="category1sound" value="salsa" required>
                                                    </div>
                                                </div>
                                            </div>

                                            @error('category1sound')
                                            <small class="alert-danger"> {{$message}}</small>
                                            @enderror
                                            <br>


                                            <label for="category2sound" class="col-md-2 col-form-label text-md-end">{{ __('Categoria 2') }}</label>
                                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#category2sound" aria-expanded="false" aria-controls="collapseExample">
                                                Ambientacion
                                            </button>

                                            <div class="collapse" id="category2sound">
                                                <div class="card card-body">
                                                    <div>
                                                        <label for="category2sound" class="col-md-2 col-form-label text-md-end">{{ __('Batalla') }}</label>
                                                        <input id="category2sound" type="radio" class="form-check-input" name="category2sound" value="batalla" required>
                                                    </div>
                                                    <div>
                                                        <label for="category2sound" class="col-md-2 col-form-label text-md-end">{{ __('Viajando') }}</label>
                                                        <input id="category2sound" type="radio" class="form-check-input" name="category2sound" value="viajando" required>
                                                    </div>
                                                    <div>
                                                        <label for="category2sound" class="col-md-2 col-form-label text-md-end">{{ __('Suspense') }}</label>
                                                        <input id="category2sound" type="radio" class="form-check-input" name="category2sound" value="Suspense" required>
                                                    </div>
                                                    <div>

                                                        <label for="category2sound" class="col-md-2 col-form-label text-md-end">{{ __('Ciudad') }}</label>
                                                        <input id="category2sound" type="radio" class="form-check-input" name="category2sound" value="ciudad" required>
                                                    </div>
                                                    <div>
                                                        <label for="category2sound" class="col-md-2 col-form-label text-md-end">{{ __('Naturaleza') }}</label>
                                                        <input id="category2sound" type="radio" class="form-check-input" name="category2sound" value="naturaleza" required>
                                                    </div>
                                                    <div>
                                                        <label for="category2sound" class="col-md-2 col-form-label text-md-end">{{ __('Epico') }}</label>
                                                        <input id="category2sound" type="radio" class="form-check-input" name="category2sound" value="epico" required>
                                                    </div>
                                                    <div>
                                                        <label for="category2sound" class="col-md-2 col-form-label text-md-end">{{ __('Ninguna') }}</label>
                                                        <input id="category2sound" type="radio" class="form-check-input" name="category2sound" value="ninguna" required>
                                                    </div>

                                                </div>
                                            </div>
                                            @error('category2sound')
                                            <small class="alert-danger"> {{$message}}</small>
                                            @enderror
                                            <br>
                                            <label for="category3sound" class="col-md-2 col-form-label text-md-end">{{ __('Categoria 3') }}</label>
                                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#category3sound" aria-expanded="false" aria-controls="collapseExample">
                                                Emociones
                                            </button>

                                            <div class="collapse" id="category3sound">
                                                <div class="card card-body">
                                                    <div>
                                                        <label for="category3sound" class="col-md-2 col-form-label text-md-end">{{ __('Alegria') }}</label>
                                                        <input id="category3sound" type="radio" class="form-check-input" name="category3sound" value="alegria" required>
                                                    </div>
                                                    <div>
                                                        <label for="category3sound" class="col-md-2 col-form-label text-md-end">{{ __('Enfado') }}</label>
                                                        <input id="category3sound" type="radio" class="form-check-input" name="category3sound" value="enfado" required>
                                                    </div>
                                                    <div>
                                                        <label for="category3sound" class="col-md-2 col-form-label text-md-end">{{ __('Sorpresa') }}</label>
                                                        <input id="category3sound" type="radio" class="form-check-input" name="category3sound" value="sorpresa" required>
                                                    </div>
                                                    <div>
                                                        <label for="category3sound" class="col-md-2 col-form-label text-md-end">{{ __('Excitación') }}</label>
                                                        <input id="category3sound" type="radio" class="form-check-input" name="category3sound" value="excitación" required>
                                                    </div>
                                                    <div>
                                                        <label for="category3sound" class="col-md-2 col-form-label text-md-end">{{ __('Nostalgia') }}</label>
                                                        <input id="category3sound" type="radio" class="form-check-input" name="category3sound" value="nostalgia" required>
                                                    </div>
                                                    <div>
                                                        <label for="category3sound" class="col-md-2 col-form-label text-md-end">{{ __('Romance') }}</label>
                                                        <input id="category3sound" type="radio" class="form-check-input" name="category3sound" value="romance" required>
                                                    </div>
                                                    <div>
                                                        <label for="category3sound" class="col-md-2 col-form-label text-md-end">{{ __('Terror') }}</label>
                                                        <input id="category3sound" type="radio" class="form-check-input" name="category3sound" value="terror" required>
                                                    </div>

                                                    <div>
                                                        <label for="category3sound" class="col-md-2 col-form-label text-md-end">{{ __('Dolor') }}</label>
                                                        <input id="category3sound" type="radio" class="form-check-input" name="category3sound" value="dolor" required>
                                                    </div>
                                                    <div>
                                                        <label for="category3sound" class="col-md-2 col-form-label text-md-end">{{ __('Ninguna') }}</label>
                                                        <input id="category3sound" type="radio" class="form-check-input" name="category3sound" value="ninguna" required>
                                                    </div>
                                                </div>
                                            </div>

                                            @error('category3sound')
                                            <small class="alert-danger"> {{$message}}</small>
                                            @enderror
                                            <br>



                                            @error('linksound')
                                            <small class="alert-danger"> {{$message}}</small>
                                            @enderror
                                            <br>

                                            <button type="submit" class="btn btn-primary align-content-md-start col-sm-1">
                                                {{ __('guardar') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
