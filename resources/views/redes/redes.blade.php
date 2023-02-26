@extends('pagina_principal')
@section('titulo', 'Redes')
@section('cuerpo')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="flex justify-end" style="font-size: 30px; font-weight: bold; margin:15px 500px;">REDES</title>
</head>
<body>
<div class="px-50 py-100 rounded-lg mb-8 relative">
    <div class="flex justify-end">
        <button type="button" class="btn btn-outline-success"  style="background:#469C00; margin:15px;">
            <a href="{{route('create_red')}}" class="text-indigo-600">AÑADIR RED</a>
        </button>
    </div>

    @foreach($mostrar as $a)
    <div class="cards">
        <div class="card" style="width: 20rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$a->nombre}}</h5>
                <a href="#" class="btn btn-primary"  style="background:#469C00; width:98%; ">Ir</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;1,300&display=swap');

:root{
    --colorprincipal:#469C00;
    --colorprincipal2:#8FC73E;
    --colorprincipal3:#101728;
    --colorfondo:#F4F4F4;
    --colorfondo2:#AFAFAF;
    --fuente-principal: 'Roboto', sans-serif;

}

*
{
    box-sizing: border-box;
}

body
{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background: var(--colorfondo);
}

a{
    font-weight: bold;
    padding: 15px 0 0 5px;
    font-size: 18px;
    text-transform: uppercase;
    color: var(--colorprincipal3);
    float:left;
}

.cards{
    
    float:right;
    margin:0.5rem;
}
</style>
</html>



@endsection