@extends('layouts.plantilla')

@section ('title','Home')

@section('content')
    <h1>bienvenido al curso papi {{$curso->name}}</h1>
    <a href="{{Route('cursos.index')}}">Regresar a cursos</a>
    <br>
    <a href="{{Route('cursos.edit', $curso)}}">Editar curso</a>
    <p><strong>Categoria: </strong>{{$curso->id}}</p>
    <p>{{$curso->email}}</p>
@endSection

