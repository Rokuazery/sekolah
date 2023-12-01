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


<h1 class="text-center text-xl font-semibold">LOGIN</h1>
<hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">

<x-input-field icon="fa fa-user-circle" name="username" type="text" placeholder="Username..."/>
<x-input-field icon="fa fa-lock" name="password" type="password" placeholder="Password..."/>

<x-primary-button type="submit" content="Login" isDisabled="false"/>

<div class="flex justify-center items-center text-center mt-2">
    <p>Don't have an account? <a class="text-blue-500 hover:text-blue-600 active:text-blue-300 cursor-pointer" href="{{ route('register')}}">Register</a></p>
</div>
@endsection
</html>
