<?php

namespace App\Http\Controllers;

use App\Http\Requests\AchievementStoreRequest;
use App\Http\Requests\AchievementUpdateRequest;
use App\Models\Achievement;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()) {
            return DataTables::of(Achievement::query())
                ->addColumn('action', 'achievement.include.action')
                ->toJson();
        }

        return view('achievement.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('achievement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Achievement $achievement, AchievementStoreRequest $request)
    {
        $achievement = Achievement::create($request->validated());

        if ($request->hasFile('image')) {
            $achievement->addMedia($request->file('image'))
                ->toMediaCollection('image');
        }

        if ($request->hasFile('file')) {
            $achievement->addMedia($request->file('file'))
                ->toMediaCollection('file');
        }

        Alert::success('Success', 'Achievement created successfully!');
        return redirect()->route('achievements.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Achievement $achievement)
    {
        return view('achievement.edit', compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AchievementUpdateRequest $request, Achievement $achievement)
    {
        $achievement->update($request->validated());

        if ($request->hasFile('image')) {
            $achievement->addMedia($request->file('image'))
                ->toMediaCollection('image');
        }

        if ($request->hasFile('file')) {
            $achievement->addMedia($request->file('file'))
                ->toMediaCollection('file');
        }

        Alert::success('Success', 'Achievement updated successfully!');
        return redirect()->route('achievements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();

        Alert::success('Success', 'Achievement deleted successfully!');
        return redirect()->route('achievements.index');
    }
}
