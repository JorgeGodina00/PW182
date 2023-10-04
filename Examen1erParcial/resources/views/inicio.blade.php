<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>
    @extends('layouts.plantilla')
    @section('titulo')
    <h2 class='text-center'>Inicio</h2><br/>
    @endsection
    @section('contenido')
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card Examen 1er Parcial</h5>
                <p class="card-text">Hola, esto es un card para el 1er Parcial</p>
            </div>
        </div>
    @endsection
</body>
</html>
