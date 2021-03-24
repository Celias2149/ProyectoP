@extends('welcome')

@section('seccion')

<style>
    .lista2{border:  1px solid black; color: black}
</style>
<div class="container mb-5">
    @if ( session('mensaje1') )
    <script>
            $(document).ready(function()
            {
                toastr.options = {
                "progressBar": true,
                "positionClass": "toast-bottom-center",
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

                toastr["success"]('{{ session('mensaje1') }}', "Actualizada!")


            }
            )

    </script>
@endif
@if ( session('mensaje3') )
<script>
    $(document).ready(function()
    {
        toastr.options = {
        "progressBar": true,
        "positionClass": "toast-bottom-center",
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

        toastr["success"]('{{ session('mensaje3') }}', "Eliminada!")


    }
    )

</script>
@endif
</div>
<div class="container2 container d-flex p-1 table-responsive-sm">



    <table class="table table-dark table-striped ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Año</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item )

            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{ $item->Nombre }}</td>
                <td>{{$item->Año}}</td>

                <td>
                    <a href="{{route('peliculas.modificar', $item)}}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('peliculas.eliminar', $item) }}" class="d-inline" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
              </tr>

            @endforeach


        </tbody>
      </table>





@endsection

</div>
