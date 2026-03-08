<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('page.projects', compact('projects'));
    }

    public function create()
    {
        $skills = Skill::all();
        return view('projects.create', compact('skills'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'image|nullable',
            'link'=>'nullable'
        ]);

        if($request->file('image')){
            $data['image'] = $request->file('image')->store('projects','public');
        }

        $project = Project::create($data);

        $project->skills()->sync($request->skills);

        return redirect()->route('projects');
    }

    public function edit(Project $project)
    {
        $skills = Skill::all();
        return view('projects.edit', compact('project','skills'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'image|nullable',
            'link'=>'nullable'
        ]);

        if($request->file('image')){
            $data['image'] = $request->file('image')->store('projects','public');
        }

        $project->update($data);

        $project->skills()->sync($request->skills);

        return redirect()->route('projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return back();
    }
}