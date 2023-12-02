<?php

namespace App\Http\Controllers;

use App\Models\RegisterSiswa;
use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    public function create()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('account', compact('user'));
        }

        return view('login');
    }

    public function editAccount()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('edit-account', compact('user'));
        }

        return view('login');
    }

    public function update(Request $request, $id)
    {
        if (Auth::check()) {
            // $request->validate([
            //     'username' => 'required',
            //     'nama' => 'required',
            // ]);

            // Find the user by ID
            $siswa = RegisterSiswa::find($id);

            // Update user data
            $siswa->update([
                // 'username' => $request->input('username'),
                'nama' => $request->input('nama'),
                'alamat' => $request->input('alamat'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'agama' => $request->input('agama'),
                'sekolah_asal' => $request->input('sekolah_asal'),

                // Update other fields as needed
            ]);

            // Redirect to a view or route after successful update
            return redirect('account')->withSuccess('User data berhasil di update.');

        }

        return view('login');

    }
}
