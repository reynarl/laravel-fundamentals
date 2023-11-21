<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('prueba', compact('cursos')); //paso la variable cursos entre comillas con la funcion compact
    }

    public function show(Curso $curso)
    {
        // $curso = Curso::find($id);
        // return $curso;
        return view('showCourses', compact('curso')); // retornamos la vista con view() introduciendo el nombre del archivo .php
    }

    public function create()
    {
        return view('createCourse');
    }

    public function store(Request $request)
    {
        //VALIDACIONES: podemos incluirlas dentro de un form request.
        //con validate() validamos los campos para ser requeridos
        // $request->validate([
        //     'name' => 'required',
        //     'category' => 'required',
        //     'description' => 'required'
        // ]);
        // return $request->all(); //vemos lo que se guarda en la variable request

        //CREAR CURSO:
        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // $curso->save();

        //CREAR CURSO CON ELOQUENT DE LARAVEL
        //la funcion create(), update() recibe un objeto por lo tanto unicamente le pasamos $request->all() que contiene todo el objeto.
        Curso::create($request->all());
        return redirect()->route('cursos.index'); // lo redirigimos con la funcion route (introduciendo nombre de la ruta que establecimos en web.php)
    }

    public function edit(Curso $curso) //instanciamos el método curso para obtener los datos sin necesidad de usar el find de esta forma traemos los datos desde la url
    {
        // $curso = Curso::find($id);
        return view('update', compact('curso'));
        // return $curso;
        // return $id
    }
    public function update(Curso $curso, Request $request)
    {
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // $curso->save();

        $curso->update($request->all());


        // return view('showCourses', compact('curso'));
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
