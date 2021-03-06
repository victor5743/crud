<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Aplicación web para crear, leer, actualizar y eliminar usuarios."> 
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title> @yield('title') </title>
  </head>
  <body class="bg-gray-300">
    <div>
    <a href="{{ route('user.index') }}">
        <h1 class="font-montserrat text-3xl text-center mt-8 font-medium">CRUD</h1>
      </a>
	    @yield('content')
    </div>
  </body>
</html>
