@extends('welcome')

@section('seccion')

<style>
    .lista3{border:  1px solid black; color: black}
</style>

<div class="container mb-5"></div>
@if ( session('mensaje') )
<script>
    $(document).ready(function()
    {
        toastr.options = {
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }

        toastr["success"]('{{ session('mensaje') }}', "Registrada!")


    }
    )

</script>
@endif

<div class="container mb-5 divdetalle1"></div>
<div class=" card container mb-5 divdetalle1">
    <label class="display-3 mb-2 text-center">Agregar Peliculas</label>
<form action="{{ route('peliculas.crear') }}" method="POST" >
    @csrf

    @error('Nombre')
    <!--     <div class=" alert-danger alerta1"> El nombre es obligatorio</div>    mensaje que aparece en un div  -->
<!--  Script js que imprime un toast   -->
    <script>
        $(document).ready(function()
        {
            toastr.options = {
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }

            toastr["error"]("Completa el campo vacio", "Nombre Vacio")


        }
        )

    </script>

    @enderror
    @error('Descripcion')

<!--    <div class=" alert-danger alerta1"> La descripcion es obligatoria</div>  -->
<!--  Script js que imprime un toast   -->
    <script>
        $(document).ready(function()
        {
            toastr.options = {
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }

            toastr["error"]("Completa el campo vacio", "Descripcion Vacia")


        }
        )

    </script>
    @enderror
    @error('Año')

    <!--     <div class=" alert-danger alerta1"> El año es obligatorio</div>   -->
    <!--  Script js que imprime un toast   -->
    <script>
        $(document).ready(function()
        {
            toastr.options = {
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }

            toastr["error"]("Completa el campo vacio", "Año Vacio")


        }
        )

    </script>
    @enderror
    @error('Genero')
    <!--  <div class=" alert-danger alerta1"> El genero es obligatorio</div> -->
    <!--  Script js que imprime un toast   -->

    <script>
        $(document).ready(function()
        {
            toastr.options = {
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }

            toastr["error"]("Completa el campo vacio", "Genero Vacio")


        }
        )

    </script>
    @enderror
    @error('Promedio')
    <!-- <div class=" alert-danger alerta1 mb-1"> El promedio es obligatorio</div>-->
    <!--  Script js que imprime un toast   -->

    <script>
        $(document).ready(function()
        {
            toastr.options = {
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }

            toastr["error"]("Completa el campo vacio", "Promedio Vacio")


        }
        )

    </script>
    @enderror


    <input type="text" name="Nombre" placeholder="Nombre de la pelicula" class="form-control mb-2" value="{{ old('Nombre')}}" >
    <textarea  name="Descripcion" rows="3" placeholder="Descripción" class="form-control mb-2"value="{{ old('Descripcion')}}"  ></textarea>
    <input type="number" name="Año" min="1888" max="2024" placeholder="Año" class="form-control mb-2" value="{{ old('Año')}}"  >
    <input type="text" name="Genero" placeholder="Genero" class="form-control mb-2" value="{{ old('Genero')}}" >
    <input type="number" min="0" max="100" name="Promedio" placeholder="Promedio" class="form-control mb-2" value="{{ old('Promedio')}}" >
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-dark mb-2" type="submit">Agregar</button>

      </div>






</form>






</div>

@endsection
