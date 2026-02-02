<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller{
     public function index()
    {
        $projects = Project::with('skills')->get();
        return view('project', compact('projects'));
    }
}