@extends('layouts.app')

@section('content')

<h1 class="text-center">Modifier une tâche</h1>

<div class="m-auto">
  <form method='post' action="{{ route('task.update', $task->id) }}" enctype='multipart/form-data'>
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="titre" class="form-label">Titre</label>
      <input required type="text" value="{{ $task->titre }}" name="titre" class="form-control" id="titre" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea required name='description' class="form-control" id="description" rows="3">{{ $task->description }}</textarea>
    </div>

    <div class="mb-3">
        <label for="end" class="form-label">Date de fin</label>
        <input required value="{{ $task->date_fin }}" type="date" name='date_fin' class="form-control" id="end">
    </div>

    <div class="mb-3">
        <label for="priorite" class="form-label">Priorité</label>
        <select name="priorite" class="form-control" id="priorite">
            <option value="faible" {{ $task->priorite == 'faible' ? 'selected' : '' }}>Faible</option>
            <option value="normale" {{ $task->priorite == 'normale' ? 'selected' : '' }}>Normale</option>
            <option value="haute" {{ $task->priorite == 'haute' ? 'selected' : '' }}>Haute</option>
        </select>
    </div>

    <div class="mb-3">
      <label for="statut">Statut :</label>
      <select name="statut" id="statut" class="form-control">
          <option value="todo" {{ old('statut', $task->statut ?? '') == 'todo' ? 'selected' : '' }}>À faire (To do)</option>
          <option value="in_progress" {{ old('statut', $task->statut ?? '') == 'in_progress' ? 'selected' : '' }}>En cours (In progress)</option>
          <option value="done" {{ old('statut', $task->statut ?? '') == 'done' ? 'selected' : '' }}>Terminé (Done)</option>
      </select>
      
    </div>

    <input type="submit" class="btn btn-primary" />
  </form>
</div>

@endsection
