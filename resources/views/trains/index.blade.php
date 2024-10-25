@extends('layouts.app')

@section('title', 'Treni in partenza oggi')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Treni in partenza oggi</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Codice Treno</th>
                    <th>Azienda</th>
                    <th>Stazione di Partenza</th>
                    <th>Stazione di Arrivo</th>
                    <th>Orario di Partenza</th>
                    <th>Orario di Arrivo</th>
                    <th>Numero Carrozze</th>
                    <th>In Orario</th>
                    <th>Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_partenza }}</td>
                        <td>{{ $train->stazione_arrivo }}</td>
                        <td>{{ $train->orario_partenza }}</td>
                        <td>{{ $train->orario_arrivo }}</td>
                        <td>{{ $train->numero_carrozze }}</td>
                        <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                        <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
