@extends('layouts.app')

<head>
    <title>Dashboard</title>
</head>

@section('title')
    Dashboard
@endsection

@section('content')
    <h1 class="text-lg">👋 Hello, {{$user->nama}}!</h1>

    <div class="p-5 bg-blue-100 rounded-lg">
        <h2><i class="fa fa-graduation-cap"></i> Siswa terdaftar: {{$totalUsers}}</h2>
    </div>

    <div class="p-5 bg-blue-100 rounded-lg">

        <h2><i class="fa fa-venus text-pink-500"></i> Prempuan: {{$girlsCount}}</h2>

        <h2><i class="fa fa-mars text-blue-500"></i> Laki-laki: {{$boysCount}}</h2>

        <h2><i class="fa fa-ban text-red-500"></i> Non Biner: {{($totalUsers - $boysCount - $girlsCount)}}</h2>
    </div>

    <h1>Sekolah-sekolah yang terdaftar <i class="fa fa-angle-right"></i></h1>


    <div class="flex flex-wrap justify-between items-center gap-5">
        @foreach ($schools as $sekolah)
            <div class="p-5 bg-blue-100 rounded-lg">
                <div class="w-36 h-36 flex justify-center items-center bg-white rounded-lg">
                    <img class="object-contain w-28 h-28" src="{{ mix('resources/images/' . $sekolah . '.jpg') }}" alt="Sekolah Image">
                </div>
                <p class="text-center text-sm mt-5">{{ $sekolah }}<br>{{ $schoolCounts[$sekolah] ?? 0}} <i class="fa fa-user-graduate"></i></p>
            </div>
        @endforeach
    </div>

    {{-- <div class="p-5 bg-blue-100 rounded-lg">
    <h1><i class="fa fa-star"></i> Agama <i class="fa fa-angle-right"></i></h1>


    <div class="flex gap-2 mt-5 flex-wrap">
    @foreach($religions as $religion => $count)
        <h2>{{ $religion }}: {{ $count }}</h2>
    @endforeach
    </div> --}}
    </div>
@endsection
