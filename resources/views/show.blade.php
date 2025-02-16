@extends('layouts.app')

@section('content')
    <h1>Détails de la tâche</h1>

    <table class="table table-bordered">
        <tr>
            <th>Statut</th>
            <td>{{ ucfirst($task->statut) }}</td>
        </tr>
        <tr>
            <th>Titre</th>
            <td>{{ $task->titre }}</td>
        </tr>
        <tr>
            <th>Date Limite</th>
            <td>{{ $task->date_fin }}</td>
        </tr>
        <tr>
            <th>Priorité</th>
            <td>{{ ucfirst($task->priorite) }}</td>
        </tr>
    </table>

    <a href="{{ route('user.register') }}" class="btn btn-secondary">Retour</a>
@endsection
