<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing</title>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="main-container">
        <header class="header">
            <nav class="navbar">
                <div class="logo">LOGO</div>
                <ul>
                    <li>
                        Home
                    </li>
                    <li>
                        Services
                    </li>
                    <li>
                        About
                    </li>
                    <li>
                        Contact
                    </li>
                    <li>
                        FAQ
                    </li>
                    <li>
                        <a href="" class="button">Sign up</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="main">
            @yield('content')
        </section>
        <footer class="footer"></footer>
    </div>
</body>

</html>