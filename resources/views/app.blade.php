<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing</title>
    <link href="/css/app.css" rel="stylesheet">
    <script defer src="/js/app.js"></script>
</head>

<body>
    <div class="main-container">
        <header class="header">
            <div class="logo">LOGO</div>
            <button aria-controls="primary-navigation" aria-expanded="false" class="nav-toggle"><span class="visually-hidden">Menu</span></button>
            <nav class="navbar" data-visible="false" id="primary-navigation">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/services">Services</a>
                    </li>
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                    <li>
                        <a href="/faq">FAQ</a>
                    </li>
                    <li>
                        <a href="/register" class="registration-btn button">Sign up</a>
                    </li>
                </ul>
            </nav>
        </header>
        @yield('content')
        <footer class="footer"></footer>
    </div>
</body>

</html>