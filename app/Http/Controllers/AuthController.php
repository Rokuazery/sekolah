<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use App\Models\RegisterSiswa;
use Illuminate\Http\Request;
use Session;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        } else {
            return view('login');
        }
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        } else {
            return view('register');
        }
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('dashboard')->withSuccess('Login berhasil!');
        }

        return redirect()->back()->withErrors(['login' => 'Username atau password salah.'])->withInput();
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:registrasi_siswa',
            'sekolah_asal' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        try {

            $data = $request->all();
            $check = $this->create($data);

            if ($check) {
                return redirect("login")->withSuccess('Akun telah berhasil di register!');
            } else {
                // Handle the case where user creation failed
                return redirect()->back()->withInput()->withErrors(['failed' => 'Oops, gagal membuat user baru!']);
            }
        } catch (QueryException $e) {
            // Handle database connection error
            return redirect()->back()->withInput()->withErrors(['failed' => 'Oops, terjadi kesalahan saat berkomunikasi dengan database. Silahkan coba lagi nanti.']);
        } catch (\Exception $e) {
            // Catch any other unexpected exceptions
            return redirect()->back()->withInput()->withErrors(['failed' => 'Oops, terjadi kesalahan yang tidak terduga. Silahkan coba lagi nanti.']);
        }
    }

    public function create(array $data)
    {
        return RegisterSiswa::create([
            'username' => $data['username'],
            'nama' => $data['nama'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'sekolah_asal' => $data['sekolah_asal'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
}
