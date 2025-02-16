@extends('layouts.app')

@section('content')
<h1 class="text-center my-4 text-dark">Liste Des tâches</h1>

<div class="table-responsive">
  <table class="table table-bordered table-hover text-center align-middle">
    <thead class="table-dark">
      <tr>
        
        <th>Titre</th>
        <th>Description</th>
        <th>Statut</th>
        <th>Date Limite</th>
        <th>Priorité</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tasks as $task)
      <tr>
        <!-- Statut avec Couleurs -->
       

        <td><strong>{{ $task->titre }}</strong></td>
        <td>{{ Str::limit($task->description, 50, '...') }}</td> <!-- Limite la description -->
        <td>
          @if ($task->statut == 'todo')
            <span class="badge bg-secondary">To Do</span>
          @elseif ($task->statut == 'in_progress')
            <span class="badge bg-warning text-dark">En cours</span>
          @elseif ($task->statut == 'done')
            <span class="badge bg-success">Terminé</span>
          @endif
        </td>
        <td>{{ date('d/m/Y', strtotime($task->date_fin)) }}</td>
        <td>
          @if ($task->priorite == 'haute')
            <span class="badge bg-danger">Haute</span>
          @elseif ($task->priorite == 'moyenne')
            <span class="badge bg-warning text-dark">Moyenne</span>
          @else
            <span class="badge bg-info">Basse</span>
          @endif
        </td>

        <!-- Actions -->
        <td class="d-flex justify-content-center gap-2">
          <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-sm btn-outline-info">
            <i class="fa-solid fa-eye"></i>
          </a>
          <a href="{{ route('task.edit', ['id' => $task->id]) }}" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-edit"></i>
          </a>
          <a href="{{ route('task.delete', $task->id) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette tâche ?')">
            <i class="fa-solid fa-trash"></i>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
