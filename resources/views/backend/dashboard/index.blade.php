<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
@php

@endphp

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-gray-900 text-white transition-all duration-300">
            <div class="p-6">
                <h2 class="text-2xl font-bold">SiAkademik</h2>
            </div>
            <nav class="mt-6">
                <a href="{{ route('dashboard') }}"
                    class="nav-link active flex items-center px-6 py-3 hover:bg-gray-800 transition-colors">
                    <i class="fas fa-graduation-cap w-5 mr-3"></i>
                    Dashboard
                </a>
                <a href="{{ route('mahasiswa') }}"
                    class="nav-link flex items-center px-6 py-3 hover:bg-gray-800 transition-colors">
                    <i class="fas fa-users w-5 mr-3"></i>
                    Data Mahasiswa
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-4">
                    <button onclick="toggleSidebar()" class="text-gray-600 hover:text-gray-900">
                        <i id="menuIcon" class="fas fa-bars text-xl"></i>
                    </button>

                    <div class="flex items-center space-x-4">
                        <div class="text-right">
                            <p class="text-sm font-semibold text-gray-800">{{$user->name}}</p>
                            <p class="text-xs text-gray-500">{{$user->email}}</p>
                        </div>
                        
                        <div
                            class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-semibold">
{{ substr($user->name, 0, 1) }}
                        </div>
                        <button onclick="logout()"
                            class="flex items-center space-x-2 px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <main class="flex-1 overflow-y-auto p-6">
                <!-- Mahasiswa Content -->
                @yield('content')

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </main>
        </div>
    </div>

    <script>
       

        // Logout
        function logout() {
            if (confirm('Apakah Anda yakin ingin logout?')) {
                // Dalam Laravel, redirect ke route logout
                alert('Logout berhasil!');

                document.getElementById('logout-form').submit();
            }
        }

        // Load Recent Mahasiswa
        function loadRecentMahasiswa() {
            const tbody = document.getElementById('recentMahasiswaTable');
            tbody.innerHTML = '';

            mahasiswaData.slice(0, 5).forEach(mhs => {
                const tr = document.createElement('tr');
                tr.className = 'hover:bg-gray-50';
                tr.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${mhs.nim}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${mhs.nama}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${mhs.jurusan}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${mhs.angkatan}</td>
                `;
                tbody.appendChild(tr);
            });
        }

        // Load All Mahasiswa
        function loadAllMahasiswa() {
            const tbody = document.getElementById('allMahasiswaTable');
            tbody.innerHTML = '';

            mahasiswaData.forEach(mhs => {
                const tr = document.createElement('tr');
                tr.className = 'hover:bg-gray-50';
                tr.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${mhs.nim}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${mhs.nama}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${mhs.jurusan}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${mhs.angkatan}</td>
                `;
                tbody.appendChild(tr);
            });
        }

       
    </script>
</body>

</html>