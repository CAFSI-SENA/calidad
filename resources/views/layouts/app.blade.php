<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Atributos de Calidad | @yield('title')</title>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <div class="col-md-4">
        <a href="\." class="navbar-brand">Inicio</a>
        <a href="{{route(('atributo.index'))}}" class="navbar-brand">Atributos de Calidad</a>
        <a href="{{route('contacto.index')}}" class="navbar-brand">Contacto</a>
    </div>
</nav>
<br>
@yield('content')

</body>

</html>
