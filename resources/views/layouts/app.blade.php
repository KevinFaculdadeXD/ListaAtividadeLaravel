<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Lista Atividade Laravel')</title>
</head>
<body>

    @include('layouts.menu')

    <main>
        @yield('content')
    </main>

</body>
</html>