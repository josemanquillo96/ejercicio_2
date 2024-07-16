<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function listar()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('projecto.listar', compact('projects'));
    }

    public function create()
    {
        return view('projecto.create');
    }

    public function store(Request $request)
    {
        $project = new Project();
        $project->codigo = $request->codigo;
        $project->cuantia = $request->cuantia;
        $project->descripcion= $request->descripcion;
        $project->fecha_inicio = $request->fecha_inicio;
        $project->fecha_fin = $request->fecha_fin;
        // $project->client_id = $request->client_id;
        
        $project->save();

        return redirect()->route('project.listar');
    }

    public function show(Project $project)
    {
        return view('projecto.show', compact('project'));
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.listar');
    }

    public function edit(Project $project)
    {
        return view('projecto.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $project->codigo = $request->codigo;
        $project->cuantia = $request->cuantia;
        $project->descripcion= $request->descripcion;
        $project->fecha_inicio = $request->fecha_inicio;
        $project->fecha_fin = $request->fecha_fin;
        // $project->client_id = $request->client_id;
        $project->save();
        return redirect()->route('project.listar');
    }
}
