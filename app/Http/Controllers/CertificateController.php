<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::latest()->get();
        return view('dashboard.certificate.index', compact('certificates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'issuer' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'link' => 'nullable|url|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:3072',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('certificates', 'public');
            $data['image'] = $path;
        }

        Certificate::create($data);

        return back()->with('success', 'Sertifikat berhasil ditambahkan!');
    }

    public function update(Request $request, Certificate $certificate)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'issuer' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'link' => 'nullable|url|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:3072',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($certificate->image) {
                Storage::disk('public')->delete($certificate->image);
            }
            $path = $request->file('image')->store('certificates', 'public');
            $data['image'] = $path;
        }

        $certificate->update($data);

        return back()->with('success', 'Sertifikat berhasil diperbarui!');
    }

    public function destroy(Certificate $certificate)
    {
        if ($certificate->image) {
            Storage::disk('public')->delete($certificate->image);
        }
        $certificate->delete();

        return back()->with('success', 'Sertifikat berhasil dihapus!');
    }
}
