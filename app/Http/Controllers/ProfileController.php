<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index', [
            'user' =>auth()->user()
        ]);
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
        ]);

        auth()->user()->update($validated);

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }
    public function destroy()
    {
        $user = auth()->user();
        auth()->logout();
        $user->delete();

        return redirect('/')->with('success', 'Your account has been deleted.');
    }
}
