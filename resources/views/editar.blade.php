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
<div class=" container pt-3 pb-3  card">

<div class="card-body ">

    <table id="listaeditar" class="table table-striped table-bordered dt-responsive nowrap"  style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Año</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item )

            <tr>
                <td class="tdid">{{$item->id}}</th>
                <td>{{ $item->Nombre }}</td>
                <td>{{$item->Año}}</td>

                <td class="tdbnts">
                    <a href="{{route('peliculas.modificar', $item)}}" class="btn btn-warning btn-sm btnupdate">Editar</a>
                    <form action="{{ route('peliculas.eliminar', $item) }}" class="d-inline" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm btndelet">Eliminar</button>
                    </form>
              </tr>

            @endforeach


        </tbody>

      </table>

      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>

<script>
  $(document).ready(function() {
    $('#listaeditar').DataTable( {
        "language": {
            "lengthMenu": "Mostrar _MENU_ entradas",
            "zeroRecords": "No se ha encontrado nada",
            "info": "Mostrar _PAGE_ de _PAGES_",
            "infoEmpty": "0 paginas para mostrar",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Buscar:",
            "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
    },
    "aria": {
        "sortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sortDescending": ": Activar para ordenar la columna de manera descendente"
    },



        },
        "responsive":"true"
    } );
} );



</script>
</div>
</div>





@endsection
