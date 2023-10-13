<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/js/app.js'])

    <title>Formulario</title>
</head>
<body>
    @extends('layouts.plantilla')

    @section('titulo')
    <h2 class='text-center'>Bienvenido a la pagina principal de Laravel 9</h2><br/>
    @endsection

    @section('contenido')
    <center>
        <h1 class=" display-1 text-center text-danger mt-5">Esto es un Formulario</h1>
    </center>

     

    @endsection
</body>
</html>