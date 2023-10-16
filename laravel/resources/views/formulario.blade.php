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

    <div class="container mt-5 col-md-6">
        <center>
            <h1 class=" display-1 text-center text-danger mt-5">Esto es un Formulario</h1>
    
            <div class="card text-center">
                <div class="card-header">
                  Introduce tus Recuerdos:
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                          <label class="form-label">Titulo</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Recuerdo:</label>
                          <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                <div class="card-footer text-body-secondary">
                  2 days ago
                </div>
              </div>
        </center>
    </div>

    
    @endsection
</body>
</html>