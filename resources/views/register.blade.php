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
<h1 class="text-center text-xl font-semibold">REGISTER</h1>
<hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">

<x-input-field icon="fa fa-user-circle" name="username" type="text" placeholder="Username..."/>

<x-input-field icon="fa fa-user" name="name" type="text" placeholder="Name..."/>
<x-input-field icon="fa fa-home" name="address" type="text" placeholder="Address..."/>
<x-input-field icon="fa fa-hashtag" name="NISN" type="text" placeholder="NISN..."/>

<x-input-field icon="fa fa-lock" name="password" type="password" placeholder="Password..."/>
<x-input-field icon="fa fa-check-circle" name="confirmpassword" type="password" placeholder="Confirm password..."/>

<x-primary-button type="submit" content="Register" isDisabled="false"/>

<div class="flex justify-center items-center text-center">
    <p>Alaready have an account? <a class="text-blue-500 hover:text-blue-600 active:text-blue-300 cursor-pointer" href="{{ route('login')}}">Login</a></p>
</div>
@endsection
</html>
