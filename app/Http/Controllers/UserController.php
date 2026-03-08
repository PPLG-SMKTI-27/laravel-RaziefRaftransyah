<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class UserController extends Controller
{public function index()
{
    $projects = Project::with('skills')->get();

    return view('page.index', compact('projects'));
}}
