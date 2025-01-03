<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class Games extends Controller
{
    
    public function index()
    {
        $games = Game::all();
        return response()->json($games);
    }

    
    public function show($id)
    {
        $game = Game::findOrFail($id); 
        return response()->json($game);
    }

    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'rules' => 'nullable|string',
        ]);

        $game = Game::create($data); 
        return response()->json($game, 201);
    }

    
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'rules' => 'nullable|string',
        ]);

        $game = Game::findOrFail($id); 
        $game->update($data); 

        return response()->json($game);
    }

    
    public function destroy($id)
    {
        $game = Game::findOrFail($id); 
        $game->delete(); 

        return response()->json(['message' => 'Game deleted successfully']);
    }
}
