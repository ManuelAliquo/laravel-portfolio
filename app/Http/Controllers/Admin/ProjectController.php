<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // INDEX
    public function index()
    {
        $projects = Project::all();
        return view("projects.index", compact('projects'));
    }

    // CREATE
    public function create()
    {
        return view("projects.create");
    }

    // STORE
    public function store(Request $request)
    {
        $data = $request->all();
        $newProject = new Project();

        $newProject->title = $data['title'];
        $newProject->description = $data['description'];
        $newProject->cover_image = $data['image'];
        $newProject->url_repo = $data['github'];

        $newProject->save();

        return redirect()->route('projects.show', $newProject);
    }

    // SHOW
    public function show(Project $project)
    {
        return view("projects.show", compact('project'));
    }

    // EDIT
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    // UPDATE
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->title = $data['title'];
        $project->description = $data['description'];
        $project->cover_image = $data['image'];
        $project->url_repo = $data['github'];

        $project->update();

        return redirect()->route('projects.show', $project);
    }

    // DESTROY
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
