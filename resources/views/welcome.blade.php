<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Bem-vindo ao Gerenciador de Links</h1>
    
    @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Registrar</a>
            @endauth
        </div>
    @endif

    <h2>Links Públicos</h2>
    <ul>
        {{-- @foreach($links as $link)
            <li><a href="{{ $link->url }}" target="_blank">{{ $link->title }}</a></li>
        @endforeach --}}
    </ul>
</body>
</html>
