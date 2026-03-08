<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardProjectController extends Controller
{
    
public function index()
    {
        $projects = Project::latest()->get();
        return view('dashboard.index', compact('projects'));
    }

    public function create()
    {
        return view('dashboard.projects.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'link' => 'nullable|url'
    ]);

    if ($request->hasFile('image')) {

        $file = $request->file('image');

        $imageName = time().'_'.$file->getClientOriginalName();

        $file->move(public_path('images'), $imageName);

        $validated['image'] = $imageName;
    }

    Project::create($validated);

    return redirect()->route('dashboard.projects.index')
        ->with('success','Project berhasil ditambahkan.');
}

    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'link' => 'nullable|url'
    ]);

    if ($request->hasFile('image')) {

        if ($project->image && file_exists(public_path('images/'.$project->image))) {
            unlink(public_path('images/'.$project->image));
        }

        $file = $request->file('image');
        $imageName = time().'_'.$file->getClientOriginalName();

        $file->move(public_path('images'), $imageName);

        $validated['image'] = $imageName;
    }

    $project->update($validated);

    return redirect()->route('dashboard.projects.index')
        ->with('success','Project berhasil diupdate.');
}

    public function destroy(Project $project)
{
    if ($project->image && file_exists(public_path('images/'.$project->image))) {
        unlink(public_path('images/'.$project->image));
    }

    $project->delete();

    return redirect()->route('dashboard.projects.index')
        ->with('success','Project berhasil dihapus.');
}
}