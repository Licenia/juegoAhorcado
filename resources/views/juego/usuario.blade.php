@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
    <h1>CREAR USUARIOS</h1>
@stop

@section('content')
    <p>Ingrese nuevos usuarios </p>
 <form action="{{route('usuario.store')}}" method="post">
   @csrf 

    {{-- With prepend slot --}}
 <x-adminlte-input type="text" name="nombre" label="Nombre" placeholder="Ingresar el nombre" label-class="text-lightblue">
    <x-slot name="prependSlot">
        <div class="input-group-text">
            <i class="fas fa-user text-lightblue"></i>
        </div>
    </x-slot>
  </x-adminlte-input>

  {{-- With prepend slot --}}
  <x-adminlte-input type="email" name="email" label="Email" placeholder="test@gtest.com" label-class="text-lightblue">
    <x-slot name="prependSlot">
        <div class="input-group-text">
            <i class="fa fa-envelope text-lightblue"></i>
        </div>
    </x-slot>
  </x-adminlte-input>

  <x-adminlte-button type="submit" label="Guardar" theme="primary" icon="fas fa-save"/>
 </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop