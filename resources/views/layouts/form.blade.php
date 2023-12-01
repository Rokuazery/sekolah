<head>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex justify-center items-center h-screen ">
        <form class="flex flex-col gap-5 bg-white p-5 rounded-lg border border-gray-200 shadow-lg w-96">
            @yield('content')
        </form>
    </div>
</body>
