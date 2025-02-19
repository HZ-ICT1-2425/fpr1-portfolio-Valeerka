<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/Index.css">
    @yield('contentcss')
</head>

<body>

<nav class="navbar">
    <a href="{{ route('home') }}" class="navbarHome" class="s">❀ Home</a>
    <ul>
        <li><a href="{{ route('profile') }}">profile</a></li>
        <li><a href="{{ route('dashboard') }}">dashboard</a></li>
        <li><a href="{{ route('faq') }}">faq</a></li>
        <li><a href="{{ route('blog') }}">blog</a></li>
    </ul>
</nav>
<main>
    @yield('content')
</main>

<footer>
    <p class="footerTextLeft">HBO-ICT at HZ university <br> Made by Valeria Cantsheva
    </p>
    <p class="footerTextRight">Study year 2024/2025</p>
</footer>

</body>

</html>
