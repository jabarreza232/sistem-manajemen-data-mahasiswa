@extends('backend.dashboard.index')

@section('title', 'Dashboard Mahasiswa')

@section('content')

@php
    // Hitung statistik dari data mahasiswa
    $totalMahasiswa = $mahasiswa->count();
    $jurusanAktif = $mahasiswa->unique('jurusan')->count();
    $angkatanAktif = $mahasiswa->unique('angkatan')->count();
    $mahasiswaBaru = $mahasiswa->where('angkatan', date('Y'))->count();
    
    // Data untuk chart mahasiswa per angkatan
    $mahasiswaPerAngkatan = $mahasiswa->groupBy('angkatan')
        ->map(function($item) {
            return $item->count();
        })
        ->sortKeys();
    
    // Data untuk chart mahasiswa per jurusan
    $mahasiswaPerJurusan = $mahasiswa->groupBy('jurusan')
        ->map(function($item) {
            return $item->count();
        });
@endphp

<!-- Dashboard Content -->
<div id="dashboardContent" class="space-y-6">
    <h1 class="text-3xl font-bold text-gray-800">Dashboard Mahasiswa</h1>

    <!-- Scorecard Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm font-medium">Total Mahasiswa</p>
                    <h3 class="text-3xl font-bold mt-2">{{ $totalMahasiswa }}</h3>
                </div>
                <i class="fas fa-users text-5xl text-blue-200"></i>
            </div>
        </div>

        <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-green-100 text-sm font-medium">Jurusan Aktif</p>
                    <h3 class="text-3xl font-bold mt-2">{{ $jurusanAktif }}</h3>
                </div>
                <i class="fas fa-book-open text-5xl text-green-200"></i>
            </div>
        </div>

        <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-yellow-100 text-sm font-medium">Angkatan Aktif</p>
                    <h3 class="text-3xl font-bold mt-2">{{ $angkatanAktif }}</h3>
                </div>
                <i class="fas fa-calendar text-5xl text-yellow-200"></i>
            </div>
        </div>

        <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-purple-100 text-sm font-medium">Mahasiswa Baru</p>
                    <h3 class="text-3xl font-bold mt-2">{{ $mahasiswaBaru }}</h3>
                </div>
                <i class="fas fa-user-graduate text-5xl text-purple-200"></i>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Bar Chart -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Mahasiswa per Angkatan</h3>
            <canvas id="barChart"></canvas>
        </div>

        <!-- Pie Chart -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Distribusi per Jurusan</h3>
            <canvas id="pieChart"></canvas>
        </div>
    </div>

  
</div>

<script>
    // Data dari Laravel
    const mahasiswaPerAngkatan = @json($mahasiswaPerAngkatan);
    const mahasiswaPerJurusan = @json($mahasiswaPerJurusan);

    // Initialize Charts
    function initCharts() {
        // Bar Chart - Mahasiswa per Angkatan
        const barCtx = document.getElementById('barChart').getContext('2d');
        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: Object.keys(mahasiswaPerAngkatan),
                datasets: [{
                    label: 'Jumlah Mahasiswa',
                    data: Object.values(mahasiswaPerAngkatan),
                    backgroundColor: '#3b82f6',
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: true,
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });

        // Pie Chart - Mahasiswa per Jurusan
        const pieCtx = document.getElementById('pieChart').getContext('2d');
        new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: Object.keys(mahasiswaPerJurusan),
                datasets: [{
                    data: Object.values(mahasiswaPerJurusan),
                    backgroundColor: ['#3b82f6', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6', '#ec4899'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function () {
        initCharts();
    });
</script>

@endsection