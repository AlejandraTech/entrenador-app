<?php

namespace App\Http\Controllers;

use App\Models\GroupActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupActivityController extends Controller
{
    public function index()
    {
        $activities = Auth::user()->activities()->paginate(10);
        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable|string',
        ]);

        $activity = Auth::user()->activities()->create($validatedData);

        return redirect()->route('activities.show', $activity)->with('success', 'Actividad grupal creada exitosamente.');
    }

    public function show(GroupActivity $activity)
    {
        return view('activities.show', compact('activity'));
    }

    public function edit(GroupActivity $activity)
    {
        return view('activities.edit', compact('activity'));
    }

    public function update(Request $request, GroupActivity $activity)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable|string',
        ]);

        $activity->update($validatedData);

        return redirect()->route('activities.show', $activity)->with('success', 'Actividad grupal actualizada exitosamente.');
    }

    public function destroy(GroupActivity $activity)
    {
        $activity->delete();
        return redirect()->route('home')->with('success', 'Actividad grupal eliminada exitosamente.');
    }
}
