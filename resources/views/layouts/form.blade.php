<head>
    @vite('resources/css/app.css')
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-h-screen overflow-y-auto">
        @yield('content')
    </div>
</body>


