@extends('pagina_principal')
@section('titulo', 'Fichas')
@section('cuerpo')
div
<table>
    <thead>
        <tr><h4>num ficha</h4></tr>
        <tr>jornada</tr>
        <tr>codigo programa</tr>
        <tr>codigo tipo form </tr>
        <tr>estado </tr>
        <tr>cant aprendices</tr>
        <tr>fecha inicio </tr>
        <tr>lfecha fin</tr>
    </thead>
    <tbody>
        <tr >
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </tbody>
</table>

<style>

tr{
        background-color: blue
        color:white;
    }
</style>
@endsection