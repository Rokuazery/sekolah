<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\RegisterSiswa;
use Illuminate\Http\Request;

class DaftarSiswaController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        if ($user) {
            $data = RegisterSiswa::all();
            return view('siswa', compact('user', 'data'));
        }

        return redirect("login");
    }

    public function index(Request $request)
    {
        $user = Auth::user(); // so don't need to check for auth

        if ($user) {
            $search = $request->input('search');

            $data = RegisterSiswa::when($search, function ($query) use ($search) {
                return $query->where('nama', 'like', '%' . $search . '%')
                    ->orWhere('alamat', 'like', '%' . $search . '%')
                    ->orWhere('sekolah_asal', 'like', '%' . $search . '%')
                    ->orWhere('username', 'like', '%' . $search . '%');
            })->paginate(15);

            $request->flash();

            return view('siswa', compact('user', 'data'));
        }

        return redirect("login");
    }
}
