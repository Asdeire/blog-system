<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
<header>
    <nav>
        <!-- Navigation Bar -->
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/posts">Posts</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
        </ul>
    </nav>
</header>

<main>
    <!-- Main Content Section -->
    @yield('content')
</main>

<footer>
    <!-- Footer Content -->
    <p>&copy; 2024 Blog Application</p>
</footer>

<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
