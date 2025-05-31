<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    // ✅ Tampilkan semua klinik (admin view)
    public function index()
    {
        $clinics = Clinic::all();
        return view('clinics.index', compact('clinics'));
    }

    // ✅ Tampilkan form tambah klinik
    public function create()
    {
        return view('clinics.create');
    }

    // ✅ Simpan data klinik baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'address' => 'nullable',
            'contact' => 'nullable',
            'image' => 'nullable',
        ]);

        Clinic::create($request->all());
        return redirect()->route('clinics.index')->with('success', 'Klinik berhasil ditambahkan.');
    }

    // ✅ Tampilkan form edit klinik
    public function edit(Clinic $clinic)
    {
        return view('clinics.edit', compact('clinic'));
    }

    // ✅ Update data klinik
    public function update(Request $request, Clinic $clinic)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'address' => 'nullable',
            'contact' => 'nullable',
            'image' => 'nullable',
        ]);

        $clinic->update($request->all());
        return redirect()->route('clinics.index')->with('success', 'Klinik berhasil diperbarui.');
    }

    // ✅ Hapus klinik
    public function destroy(Clinic $clinic)
    {
        $clinic->delete();
        return redirect()->route('clinics.index')->with('success', 'Klinik berhasil dihapus.');
    }
}
