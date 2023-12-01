@extends('layouts.app')

<head>
    <title>Dashboard</title>
</head>
@section('content')

<div class="grid grid-cols-6">
    <div class="col-span-1 w-full bg-gray-200 shadow-lg h-screen flex flex-col font-semibold text-gray-300 text-center">
        <div class="bg-blue-500 p-5 flex flex-col justify-center items-center">
            <div class="rounded-full border p-5 w-20 h-20 bg-white shadow-md">
                <div class="fa fa-user text-2xl"></div>
            </div>
            <h2 class="mt-3 text-white">Fenlianto N.S</h2>
        </div>
        <div class="flex flex-col">
            <a href="#" class="text-gray-700 hover:text-black hover:bg-gray-300 p-3">Dashboard</a>
            <a href="#" class="text-gray-700 hover:text-black hover:bg-gray-300 p-3">Daftar Siswa</a>
            {{-- <a href="#" class="text-gray-700 hover:text-black hover:bg-gray-300 p-3">Link 3</a> --}}
        </div>


    </div>

    <div class="h-full w-full">

    </div>
</div>
@endsection
