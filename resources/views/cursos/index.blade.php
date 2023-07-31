@extends('layouts.plantilla')

@section ('title','Cursos')

@section('content')
    <h1>Bienvenidos a la pagina principal de cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a> <!-- href="cursos/create"  -->
    <ul>
        @foreach ($cursos as $item)<!--Item nombre de la variabe donde se va a ir almacenando-->
            <li>
                <a href="{{route('cursos.show',$item->id)}}">{{$item->name}}</a>    
            </li>    
        @endforeach
    </ul>
    {{$cursos->links()}}
@endSection

