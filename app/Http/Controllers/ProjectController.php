<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller

{
//     public function showProjects()
//     {
//         $projects = Project::all();
//         // dd($projects);
//         return view('index', compact('projects'));
//     }

// public function showProjectDetails($id)
//     {
//       $project = Project::findOrFail($id);
//       return view('single', compact('project'));

// }
public function showProjectDetails($id)
{
    $project = Project::findOrFail($id);
    $projects = Project::where('id', '!=', $id)->get();
    return view('single', compact('project', 'projects'));
}
}
