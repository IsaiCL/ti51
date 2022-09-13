<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Document')</title>
</head>
<body>
    <header>
        <h1>Bienvenidos a la Corporación Weyland-Yutani SA de CV</h1>
        <p>Somos una empresa responsable</p>
    </header>
    <section>
        @yield('ContenidoQueCambia')
    </section>
    <footer>
        <p>Todos los derechos reservados </p>
    </footer>
</body>
</html>