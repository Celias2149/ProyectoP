<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link  href="{{ asset('css/estilo.css') }}" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <title>Hello, world!</title>
  </head>
  <body>

    <header>
        </header>

        <main>
<section class="section1">
    <div>
    <h1 class="display-3 hinicio ">Crud de evaluacion</h1>
    </div>
</section>
<section class="d-flex justify-content-center mt-5 ">
<a href="{{route('lista')}}" class="btn btn-success btn-lg col-md-1 lista">Lista</a>

<a href="{{ route('editar')}}" class="btn btn-danger btn-lg col-md-1 lista2">Editar</a>

<a href="{{route('registro')}}" class="btn btn-dark btn-lg col-md-1 lista3">Registrar</a>



</section>

<section class="section2">


    @yield('seccion')
</section>



  </body>
</html>
