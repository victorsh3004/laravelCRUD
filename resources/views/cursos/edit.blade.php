@extends('layouts.plantilla')

@section ('title','Cursos edit')

@section('content')
    <h1>Editar un curso</h1>
    <form action="{{route('cursos.update',$curso)}}" method="post">
        @csrf <!-- Crea un token para enviar el formulario-->

        @method('put')<!-- Para indicar a laravel que el  metoo es put-->

        <label for="name">Name
        <input type="text" name="name" id="" placeholder="Ingrese nombre" value="{{$curso->name}}">
        </label>
        <br>
        @error('name')
            
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="email">email
        <input type="text" name="email" placeholder="Ingrese email" value="{{$curso->email}}">
        </label>
        @error('email')
            <br>
            <small>*{{$message}}</small>
            
        @enderror
        <br>
        
        <input type="submit" value="Actualizar formulario">
    </form>
@endSection

