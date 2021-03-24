@extends('welcome')

@section('seccion')

<div class="container mb-5 divdetalle1"></div>
<div class=" card container mb-5 divdetalle1">
    <label class="display-3 mb-2 text-center">Modificar Peliculas</label>



<form action="{{ route('peliculas.modificar',$datos->id) }}" method="POST" >

@method('PUT')
    @csrf
    @error('Nombre')
    <div class=" alert-danger alerta1"> El nombre es obligatorio</div>

    @enderror
    @error('Descripcion')
    <div class=" alert-danger alerta1"> La descripcion es obligatoria</div>
    @enderror
    @error('Año')
    <div class=" alert-danger alerta1"> El año es obligatorio</div>
    @enderror
    @error('Genero')
    <div class=" alert-danger alerta1"> El genero es obligatorio</div>
    @enderror
    @error('Promedio')
    <div class=" alert-danger alerta1 mb-1"> El promedio es obligatorio</div>
    @enderror


    <input type="text" name="Nombre" placeholder="Nombre de la pelicula" class="form-control mb-2" value="{{ $datos->Nombre }}">
    <textarea  name="Descripcion" rows="6" placeholder="Descripción" class="form-control mb-2">{{ $datos->Descripcion}}</textarea>
    <input type="number" name="Año" placeholder="Año" class="form-control mb-2" value="{{ $datos->Año }}"  >
    <input type="text" name="Genero" placeholder="Genero" class="form-control mb-2" value="{{ $datos->Genero }}" >
    <input type="number" min="0" max="100" name="Promedio" placeholder="Promedio" class="form-control mb-2" value="{{ $datos->Promedio }}" >
    <div class="d-grid gap-2 col-6 mx-auto">
        <button id="btnedit"class="btn btn-dark mb-2" type="submit">Actualizar datos!</button>

      </div>






</form>






</div>

@endsection
