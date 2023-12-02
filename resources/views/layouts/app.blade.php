<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="grid grid-cols-9 h-full">
        <div class="col-span-4 md:col-span-3 xl:col-span-2 w-full bg-gray-200 shadow-lg h-full flex flex-col font-semibold text-gray-400 text-center border-r  border-gray-400">

            <div class="bg-gradient-to-r from-blue-700 to-blue-500 p-5 flex flex-col justify-center items-center gap-5">
                <div class="rounded-full border p-5 w-20 h-20 bg-white shadow-md">
                    <div class="fa fa-user text-3xl"></div>
                </div>
                <h2 class="text-white">{{$user->nama}}</h2>
            </div>
            <div class="flex flex-col text-left font-normal text-md">
                <a href="{{route('dashboard')}}" class="text-gray-700 hover:text-black hover:bg-gray-300 p-3"><i class="fa fa-dashboard transition-colors"></i> Dashboard</a>
                <a href="{{route('daftar-siswa')}}" class="text-gray-700 hover:text-black hover:bg-gray-300 p-3"><i class="fa fa-user-graduate transition-colors"></i> Daftar Siswa</a>
            </div>

           <div class="mt-auto mb-5"><h1 class="text-sm text-gray-400">Developed by Fenlianto Nanda Setiawan<br>X-PPLG I <a class="text-blue-400" href="https://github.com/rokuazery">visit my Github</a></h1></div>
        </div>

        <div class="h-full w-full col-span-5 md:col-span-6 xl:col-span-7">
            <div class="top-0 bg-gray-200 shadow-md h-16 w-full flex items-center p-5 border-b border-gray-400">
                <h2 class="font-semibold">@yield('title')</h2>

                <ul class="flex gap-4 ml-auto">
                    <li><a href="{{route('account')}}">Account</a></li>
                    <li><a class="text-red-500" href="{{route('logout')}}">Logout</a></li>
                </ul>
            </div>

            <article class="p-10 flex flex-col gap-8 overflow-auto h-[calc(100vh-64px)]">
                @yield('content')
            </article>
        </div>
    </div>
</body>
</html>
