<?php

namespace App\Http\Controllers;

use App\Models\RegisterSiswa;
use Illuminate\Http\Request;
use Session;
use Auth;
use DB;

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
            // Find the user by ID
            $siswa = RegisterSiswa::find($id);

            // Update user data
            $siswa->update([
                'nama' => $request->input('nama'),
                'alamat' => $request->input('alamat'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'agama' => $request->input('agama'),
                'sekolah_asal' => $request->input('sekolah_asal'),
            ]);

            // Redirect to a view or route after successful update
            return redirect('account')->withSuccess('User data berhasil di update.');

        }

        return view('login');
    }

    public function delete()
    {
        $user = Auth::user();

        if ($user) {
            // Delete the user record from the database
            DB::beginTransaction();

            try {
                $user->delete();
                DB::commit();
                Auth::logout(); // Logout the user after successful deletion
                Session::flush();

                return redirect('login')->withSuccess('Akun telah berhasil dihapus.');
            } catch (\Exception $e) {
                DB::rollBack();
                // Handle the case where user deletion failed
                return redirect()->back()->withErrors('Oops, terjadi kesalahan saat menghapus akun. Silahkan coba lagi!');
            }
        }

        return redirect('login')->withErrors('Anda tidak dapat mengakses halaman ini.');
    }
}
