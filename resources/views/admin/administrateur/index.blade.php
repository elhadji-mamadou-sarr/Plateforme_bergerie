@extends('admin.base')

@section('title')

@section('content')



<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->

    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check' ></i>
                <span class="text">
                    <h3>1020</h3>
                    <p>New Order</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group' ></i>
                <span class="text">
                    <h3>2834</h3>
                    <p>Visitors</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-dollar-circle' ></i>
                <span class="text">
                    <h3>$2543</h3>
                    <p>Total Sales</p>
                </span>
            </li>
        </ul>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Les éleveurs</h3>
                    <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Eleveur</th>
                            <th>email</th>
                            <th>contact</th>
                            <th>statut</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($eleveurs as $eleveur)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $eleveur->photo) }}">
                                {{ $eleveur->nom }}
                            </td>
                            <td>{{ $eleveur->email }}</td>
                            <td>{{ $eleveur->telephone }}</td>
                            <td>
                                @if ($eleveur->statut == 1)
                                    <a href="{{ route('admin.administrateur.bloquer', $eleveur) }}" class="status pending">Bloquer</a>
                                @else
                                    <a href="{{ route('admin.administrateur.debloquer', $eleveur) }}" class="status debloquer">Debloquer</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.administrateur.show', $eleveur) }}" class="statuss process"><i class='bx bxs-user-detail'></i></a>
                                <a href="{{ route('admin.administrateur.edit', $eleveur) }}" class="statuss completed"><i class='bx bx-edit'></i></a>
                                <a href="{{ route('admin.administrateur.delete', $eleveur) }}" class="statuss pending"><i class='bx bxs-trash'></i></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->


@endsection
