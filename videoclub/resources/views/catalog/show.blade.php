<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
  	@extends('layouts.master')
  	@section('content')

		<div class="row">
      <div class="col-sm-4">
        <img src="{{$arrayPeliculas->poster}}" style="width:100%"/>
      </div>
      <div class="col-sm-8">
        <h1> {{$arrayPeliculas->title}} </h1>
        <h5> Año: {{$arrayPeliculas->year}} </h5>
        <h5> Director: {{$arrayPeliculas->director}} </h5>
        <br>
        <p> <b>Resumen:</b> {{$arrayPeliculas->synopsis}} </p>
        <br>
        <p> <b>Estado:</b> @if($arrayPeliculas->rented==false)
          Pelicula Disponible<br><br>
          <a class="btn btn-default" style="background:blue;color:white;border:1px solid #D7DBDD;" type="submit">Alquilar película</a>

          <a class="btn btn-default" href="{{ url('/catalog/edit/'.$arrayPeliculas->id ) }}" role="button" style="background:orange;color:white;border:1px solid #D7DBDD;" type="submit">Editar película</a>
          <a class="btn btn-default" style="background:white;color:black;border:1px solid #D7DBDD;"" type="submit">Volver al listado</a>

          @else Pelicula actualmente alquiladas<br><br>
          <a class="btn btn-default" style="background:red;color:white;border:1px solid #D7DBDD;" type="submit">Devolver película</a>
          <a class="btn btn-default" href="{{ url('/catalog/edit/'.$arrayPeliculas->id ) }}" role="button" style="background:orange;color:white;border:1px solid #D7DBDD;" type="submit">Editar película</a>
          <a class="btn btn-default" style="background:white;color:black;border:1px solid #D7DBDD;" type="submit">Volver al listado</a>
          @endif
      </div>
    </div>
	@stop
  </body>
</html>