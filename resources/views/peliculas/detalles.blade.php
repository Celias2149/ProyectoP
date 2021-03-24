@extends('welcome')

@section('seccion')
<div class="container mb-5 divdetalle"></div>
<div class="container mb-5 divdetalle">
    <h1 class="display-1 text-center hdetalle"> {{$pelicula->Nombre}}</h1>
    <p class="lh-base text-center fs-3">Año {{$pelicula->Año}} </p>
    <p class="lh-base text-center fs-3">{{$pelicula->Descripcion}} </p>
</div>


@endsection
