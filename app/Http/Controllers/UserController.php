<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function insertt(Request $request)
    {
        request()->validate([
            'nombre1' =>  'required',
            'nombre2' => 'required',
            'apellido1' =>  'required',
            'apellido2' =>  'required',
            'nick' =>  'required',
            'clave' =>  'required',
        ]);

        $query = DB::table('usuario')->insert([

            'nombre1' => $request->input('nombre1'),
            'nombre2' => $request->input('nombre2'),
            'apellido1' => $request->input('apellido1'),
            'apellido2' => $request->input('apellido2'),
            'nick' => $request->input('nick'),
            'clave' => $request->input('clave'),
            'rol' => $request->input('rol')
        ]);

        return Redirect()->route('home');
    }
}
