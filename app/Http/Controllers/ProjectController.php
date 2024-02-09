<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()) {
            return DataTables::of(Project::query())
                ->addColumn('action', 'project.include.action')
                ->toJson();
        }

        return view('project.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Project $project, ProjectStoreRequest $request)
    {
        $project = Project::create($request->validated());

        if ($request->hasFile('image')) {
            $project->addMedia($request->file('image'))
                ->toMediaCollection('image');
        }

        if ($request->hasFile('file')) {
            $project->addMedia($request->file('file'))
                ->toMediaCollection('file');
        }

        Alert::success('Success', 'project created successfully!');
        return redirect()->route('projects.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Project $project, ProjectUpdateRequest $request)
    {
        $project->update($request->validated());

        if ($request->hasFile('image')) {
            $project->addMedia($request->file('image'))
                ->toMediaCollection('image');
        }

        if ($request->hasFile('file')) {
            $project->addMedia($request->file('file'))
                ->toMediaCollection('file');
        }

        Alert::success('Success', 'project updated successfully!');
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        Alert::success('Success', 'project deleted successfully!');
        return redirect()->route('projects.index');
    }
}
