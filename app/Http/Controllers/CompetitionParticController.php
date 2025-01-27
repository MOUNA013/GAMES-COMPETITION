<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompetitionParticipant;

class CompetitionParticController extends Controller
{
    public function index()
    {
        $users = CompetitionParticipant::all(); 
        return response()->json($users);
    }
    public function register(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:competition_participants,email',
        ]);

        // Enregistrer le participant
        $participant = CompetitionParticipant::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);

        // Retourner une réponse JSON
        return response()->json(['message' => 'Inscription réussie à la compétition !'], 201);
    }
}
