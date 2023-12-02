@extends('layouts.app')

<head>
    <title>Dashboard</title>
</head>

@section('title')
    Daftar Siswa
@endsection

@section('content')
{{-- @dump(session()->all()) --}}
<div class="flex flex-col gap-5">
    <form class="flex gap-2 sticky top-0 bg-white z-50" action="{{route('siswas.get')}}" method="GET">
        <x-input-field class="w-5/6" icon="fa fa-search" name="search" type="text" placeholder="Search..." :value="old('search')"/>
        <x-primary-button class="w-1/6" type="submit" content="Search"/>
    </form>

    <table class="w-full bg-white border border-gray-300 rounded-lg">
        <thead class="sticky top-0">
            <tr class="bg-gray-300">
                <th class="py-3 px-4 border-b text-left">ID</th>
                <th class="py-3 px-4 border-b text-left">Nama</th>
                <th class="py-3 px-4 border-b text-left">Kelamin</th>
                <th class="py-3 px-4 border-b text-left">Alamat</th>
                <th class="py-3 px-4 border-b text-left">Agama</th>
                <th class="py-3 px-4 border-b text-left">Sekolah Asal</th>
                <th class="py-3 px-4 border-b text-left">Bergabung Pada</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $siswa)
                <tr class="hover:bg-gray-100 transition">
                    <td class="py-2 px-4 border-b">{{ $siswa->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $siswa->nama }}</td>
                    <td class="py-2 px-4 border-b">{{ $siswa->jenis_kelamin }}</td>
                    <td class="py-2 px-4 border-b">{{ $siswa->alamat ?: '-' }}</td>
                    <td class="py-2 px-4 border-b">{{ $siswa->agama ?: '-' }}</td>
                    <td class="py-2 px-4 border-b">{{ $siswa->sekolah_asal ?: '-' }}</td>
                    <td class="py-2 px-4 border-b">{{ $siswa->created_at ?: '-' }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- {{ $data->links() }} --}}

@endsection
