<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-full w-full">
        <div class="top-0 bg-gray-200 shadow-md h-16 w-full flex items-center p-5 border-b border-gray-400">
            <h1 class="font-semibold text-lg">@yield('title')</h1>

            <ul class="flex gap-4 ml-auto">
                <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('daftar-siswa')}}"><i class="fa fa-user-graduate"></i> Daftar Siswa</a></li>
            </ul>
        </div>

        <article class="p-10 flex flex-col gap-10 overflow-auto h-[calc(100vh-64px)]">
            @yield('content')
        </article>
    </div>
</body>
</html>
