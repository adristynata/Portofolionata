<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('dashboard.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:20480',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'github_link' => 'nullable|string|max:255',
            'demo_link' => 'nullable|string|max:255',
        ], [
            'image.required' => 'Gambar proyek wajib diunggah.',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Format gambar harus berupa jpeg, png, jpg, gif, webp, atau svg.',
            'image.max' => 'Ukuran gambar maksimal adalah 20MB.',
            'title.required' => 'Judul proyek wajib diisi.',
            'description.required' => 'Deskripsi proyek wajib diisi.',
        ]);

        $data = $request->only(['title', 'description', 'github_link', 'demo_link']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($data);

        return redirect()->route('project.index')->with('success', 'Proyek berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:20480',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'github_link' => 'nullable|string|max:255',
            'demo_link' => 'nullable|string|max:255',
        ], [
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Format gambar harus berupa jpeg, png, jpg, gif, webp, atau svg.',
            'image.max' => 'Ukuran gambar maksimal adalah 20MB.',
            'title.required' => 'Judul proyek wajib diisi.',
            'description.required' => 'Deskripsi proyek wajib diisi.',
        ]);

        $data = $request->only(['title', 'description', 'github_link', 'demo_link']);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($data);

        return redirect()->route('project.index')->with('success', 'Proyek berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);

        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        $project->delete();

        return redirect()->route('project.index')->with('success', 'Proyek berhasil dihapus!');
    }
}