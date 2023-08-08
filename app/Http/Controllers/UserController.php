<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function editAdmin(User $user)
    {
        // Logic to show the form for editing the user
        return view('users.editAdmin', compact('user'));
    }

    public function updateAdmin(Request $request, User $user)
    {
        // Validation rules for updating a user
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        // Update the user
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function indexAdmin()
    {
        // Fetch users for 'superadmin' role
        $users = User::all();
        return view('users.index_admin', compact('users'));
    }

    //superadmin
    public function create()
    {
        // Logic to show the form for adding a new user
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validation rules for creating a user
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required', // Make sure the 'role' field is either 'admin' or 'user'
        ]);

        // Create the user
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),
        ]);

        return redirect()->route('users.indexadmin')->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        // Logic to show the form for editing the user
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validation rules for updating a user
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        // Update the user
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('users.indexadmin')->with('success', 'User updated successfully.');
    }


    public function destroy(User $user)
    {
        // Ensure that the logged-in user cannot delete themselves
        if ($user->id === auth()->id()) {
            return redirect()->route('users.indexadmin')->with('error', 'You cannot delete your own account.');
        }

        // Delete the user
        $user->delete();

        return redirect()->route('users.indexadmin')->with('success', 'User deleted successfully.');
    }
}
