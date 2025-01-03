<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Users extends Controller
{
   
    public function index()
    {
        $users = User::all(); 
        return response()->json($users);
    }

    
    public function show($id)
    {
        $user = User::findOrFail($id); 
        return response()->json($user);
    }

    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $data['password'] = Hash::make($data['password']); 

        $user = User::create($data); 
        return response()->json($user, 201);
    }

    
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|max:255|unique:users,email,' . $id,
            'password' => 'sometimes|string|min:8',
        ]);

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']); 
        }

        $user = User::findOrFail($id); 
        $user->update($data); 

        return response()->json($user);
    }

    
    public function destroy($id)
    {
        $user = User::findOrFail($id); 
        $user->delete(); 

        return response()->json(['message' => 'User deleted successfully']);
    }
}
