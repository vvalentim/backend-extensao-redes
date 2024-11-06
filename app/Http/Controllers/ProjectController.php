<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected static $validation = [
        'name' => 'required|min:3|max:30'
    ];

    public function index()
    {
        return Project::all();
    }

    public function show($id)
    {
        $project = Project::with(['rooms', 'rooms.testEntries'])->findOrFail($id);

        return $project;
    }

    public function store(Request $request)
    {
        $validated = $request->validate(ProjectController::$validation);

        $project = Project::create($validated);

        return response()->json($project, 201);
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $validated = $request->validate(ProjectController::$validation);

        $project->update($validated);

        return response()->json($project, 200);
    }

    public function destroy($id)
    {
        Project::findOrFail($id)->delete();

        return response()->json(null, 204);
    }
}
