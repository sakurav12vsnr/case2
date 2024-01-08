<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="//code.jquery.com/jquery-1.12.1.min.js"></script>
    <title>Rese</title>
</head>

<body class="container">
    <header class="header">
        <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav class="nav-content">
            <ul class="nav list">
                <li class="nav-item">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/register">
                        Registration
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/login">
                        Login
                    </a>
                </li>
            </ul>
        </nav>

        @if( Auth::check() )
        <nav class="nav-content">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/logout">
                        Logout
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/mypage">
                        Mypage
                    </a>
                </li>
            </ul>
        </nav>
        @endif

        <h1 class="header-ttl">
            Rese
        </h1>
    </header>

    <main class="main">
        @yield('main')
    </main>
    <script src="{{ asset('js/menu.js') }}"></script>
</body>

</html>