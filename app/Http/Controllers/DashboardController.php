<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Mahasiswa;
class DashboardController extends Controller
{


    public function index()
    {


        Log::info('User akses dashboard:', ['user' => Auth::user()]);
        $user = Auth::user();

        $mahasiswa = Mahasiswa::where('id_user', $user->id_user)->get();

        // Tambahkan 'user' di dalam compact
        return view('backend.dashboard.content', compact('mahasiswa', 'user'));
    }
}
