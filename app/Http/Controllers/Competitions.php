<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class Competitions extends Controller
{
    
    public function index()
    {
        $competitions = Competition::all(); 
        return response()->json($competitions);
    }

    
    public function show($id)
    {
        $competition = Competition::findOrFail($id); 
        return response()->json($competition);
    }

   
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $competition = Competition::create($data); 
        return response()->json($competition, 201);
    }

    
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'sometimes|string|max:255',
            'start_date' => 'sometimes|date',
            'end_date' => 'sometimes|date|after_or_equal:start_date',
        ]);

        $competition = Competition::findOrFail($id); 
        $competition->update($data);

        return response()->json($competition);
    }

        public function destroy($id)
    {
        $competition = Competition::findOrFail($id); 
        $competition->delete(); 

        return response()->json(['message' => 'Competition deleted successfully']);
    }
}
