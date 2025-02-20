<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompetitionParticipant;

class CompetitionParticController extends Controller
{
    public function index()
{
    $participants = CompetitionParticipant::with('game')->get();  
    return response()->json($participants);
}

    
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:competition_participants,email',
        ]);

        $participant = CompetitionParticipant::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);

        return response()->json(['message' => 'Inscription réussie à la compétition !'], 201);
    }
}
