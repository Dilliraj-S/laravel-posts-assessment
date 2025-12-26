<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Posts App') }}</title>

    <!-- Fonts (optional but clean) -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!-- Navigation -->
    <nav style="background:#1f2937; padding:15px;">
        <div style="max-width:900px; margin:0 auto; display:flex; justify-content:space-between; align-items:center;">
            <a href="{{ route('posts.index') }}" style="color:#fff; text-decoration:none; font-weight:bold;">
                Laravel Posts
            </a>

            <div>
                @auth
                    <span style="color:#fff; margin-right:15px;">
                        {{ Auth::user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit"
                            style="background:#ef4444; color:#fff; border:none; padding:6px 12px; border-radius:4px; cursor:pointer;">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" style="color:#fff; margin-right:15px;">Login</a>
                    <a href="{{ route('register') }}" style="color:#fff;">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

</body>

</html>
