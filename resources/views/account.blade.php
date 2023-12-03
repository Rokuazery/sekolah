@extends('layouts.empty')

<head>
    <title>Account</title>
</head>

@section('title')
    Manage Account
@endsection

@section('content')

   <div class="flex justify-center">
    <div class="p-10 flex flex-wrap gap-5 w-full sm:w-[80%] md:w-[70%] xl:[45%]">

        @if(session('success'))
            <x-alert-message type="success" message="{{ session('success') }}"/>
        @endif

        @if($errors->any())
            <x-alert-message type="danger" message="{{ $errors->first() }}"/>
        @endif

        <div class="p-5 bg-blue-100 flex font-semibold items-center rounded-lg h-fit w-full gap-5">

            <div class="rounded-full border p-5 w-20 h-20 bg-white shadow-md flex items-center justify-center">
                <div class="fa fa-user text-4xl text-gray-600"></div>
            </div>

            <div class="flex flex-col w-fit">
                <h1 class="text-lg">{{$user->nama}} @if($user->jenis_kelamin == "Laki-laki") <i class="fa fa-mars text-blue-500"></i>@elseif($user->jenis_kelamin == "Perempuan") <i class="fa fa-venus text-pink-500"></i>@else <i class="fa fa-ban text-red-500"></i> @endif</h1>
                <h1>User <i class="fa fa-angle-right text-sm"></i> {{$user->username}}</h1>
            </div>

            <div class="ml-auto">
                <a href="{{route('edit-account')}}"><x-primary-button content="Edit"/></a>
            </div>
        </div>

        <x-card icon="fa-home" title="Alamat">{{$user->alamat}}</x-card>

            <x-card icon="fa-star" title="Agama">{{$user->agama}}</x-card>

                <x-card icon="fa-school" title="Sekolah Asal">{{$user->sekolah_asal}}</x-card>

        <form class="w-full" action="{{ route('account.delete', $user->id) }}" method="POST">
            @csrf
            <button class="p-3 bg-white border border-red-400 rounded-lg w-full hover:bg-red-400 hover:text-white transition-colors">Hapus Akun (tidak bisa di batalkan)</button>
        </form>

    </div>
   </div>
@endsection
