@extends('layouts.plantilla')

@section ('title','Home')

@section('content')
    <h1>En esta pagina podrás crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf <!-- Crea un token para enviar el formulario-->

        <label for="name">Name
        <input type="text" name="name" id="" placeholder="Ingrese nombre" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label for="email">email
        <input type="text" name="email" placeholder="Ingrese email" {{old('email')}}>
        </label>
        @error('email')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <input type="submit" value="Submit">
    </form>
@endSection

