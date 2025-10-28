<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
class MahasiswaController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $search = request()->get('search');
        $mahasiswa = Mahasiswa::query()->where('id_user', $user->id_user)->when($search, function ($query, $search) {
            return $query->where('nim', 'like', "%{$search}%")->orWhere('nama', 'like', "%{$search}%")->orWhere('jurusan', 'like', "%{$search}%");
        })->paginate(10);
        return view('backend.mahasiswa.index', compact('mahasiswa', 'user'));
    }
    /**
     * Show the form for creating a new resouterce.
     */

    public function create()
    {
        $nim_generate = $this->generateNIM();
        $user = Auth::user();

        return view('backend.mahasiswa.create', compact('user', 'nim_generate'));
    }
    private function generateNIM()
    {
        // Format NIM: TAHUN + KODE JURUSAN + NOMOR URUT (contoh: 2024010001)
        $year = date('Y');

        // Ambil NIM terakhir dari database
        $lastMahasiswa = Mahasiswa::where('nim', 'like', $year . '%')
            ->orderBy('nim', 'desc')
            ->first();

        if ($lastMahasiswa) {
            // Ambil 4 digit terakhir dan tambah 1
            $lastNumber = intval(substr($lastMahasiswa->nim, -4));
            $newNumber = $lastNumber + 1;
        } else {
            // Jika belum ada, mulai dari 1
            $newNumber = 1;
        }

        // Format: TAHUN + 2 digit kode (01 untuk umum) + 4 digit nomor urut
        $nim = $year . '01' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);

        return $nim;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // 1. Ambil user yang sedang login
    $user = Auth::user();
    
    // 2. "Suntikkan" id_user ke dalam data request
    // Ini akan menimpa data id_user dari form (jika ada)
    $request->merge(['id_user' => $user->id_user]);

        $validated = $request->validate([
            'nim' => 'required|unique:mahasiswa,nim',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:mahasiswa,email',
            'id_user' => 'required|exists:users,id_user',
            'jurusan' => 'required|string|max:255',
            'angkatan' => 'required|integer|min:2000|max:' . (date('Y') + 1),
        ]);

        Mahasiswa::create($validated);

        return redirect()->route('mahasiswa')
            ->with('success', 'Data mahasiswa berhasil ditambahkan');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = Auth::user();
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('backend.mahasiswa.edit', compact('mahasiswa', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|string',
            'angkatan' => 'required|integer|between:2020,2023',
        ], [
            'nama.required' => 'Nama lengkap harus diisi',
            'jurusan.required' => 'Jurusan harus dipilih',
            'angkatan.required' => 'Angkatan harus dipilih',
        ]);

        $mahasiswa->update([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan,
        ]);

        return redirect()->route('mahasiswa')
            ->with('success', 'Data mahasiswa berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa')
            ->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
