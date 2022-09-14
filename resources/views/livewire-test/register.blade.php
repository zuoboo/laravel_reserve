<html>

<head>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    livewireテスト <span class="text-blue-600">register</span>
    {{-- <livewire:counter /> --}}
    @livewire('register')
    @livewireScripts
</body>

</html>

