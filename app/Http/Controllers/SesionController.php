<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SesionController extends Controller
{
    // public function store()
    // {

    //     request()->validate([
    //         'usuario' => 'required',
    //         'password' => 'required'
    //     ]);

    //     return 'Datos validados';
    // }

    public function ver()
    {

        return  view('publicacion');
    }

    public function login()
    {
        if (auth()->attempt(request(['nick', 'clave'])) == false) {
            return back()->withErrors([
                'message' => 'Datos incorrectos'
            ]);
        }


        return Redirect()->route('publicacion');
    }
}
