@extends('admin.base')

@section('title', $mouton->exists ? "Modifier un mouton" : "Ajouter un mouton")

@section('content')

<link rel="stylesheet" href="{{ asset('storage/css/form.css') }}">
            <button onclick="window.history.back()">Retour</button>

        <div class="containerr form position-absolute top-50 start-50 translate-middle" style="margin-top: 3%;">

            <div class="title">@yield('title')</div>
            <div class="contentt">
                <form action="{{ route($mouton->exists ? 'eleveur.mouton.update' : 'eleveur.mouton.store', $mouton) }}"
                    method="post" class="vstack gap-3 row g-3"  enctype="multipart/form-data">
                    @csrf
                    @method($mouton->exists ? 'put' : 'post')

                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Nom du mouton</span>
                            <input type="text" placeholder="Entrer le du mouton" name="nom_mouton" value="{{$mouton->nom_mouton}}">
                        </div>
                        <div class="input-box">
                            <span class="details">Race</span>
                            <input type="text" placeholder="Entrer la race du mouton" name="race" value="{{$mouton->race}}">
                        </div>
                        <div class="input-box">
                            <span class="details">Généalogie</span>
                            <input type="text" placeholder="Entrer la généalogie du mouton" name="généalogie" value="{{$mouton->généalogie	}}">
                        </div>
                        <div class="input-box">
                            <span class="details">Prix</span>
                            <input type="text" placeholder="Entrer le prix du mouton" name="prix" value="{{$mouton->prix}}">
                        </div>
                            <span class="details">Photo</span>
                            <input class="form-control form-control-lg" name="image" id="formFileLg" type="file" >

                            <input type="hidden" name="personne_id" value="{{ Auth::user()->personne->id_personne }}">

                    </div>

                    <div class="button">
                        @if ($mouton->exists)
                        <input type="submit" value="Modifier">
                        @else
                        <input type="submit" value="Ajouter">
                        @endif
                    </div>
                </form>

            </div>
        </div>



@endsection





