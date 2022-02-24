<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
   <style>
       a{
           text-decoration: none;
       }
       ul li{
        text-decoration: none;
       }
   </style>
<nav> 
        <ul>
        <li><a href="./">Home</a></li>
        <li><a href="./sesion">Iniciar Sesion</a></li>
        <li><a href="./nuevoUser">Crear Usuario</a></li>
    </ul>
</nav>



@yield('content')
</body>
</html>