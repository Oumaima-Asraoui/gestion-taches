<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Ajouter une tâche
     */
    public function store(Request $request)
    {
        $task = Task::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'date_fin' => $request->date_fin,
            'priorite' => $request->priorite,  // Assurer que 'priorite' est bien envoyé
            'statut' => $request->statut,      // Assurer que 'statut' est bien envoyé
            'user_id' => Auth::id(),           // Ne pas oublier le user_id
        ]);
    
        return redirect('/')->with('success', 'Tâche ajoutée avec succès!');
    }
    
    /**
     * Afficher les tâches de l'utilisateur
     */
    public static function getUserTasks()
    {
        if (!Auth::check()) {
            return view('login');
        }

        $tasks = Task::where('user_id', Auth::id())->orderBy('date_fin', 'asc')->get();
        return view('home', ['tasks' => $tasks]);
    }

    /**
     * Modifier une tâche
     */
   // Pour l'édition d'une tâche
public function edit($id)
{
    $task = Task::findOrFail($id);
    return view('edit-task', compact('task'));
}

// Pour ajouter une tâche
public function create()
{
    return view('add-task');
}

    

    /**
     * Mettre à jour une tâche
     */
    public function update(Request $request, $id)
{
    $task = Task::findOrFail($id);
    $task->update([
        'titre' => $request->titre,
        'description' => $request->description,
        'date_fin' => $request->date_fin,
        'priorite' => $request->priorite,  // Assurer que 'priorite' est bien envoyé
        'statut' => $request->statut,      // Assurer que 'statut' est bien envoyé
    ]);

    return redirect('/')->with('success', 'Tâche mise à jour avec succès!');
}

    /**
     * Modifier le statut d'une tâche
     */
    public function statut(Request $request, $id)
{
    $task = Task::findOrFail($id);

    if ($task->user_id != Auth::id()) {
        return redirect()->back()->with('error', 'Vous n\'êtes pas autorisé à modifier cette tâche!');
    }

    $statuts = ['todo', 'in_progress', 'done'];

    if (!in_array($request->statut, $statuts)) {
        return redirect()->back()->with('error', 'Statut invalide!');
    }

    $task->statut = $request->statut;
    $task->save();

    return redirect()->back()->with('success', 'Statut mis à jour avec succès!');
}

public function show($id)
{
    $task = Task::findOrFail($id);

    if ($task->user_id != Auth::id()) {
        return redirect()->back()->with('error', 'Vous n\'êtes pas autorisé à voir cette tâche!');
    }

    return view('show', compact('task')); // Utilise 'show' sans spécifier de dossier
}



    /**
     * Supprimer une tâche
     */
    public function destroy($id)
    {
        try {
            $task = Task::find($id);

            if (!$task) {
                return redirect()->back()->with('error', 'Tâche introuvable!');
            }

            if ($task->user_id != Auth::id()) {
                return redirect()->back()->with('error', 'Vous n\'êtes pas autorisé à supprimer cette tâche!');
            }

            $task->delete();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erreur: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Tâche supprimée avec succès!');
    }
}
