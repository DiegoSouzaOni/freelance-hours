<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\View\View;

class ProjectsController extends Controller
{
    function index() : View {
        return view('projects.index');
    }

    function show(Project $project) : View {
        return view('projects.show', compact('project'));
    }
}
