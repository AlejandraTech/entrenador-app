<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\GroupActivity;
use App\Models\SessionCoach;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(Client $client = null, GroupActivity $activity = null)
    {
        return view('sessions.create', compact('client', 'activity'));
    }

    public function store(Request $request, Client $client = null, GroupActivity $activity = null)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:50',
            'date' => 'required|date',
            'duration' => 'required|integer|min:1',
            'number_of_participants' => 'required|integer|min:1',
            'age_range' => 'required|string|max:50',
            'location' => 'required|string|max:255',
            'equipment' => 'nullable|string',
            'goal' => 'required|string',
            'content' => 'required|string',
            'time_distribution' => 'required|string',
            'description' => 'required|string',
            'warmup_general' => 'required|string',
            'warmup_specific' => 'required|string',
            'main_part' => 'required|string',
            'cooldown' => 'required|string',
            'observations' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($client) {
            $session = $client->sessions()->create($validatedData);
            return redirect()->route('clients.sessions.show', [$client, $session])
                ->with('success', 'Sesión creada exitosamente.');
        } elseif ($activity) {
            $session = $activity->sessions()->create($validatedData);
            return redirect()->route('activities.sessions.show', [$activity, $session])
                ->with('success', 'Sesión creada exitosamente.');
        }
    }

    public function show(GroupActivity $activity, SessionCoach $session)
    {
        return view('sessions.show', compact('activity', 'session'));
    }

    public function showClientSession(Client $client, SessionCoach $session)
    {
        return view('sessions.show', compact('client', 'session'));
    }

    public function edit(Client $client, SessionCoach $session)
    {
        return view('sessions.edit', compact('client', 'session'));
    }

    public function editActivitySession(GroupActivity $activity, SessionCoach $session)
    {
        return view('sessions.edit', compact('activity', 'session'));
    }

    public function update(Request $request, SessionCoach $session)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:50',
            'date' => 'required|date',
            'duration' => 'required|integer|min:1',
            'number_of_participants' => 'required|integer|min:1',
            'age_range' => 'required|string|max:50',
            'location' => 'required|string|max:255',
            'equipment' => 'nullable|string',
            'goal' => 'required|string',
            'content' => 'required|string',
            'time_distribution' => 'required|string',
            'description' => 'required|string',
            'warmup_general' => 'required|string',
            'warmup_specific' => 'required|string',
            'main_part' => 'required|string',
            'cooldown' => 'required|string',
            'observations' => 'nullable|string',
        ]);

        $session->update($validatedData);

        return redirect()->route('home', $session)->with('success', 'Sesión actualizada exitosamente.');
    }

    public function destroy(SessionCoach $session)
    {
        $session->delete();
        return back()->with('success', 'Sesión eliminada exitosamente.');
    }
}
