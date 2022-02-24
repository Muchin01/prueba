@extends('plantilla')



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

<form form action="" method="post" >
@csrf
<h1>Inicio de sesion</h1>
<input type="text" name="usuario" id="" placeholder="Usuario"  ><br>
{!! $errors->first('usuario', '<small>:message</small><br> ')!!}

<input type="password" name="password" id="" placeholder="Password" >
{!! $errors->first('password', '<small>:message</small><br> ')!!}

<head>
    <br>
    <button>Ingresar</button><br>
</head>

</form>
@endsection