<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AccesoDatos;

class AccessController extends Controller
{
    public $data = new AccesoDatos();

    public function signin()
    {
        hash("sha256", "contraseña", false,);
        /* hash a la contraseña */
        $this->data->prepararConsulta("INSERT INTO usuario ");
    }

    public function login()
    {
        if (hash_equals("", "")) {
            
        }
        /*deshashear la contraseña y ver el nombre*/
    }
}
