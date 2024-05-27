<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        // Retrieve all users
        $users = User::all();

        // Pass the users data to the view
        return view('users.index', compact('users'));
    }
    public function edit(User $user)
    {
        // Retrieve the user data
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'is_supervisor' => 'required|boolean', // Validation for supervisor status
            // Add more validation rules as needed
        ]);

        // Update the user with the new data
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'is_supervisor' => $request->is_supervisor, // Update supervisor status
            // Update other fields as needed
        ]);

        // Redirect back to the index page or any other page
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }
}
