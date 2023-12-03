@extends('layouts.empty')

<head>
    <title>Edit Account</title>
</head>

@section('title')
   <p><a href="{{route('account')}}" class="text-gray-600">Manage Account</a> <i class="fa fa-angle-right text-sm text-gray-400"></i> Edit</p>
@endsection

@section('content')
<div class="flex justify-center items-center h-screen">
    <form class="flex flex-col gap-5 bg-white p-5 rounded-lg border border-gray-200 shadow-lg w-80 md:w-96 max-h-screen overflow-y-auto" action="{{ route('account.update', $user->id) }}" method="POST">
        @csrf
        <x-input-field icon="fa fa-user" name="nama" type="text" placeholder="Nama lengkap..." errorType="nama" value="{{$user->nama}}"/>
            <x-input-field icon="fa fa-home" name="alamat" type="text" placeholder="Alamat..." errorType="alamatp" value="{{$user->alamat}}"/>
                <x-select name="agama" label="Agama" icon="fa-star">
                    <option value="" @if(empty($user->agama)) selected @endif>-</option>
                    <option value="Buddha" @if($user->agama == 'Buddha') selected @endif>Buddha</option>
                    <option value="Hindu" @if($user->agama == 'Hindu') selected @endif>Hindu</option>
                    <option value="Islam" @if($user->agama == 'Islam') selected @endif>Islam</option>
                    <option value="Katolik" @if($user->agama == 'Katolik') selected @endif>Katolik</option>
                    <option value="Kristen" @if($user->agama == 'Kristen') selected @endif>Kristen</option>
                    <option value="Konghucu" @if($user->agama == 'Konghucu') selected @endif>Konghucu</option>
                </x-select>

                <x-select name="sekolah_asal" label="Sekolah" icon="fa-school">
                    <option value="Bunga Hati Bangsa" @if($user->sekolah_asal == 'Bunga Hati Bangsa') selected @endif>Bunga Hati Bangsa</option>
                    <option value="Pelita Anugrah" @if($user->sekolah_asal == 'Pelita Anugrah') selected @endif>Pelita Anugrah</option>
                    <option value="PKBM Budi Luhur" @if($user->sekolah_asal == 'PKBM Budi Luhur') selected @endif>PKBM Budi Luhur</option>
                    <option value="Seraphine" @if($user->sekolah_asal == 'Seraphine') selected @endif>Seraphine</option>
                    <option value="Tzu Chi" @if($user->sekolah_asal == 'Tzu Chi') selected @endif>Tzu Chi</option>
                </x-select>

                <x-select name="jenis_kelamin" label="Jenis kelamin" icon="fa-venus">
                    <option value="" @if(empty($user->jenis_kelamin)) selected @endif>-</option>
                    <option value="Laki-laki" @if($user->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                    <option value="Perempuan" @if($user->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                </x-select>


                <x-primary-button type="submit" content="Simpan"/>
    </form>
</div>
@endsection
