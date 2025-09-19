<?php

use App\Models\Receta;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    /* agregar registro con eloquent */
    $receta = new Receta();

    $receta->nombre = "milanesa";
    $receta->descripcion = "carne filetada condimentada y rebozada en pan rayado";
    $receta->pasos = "";
    $receta->ingredientes = "carne";
    $receta->rutaFoto = "";
    $receta->tiempo = 60;
    $receta->eliminado_el = null;

    $receta->save();

    return $receta;

    /* 
        modifcar un registro

        encontrar el elemento a modificar
        $receta = Receta::where(titulo", "milanesa")->first();

        modificar los atributos

        $receta->eliminado_el = now();


        obtener mas de un registro
        $recetas = Receta::all();
        o
        $recetas = Receta::where("id","<","2")->get();
        $recetas = Receta::orderBy("id","desc o asc")->get();
        limittar la cantidad de registro ->take(2) equivalente a limit


        eliminar
        buscar  el elemento por el id
        $receta -> Receta::find(1);
        $receta->delete();
    */
});
