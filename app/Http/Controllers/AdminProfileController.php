<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('dashboard.profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'role_title' => 'nullable|string|max:255',
            'hero_bio' => 'nullable|string',
            'bio' => 'nullable|string',
            'education' => 'nullable|string|max:255',
            'focus' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:3072',
            'github_url' => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'whatsapp_url' => 'nullable|url|max:255',
        ]);

        $data = $request->only([
            'name', 'email', 'role_title', 'hero_bio', 'bio', 'education', 
            'focus', 'phone', 'location', 'github_url', 
            'linkedin_url', 'instagram_url', 'whatsapp_url'
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('profile', $filename, 'public');
            $data['photo'] = 'storage/' . $path;
        }

        $user->update($data);

        return back()->with('success', 'Profil dan link media sosial berhasil diperbarui!');
    }
}
