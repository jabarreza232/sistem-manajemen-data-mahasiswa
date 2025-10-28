@extends('backend.dashboard.index')

@section('title', 'Edit Mahasiswa')

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
            <h1 class="text-3xl font-bold text-gray-800">Edit Data Mahasiswa</h1>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8">
            <form action="{{ route('mahasiswa_update', $mahasiswa->id_mahasiswa) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- NIM (Readonly - dari data mahasiswa) -->
                <div>
                    <label for="nim" class="block text-sm font-medium text-gray-700 mb-2">
                        NIM (Nomor Induk Mahasiswa)
                    </label>
                    <div class="relative">
                        <input type="text" 
                               id="nim" 
                               name="nim" 
                               value="{{ $mahasiswa->nim }}" 
                               readonly
                               class="w-full px-4 py-2.5 bg-gray-100 border border-gray-300 rounded-lg text-gray-700 font-mono cursor-not-allowed">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">NIM tidak dapat diubah</p>
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
                           value="{{ old('nama', $mahasiswa->nama) }}"
                           readonly
                           placeholder="Masukkan nama lengkap mahasiswa"
                           class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all @error('nama') border-red-500 @enderror">
                    @error('nama')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
     <!-- Email -->
                 <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email
                    </label>
                    <div class="relative">
                        <input type="text" 
                               id="email" 
                               name="email" 
                               value="{{ $mahasiswa->email }}" 
                               readonly
                               class="w-full px-4 py-2.5 bg-gray-100 border border-gray-300 rounded-lg text-gray-700 font-mono cursor-not-allowed">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">Email tidak dapat diubah</p>
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
                        <option value="Teknik Informatika" {{ old('jurusan', $mahasiswa->jurusan) == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                        <option value="Manajemen" {{ old('jurusan', $mahasiswa->jurusan) == 'Manajemen' ? 'selected' : '' }}>Manajemen</option>
                        <option value="Sistem Informasi" {{ old('jurusan', $mahasiswa->jurusan) == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                        <option value="Hukum" {{ old('jurusan', $mahasiswa->jurusan) == 'Hukum' ? 'selected' : '' }}>Hukum</option>
                        <option value="Akuntansi" {{ old('jurusan', $mahasiswa->jurusan) == 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
                        <option value="Ilmu Komunikasi" {{ old('jurusan', $mahasiswa->jurusan) == 'Ilmu Komunikasi' ? 'selected' : '' }}>Ilmu Komunikasi</option>
                        <option value="DKV" {{ old('jurusan', $mahasiswa->jurusan) == 'DKV' ? 'selected' : '' }}>DKV</option>
                        <option value="Psikologi" {{ old('jurusan', $mahasiswa->jurusan) == 'Psikologi' ? 'selected' : '' }}>Psikologi</option>
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
                        <option value="2020" {{ old('angkatan', $mahasiswa->angkatan) == '2020' ? 'selected' : '' }}>2020</option>
                        <option value="2021" {{ old('angkatan', $mahasiswa->angkatan) == '2021' ? 'selected' : '' }}>2021</option>
                        <option value="2022" {{ old('angkatan', $mahasiswa->angkatan) == '2022' ? 'selected' : '' }}>2022</option>
                        <option value="2023" {{ old('angkatan', $mahasiswa->angkatan) == '2023' ? 'selected' : '' }}>2023</option>
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
                        Update Data
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
        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-yellow-800">Perhatian</h3>
                    <p class="mt-1 text-sm text-yellow-700">
                        NIM tidak dapat diubah untuk menjaga integritas data. Pastikan semua perubahan data sudah benar sebelum menyimpan.
                    </p>
                </div>
            </div>
        </div>

        <!-- Data Log Info -->
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
            <h3 class="text-sm font-medium text-gray-700 mb-2">Informasi Data</h3>
            <div class="grid grid-cols-2 gap-4 text-sm text-gray-600">
                <div>
                    <span class="font-medium">Dibuat:</span>
                    <span class="ml-2">{{ $mahasiswa->created_at ? $mahasiswa->created_at->format('d M Y, H:i') : '-' }}</span>
                </div>
                <div>
                    <span class="font-medium">Terakhir diubah:</span>
                    <span class="ml-2">{{ $mahasiswa->updated_at ? $mahasiswa->updated_at->format('d M Y, H:i') : '-' }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection