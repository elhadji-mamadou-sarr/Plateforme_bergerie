@extends('admin.base')

@section('title', 'Liste des moutons')

@section('content')
<link rel="stylesheet" href="{{ asset('storage/css/style.css')}}">

<section id="content">
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Les Mouton</h3>
                    <a href="{{ route('eleveur.mouton.create') }}"><i class='bx bx-plus'>Add</i></a>
                    <i class='bx bx-filter' ></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>image</th>
                            <th>email</th>
                            <th>contact</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($moutons as $mouton)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $mouton->image) }}" alt="Image du mouton">
                                {{ $mouton->nom_mouton }}
                            </td>
                            <td>{{ $mouton->race }}</td>
                            <td>{{ $mouton->généalogie }}</td>
                            <td>
                                <a href="{{ route('eleveur.mouton.show', $mouton) }}" class="status process">Details</a>
                                <a href="{{ route('eleveur.mouton.edit', $mouton) }}" class="status completed">modifier</a>
                                <a href="{{ route('eleveur.mouton.delete', $mouton) }}" class="status pending">Supprimer</a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td><h3 rowspan="4">Aucun mouton disponible</h3></td>
                            </tr>
                      @endforelse
                        <tr>
                            <td><h3 rowspan="4">{{ Auth::user()->personne->nom }}</h3></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
<!-- MAIN -->
</section>

@endsection
