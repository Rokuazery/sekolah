<head>
    @vite('resources/css/app.css')
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100">
    <div class="flex justify-center items-center h-screen ">
        @yield('content')
    </div>
</body>
