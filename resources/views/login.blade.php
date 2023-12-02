    @extends('layouts.form')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sekolah: Login</title>
    </head>
    @section('content')
    {{-- Dump session data --}}
{{-- @dump(session()->all()) --}}

    <form class="flex flex-col gap-5 bg-white p-5 rounded-lg border border-gray-200 shadow-lg w-80 md:w-96" action="{{ route('login.post') }}" method="POST">
        {{-- The CSRF (Cross-Site Request Forgery) token is a security feature to protect your application from cross-site request forgery attacks. --}}
        @csrf

        <h1 class="text-center text-xl font-semibold">LOGIN</h1>
        <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">

        <x-input-field icon="fa fa-user-circle" name="username" type="text" placeholder="Username..." autofocus="true" errorType="username" value="{{ old('username') }}"/>
        <x-input-field icon="fa fa-lock" name="password" type="password" placeholder="Password..." errorType="password"/>

        @if($errors->has('login'))
            <x-alert-message type="danger" message="{{ $errors->first('login') }}"/>
        @endif

        @if(session('success'))
            <x-alert-message type="success" message="{{ session('success') }}"/>
        @endif

        <x-primary-button type="submit" content="Login"/>

        <div class="flex justify-center items-center text-center mt-2">
            <p>Don't have an account? <a class="text-blue-500 hover:text-blue-600 active:text-blue-300 cursor-pointer" href="{{ route('register')}}">Register</a></p>
        </div>
    </form>


    @endsection
    </html>
