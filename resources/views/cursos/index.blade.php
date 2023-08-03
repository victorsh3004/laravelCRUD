@extends('layouts.plantilla')

@section ('title','Cursos')

@section('content')
    <h1>Bienvenidos a la pagina principal de cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a> <!-- href="cursos/create"  -->
    <ul><!--Item nombre de la variabe donde se va a ir almacenando-->
        @foreach ($cursos as $item)
            <li>
                <a href="{{route('cursos.show',$item)}}">{{$item->name}}</a>    <!--Tambien solo se puede colocar $item y laravel identidica el id automaticamente-->
                <br>
                <!--{{route('cursos.show', $item)}}-->
            </li>    
        @endforeach
    </ul>
    {{$cursos->links()}}
@endSection

