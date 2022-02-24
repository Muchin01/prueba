@extends('plantilla')
@section('title','Crear Cuenta')
@section('content')

<style>
    form{
        display: flex;
     flex-direction: column;
     flex-wrap: wrap;
      margin-left:20%;
      //margin:10% 10% 10% 10%;
    }

    input, button{
        width: 20%;
    }
   
</style>
<br>

<form action="{{ route('insertt') }}" method="post">
@csrf
<h1>Nuevo Usuario</h1><br>
<input type="text" name="nombre1" id="" placeholder="nombre1" value="{{ old('nombre1')}}" ><br>
{!! $errors->first('nombre1', '<small>:message</small><br> ')!!}

<input type="text" name="nombre2" id="" placeholder="nombre2" value="{{ old('nombre2')}}" ><br>
{!! $errors->first('nombre2', '<small>:message</small><br> ')!!}

<input type="text" name="apellido1" id="" placeholder="apellido1" value="{{ old('apellido1')}}" ><br>
{!! $errors->first('apellido1', '<small>:message</small><br> ')!!}

<input type="text" name="apellido2" id="" placeholder="apellido2" value="{{ old('apellido2')}}" ><br>
{!! $errors->first('apellido2', '<small>:message</small><br> ')!!}


<input type="text" name="nick" id="" placeholder="nick" value="{{ old('nick')}}" ><br>
{!! $errors->first('nick', '<small>:message</small><br> ')!!}

<input type="password" name="clave" id="" placeholder="clave" value="{{ old('apellido2')}}" ><br>
{!! $errors->first('clave', '<small>:message</small><br> ')!!}

<input type="text" name="rol" id="" placeholder="rol" value="{{ old('rol')}}" ><br>
{!! $errors->first('rol', '<small>:message</small><br> ')!!}

<head>
    <br>
    <button>Registrar</button><br>
</head>
</form>
@endsection