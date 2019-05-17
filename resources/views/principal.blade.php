<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Practica 02</title>
    <link rel="stylesheet" href="{{asset('css/layout.css')}}" />
  </head>

  <body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('images/registro-icono-png-2.png') }}" alt="" width="120" height="95">
            <h2>Register form</h2>
            <p class="lead">Laravel es uno de los frameworks de código abierto más fáciles de asimilar para PHP. Es simple, muy potente y tiene una interfaz elegante y divertida de usar. Fue creado en 2011 y tiene una gran influencia de frameworks como Ruby on Rails, Sinatra y ASP.NET MVC.</p>
        </div>

        <div class="row">
            <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Registro de usuario</h4>
            <form class="needs-validation" method="POST" action="{{url('/showFields')}}">
            @csrf
                <div class="row">
                <!-- CAMPOS PARA TOMAR LOS DATOS DE LA VISTA-->
                    <div class="col-md-5 mb-5">
                        <label for="nombre">Nombre(s)</label>
                        <!-- FULL NAME-->
                        <input type="text" class="form-control" id="nombre" placeholder="" value="" required>
                        <div class="invalid-feedback">
                           Valid Nombre is required.
                        </div>
                    </div>
                    <div class="col-md-5 mb-5">
                        <label for="apellidos">Apellidos</label>
                        <!-- Age-->
                        <input type="text" class="form-control" id="apellidos" placeholder="" value="" required>
                        <div class="invalid-feedback">
                           Valid Apellidos is required.
                        </div>
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="edad">Edad</label>
                        <!-- Age-->
                        <input type="text" class="form-control" id="edad" placeholder="" value="" required>
                        <div class="invalid-feedback">
                           Valid Age is required.
                        </div>
                    </div>                    
                </div>
                <div class="mb-3">
                    <label for="email">Correo electrónico </label>
                    <!-- E-MAIL -->
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Registrar</button>
            </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2019 Company Name</p>
            <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
