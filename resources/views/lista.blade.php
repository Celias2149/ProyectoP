@extends('welcome')

@section('seccion')
<style>
    .lista{border:  1px solid black; color: black}
</style>
<div class="container mb-5">


</div>
<div class="container3 container pt-3  pb-3 table-responsive">


    <table class="table table-dark table-striped  ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Año</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Genero</th>
            <th scope="col">Promedio</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item )

            <tr>
                <th scope="row">{{$item->id}}</th>

                <td>
                    <a class="links" href="{{route('peliculas.detalles', $item)}}">
                        {{ $item->Nombre }}
                      </a>

                </td>
                <td>{{$item->Año}}</td>
                <td>{{$item->Descripcion}}</td>
                <td>{{$item->Genero}}</td>
                <td>{{$item->Promedio}}</td>
              </tr>

            @endforeach


        </tbody>
      </table>



      {{$datos->links()}}




</div>

@endsection
