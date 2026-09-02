<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::latest()->get();
        return view('dashboard.skill.index', compact('skills'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
            'category' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
        ]);

        Skill::create($request->all());

        return back()->with('success', 'Skill berhasil ditambahkan!');
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
            'category' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
        ]);

        $skill->update($request->all());

        return back()->with('success', 'Skill berhasil diperbarui!');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return back()->with('success', 'Skill berhasil dihapus!');
    }
}
