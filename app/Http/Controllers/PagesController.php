<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function registro()
    { return view('registrar');}

    public function lista($datos=null)
    {
     /* $datos =App\Pelicula::all();          este sirve para mostrar todos los elementos de la base de datos guardados en la variable*/
     $datos =App\Pelicula::paginate(3);  /* Este sirve para elegir cuantos elementos mostrar */
        return view('lista', compact('datos'));
    }
    public function detalle($id){

        $pelicula = App\Pelicula::findOrFail($id);
        return view('peliculas.detalles',compact('pelicula'));
    }

    public function crear(Request $request)
    {

     $request->validate([

        'Nombre' => 'required',
        'Descripcion' => 'required',
        'Año' => 'required',
        'Genero' => 'required',
        'Promedio' => 'required'

     ]);


    $peliculaNueva = new App\Pelicula;
    $peliculaNueva->Nombre=$request->Nombre;
    $peliculaNueva->Descripcion=$request->Descripcion;
    $peliculaNueva->Año=$request->Año;
    $peliculaNueva->Genero=$request->Genero;
    $peliculaNueva->Promedio=$request->Promedio;

    $peliculaNueva->save();

    return back()->with('mensaje', 'Pelicula agregada');


    }

    public function editar($datos=null)
    {

        $datos =App\Pelicula::all();  /*        este sirve para mostrar todos los elementos de la base de datos guardados en la variable*/
      /*  $datos =App\Pelicula::paginate(3);  /* Este sirve para elegir cuantos elementos mostrar */
        return view('editar', compact('datos'));
    }

    public function modificar($id)
    {
        $datos = App\Pelicula::findOrFail($id);
        return view('peliculas.modificar',compact('datos'));
    }

    public function update(Request $request,$id)
    {
        $peliculaUpdate = App\Pelicula::findOrFail($id);
        $peliculaUpdate->Nombre = $request->Nombre;
        $peliculaUpdate->Año = $request->Año;
        $peliculaUpdate->Descripcion = $request->Descripcion;
        $peliculaUpdate->Genero = $request->Genero;
        $peliculaUpdate->Promedio = $request->Promedio;

        $peliculaUpdate->save();

        return redirect('editar')->with('mensaje1', 'Pelicula Actualizada correctamente!');
    }

    public function delete(Request $request, $id)
    {
        $peliculaDelete = App\Pelicula::findOrFail($id);
        $peliculaDelete->delete();

        return back()->with('mensaje3', 'Pelicula Eliminada!');

    }
}
