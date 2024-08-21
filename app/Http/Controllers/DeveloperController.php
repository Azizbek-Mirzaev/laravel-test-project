<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Project;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'full_name' => 'required|string|max:255',
        'position' => 'required|string|in:программист,администратор,devops,дизайнер',
        'email' => 'nullable|email|max:255',
        'contact_phone' => 'nullable|string|max:15',
        'project_id' => 'nullable|exists:projects,id',
    ]);

    Developer::create($request->all());

    return redirect()->route('developers.index');
}

public function transfer(Request $request, Developer $developer)
{
    $request->validate([
        'project_id' => 'required|exists:projects,id',
    ]);

    $developer->update(['project_id' => $request->project_id]);

    return redirect()->route('developers.show', $developer);
}

public function destroy(Project $project)
{
    $project->developers()->update(['project_id' => null]); // Освобождаем всех разработчиков из проекта
    $project->delete();

    return redirect()->route('projects.index');
}


}
