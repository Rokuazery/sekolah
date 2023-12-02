<?php

namespace App\Http\Controllers;

use App\Models\RegisterSiswa;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        if ($user) {
            $totalUsers = RegisterSiswa::count();
            $schools = RegisterSiswa::distinct()->pluck('sekolah_asal');
            $schoolCounts = RegisterSiswa::select('sekolah_asal', \DB::raw('count(*) as count'))
                ->groupBy('sekolah_asal')
                ->pluck('count', 'sekolah_asal');

            $boysCount = RegisterSiswa::where('jenis_kelamin', 'Laki-laki')->count();
            $girlsCount = RegisterSiswa::where('jenis_kelamin', 'Perempuan')->count();


            // // Define the religions to count
            // $religs = ['Buddha', 'Hindu', 'Islam', 'Kristen', 'Konghucu'];

            // // Initialize an associative array to store counts
            // $religions = [];

            // // Loop through each religion and get the count
            // foreach ($religs as $religion) {
            //     $religions[$religion] = RegisterSiswa::where('agama', $religion)->count();
            // }

            return view('dashboard', compact('user', 'totalUsers', 'boysCount', 'girlsCount', 'schools', 'schoolCounts'));
        }

        return redirect("login");
    }
}
