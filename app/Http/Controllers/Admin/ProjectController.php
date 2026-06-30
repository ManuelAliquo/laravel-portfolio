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
        //
    }

    // STORE
    public function store(Request $request)
    {
        //
    }

    // SHOW
    public function show(Project $project)
    {
        return view("projects.show", compact('project'));
    }

    // Show the form for editing the specified resource.
    public function edit(string $id)
    {
        //
    }

    // Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        //
    }

    // DESTROY
    public function destroy(string $id)
    {
        //
    }
}
