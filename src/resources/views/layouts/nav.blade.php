<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" />
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h2 class="header__log">Atte</h2>
            <nav class="header-nav">
                <ul class="header__nav--list">
                    @if (Auth::check())
                    <li class="header__nav--item"><a href="/">ホーム</a></li>
                    <li class="header__nav--item"><a href="/attendance">日付一覧</a></li>
                    <li class="header__nav--item">
                        <form class="form" action="/logout" method="post">
                            @csrf
                            <button class="header__nav--button">ログアウト</button>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer__inner">
            <small class="copyright">
                &copy; Atte,inc.
            </small>
        </div>
    </footer>
</body>
</html>