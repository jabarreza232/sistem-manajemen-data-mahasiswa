@extends('backend.dashboard.index')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <div class="space-y-6">
        <!-- Header -->
        <div class="flex items-center gap-4">
            <a href="{{ route('mahasiswa') }}" 
               class="inline-flex items-center text-gray-600 hover:text-gray-800 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali
            </a>
            <h1 class="text-3xl font-bold text-gray-800">Tambah Mahasiswa Baru</h1>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8">
            <form action="{{ route('mahasiswa_store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- NIM (Auto Generate) -->
                <div>
                    <label for="nim" class="block text-sm font-medium text-gray-700 mb-2">
                        NIM (Nomor Induk Mahasiswa)
                    </label>
                    <div class="relative">
                        <input type="text" 
                               id="nim" 
                               name="nim" 
                               value="{{ $nim_generate }}" 
                               readonly
                               class="w-full px-4 py-2.5 bg-gray-100 border border-gray-300 rounded-lg text-gray-700 font-mono cursor-not-allowed">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">NIM dibuat otomatis oleh sistem</p>
                    @error('nim')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Nama Lengkap -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Lengkap <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           id="nama" 
                           name="nama" 
                           value="{{ old('nama') }}"
                           required
                           placeholder="Masukkan nama lengkap mahasiswa"
                           class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all @error('nama') border-red-500 @enderror">
                    @error('nama')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}"
                           required
                           placeholder="Masukkan email mahasiswa"
                           class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Jurusan -->
                <div>
                    <label for="jurusan" class="block text-sm font-medium text-gray-700 mb-2">
                        Jurusan <span class="text-red-500">*</span>
                    </label>
                    <select id="jurusan" 
                            name="jurusan" 
                            required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all @error('jurusan') border-red-500 @enderror">
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="Teknik Informatika" {{ old('jurusan') == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                        <option value="Manajemen" {{ old('jurusan') == 'Manajemen' ? 'selected' : '' }}>Manajemen</option>
                        <option value="Sistem Informasi" {{ old('jurusan') == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                        <option value="Hukum" {{ old('jurusan') == 'Hukum' ? 'selected' : '' }}>Hukum</option>
                        <option value="Akuntansi" {{ old('jurusan') == 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
                        <option value="Ilmu Komunikasi" {{ old('jurusan') == 'Ilmu Komunikasi' ? 'selected' : '' }}>Ilmu Komunikasi</option>
                        <option value="DKV" {{ old('jurusan') == 'DKV' ? 'selected' : '' }}>DKV</option>
                        <option value="Psikologi" {{ old('jurusan') == 'Psikologi' ? 'selected' : '' }}>Psikologi</option>
                    </select>
                    @error('jurusan')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Angkatan -->
                <div>
                    <label for="angkatan" class="block text-sm font-medium text-gray-700 mb-2">
                        Angkatan <span class="text-red-500">*</span>
                    </label>
                    <select id="angkatan" 
                            name="angkatan" 
                            required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all @error('angkatan') border-red-500 @enderror">
                        <option value="">-- Pilih Angkatan --</option>
                        <option value="2020" {{ old('angkatan') == '2020' ? 'selected' : '' }}>2020</option>
                        <option value="2021" {{ old('angkatan') == '2021' ? 'selected' : '' }}>2021</option>
                        <option value="2022" {{ old('angkatan') == '2022' ? 'selected' : '' }}>2022</option>
                        <option value="2023" {{ old('angkatan') == '2023' ? 'selected' : '' }}>2023</option>
                    </select>
                    @error('angkatan')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex gap-3 pt-4">
                    <button type="submit" 
                            class="flex-1 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition-colors duration-200">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Simpan Data
                    </button>
                    <a href="{{ route('mahasiswa') }}" 
                       class="flex-1 px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold rounded-lg shadow-md transition-colors duration-200 text-center">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Batal
                    </a>
                </div>
            </form>
        </div>

        <!-- Info Box -->
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-blue-800">Informasi</h3>
                    <p class="mt-1 text-sm text-blue-700">
                        NIM akan di-generate otomatis oleh sistem untuk memastikan keunikan data. Pastikan semua field yang bertanda <span class="text-red-500">*</span> telah diisi dengan benar.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection