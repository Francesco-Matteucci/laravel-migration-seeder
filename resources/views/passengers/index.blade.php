@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista dei Passeggeri</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Email</th>
                    <th>Data di Nascita</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($passengers as $passenger)
                    <tr>
                        <td>{{ $passenger->nome }}</td>
                        <td>{{ $passenger->cognome }}</td>
                        <td>{{ $passenger->email }}</td>
                        <td>{{ $passenger->data_di_nascita }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
