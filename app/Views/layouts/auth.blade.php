<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Authentication')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
<header>
    <nav>
        <!-- Authentication Navigation -->
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/posts">Posts</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
        </ul>
    </nav>
</header>

<main>
    <!-- Content from Auth Views -->
    @yield('content')
</main>

<footer>
    <p>&copy; 2024 Blog Application</p>
</footer>

<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
