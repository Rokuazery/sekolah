@extends('layouts.form')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sekolah: Register</title>
</head>
@section('content')
<form class="flex flex-col gap-5 bg-white p-5 rounded-lg border border-gray-200 shadow-lg w-96" action="{{route('register.post')}}" method="POST">
    {{-- The CSRF (Cross-Site Request Forgery) token is a security feature to protect your application from cross-site request forgery attacks. --}}
    @csrf
    <h1 class="text-center text-xl font-semibold">REGISTER</h1>
    <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">

    <x-input-field icon="fa fa-user-circle" name="username" type="text" placeholder="Username..." autofocus="true" errorType="username" :value="old('username')"/>

    <x-input-field icon="fa fa-user" name="nama" type="text" placeholder="Nama lengkap..." errorType="nama" :value="old('nama')"/>

    {{-- <x-input-field icon="fa fa-school" name="sekolah_asal" type="text" placeholder="Sekolah asal..." errorType="sekolah_asal" :value="old('sekolah_asal')"/> --}}

    <x-select name="sekolah_asal" label="Sekolah" icon="fa-school">
        <option value="Bunga Hati Bangsa" @if(old('sekolah_asal') == 'Bunga Hati Bangsa') selected @endif>Bunga Hati Bangsa</option>
        <option value="Pelita Anugrah" @if(old('sekolah_asal') == 'Pelita Anugrah') selected @endif>Pelita Anugrah</option>
        <option value="PKBM Budi Luhur" @if(old('sekolah_asal') == 'PKBM Budi Luhur') selected @endif>PKBM Budi Luhur</option>
        <option value="Seraphine" @if(old('sekolah_asal') == 'Seraphine') selected @endif>Seraphine</option>
        <option value="Tzu Chi" @if(old('sekolah_asal') == 'Tzu Chi') selected @endif>Tzu Chi</option>
    </x-select>

    <x-select name="jenis_kelamin" label="Jenis kelamin" icon="fa-venus">
        <option value="" @if(empty(old('jenis_kelamin'))) selected @endif>-</option>
        <option value="Laki-laki" @if(old('jenis_kelamin') == 'Laki-laki') selected @endif>Laki-laki</option>
        <option value="Perempuan" @if(old('jenis_kelamin') == 'Perempuan') selected @endif>Perempuan</option>
    </x-select>

    <x-input-field icon="fa fa-lock" name="password" type="password" placeholder="Password..." errorType="password"/>

    <x-input-field icon="fa fa-check-circle" name="password_confirmation" type="password" placeholder="Konfirmasi password..." errorType="confirmation" errorType="password"/>


    @if($errors->has('failed'))
        <x-alert-message type="danger" message="{{ $errors->first('failed') }}"/>
    @endif

    <x-primary-button type="submit" content="Register"/>

    <div class="flex justify-center items-center text-center">
        <p>Alaready have an account? <a class="text-blue-500 hover:text-blue-600 active:text-blue-300 cursor-pointer" href="{{ route('login')}}">Login</a></p>
    </div>
</form>
@endsection
</html>
