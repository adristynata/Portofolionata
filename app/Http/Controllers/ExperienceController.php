<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::latest()->get();
        return view('dashboard.experience.index', compact('experiences'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'organization' => 'nullable|string|max:255',
            'period' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Experience::create($request->all());

        return back()->with('success', 'Pengalaman berhasil ditambahkan!');
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'organization' => 'nullable|string|max:255',
            'period' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $experience->update($request->all());

        return back()->with('success', 'Pengalaman berhasil diperbarui!');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return back()->with('success', 'Pengalaman berhasil dihapus!');
    }
}
