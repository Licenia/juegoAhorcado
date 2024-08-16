@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
    <h1>ADMINISTRACION DE PALABRAS</h1>
@stop

@section('content')
    <p>Ingrese las palabras , puede modificarlas e eliminarlas </p>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Añadir una nueva Palabra</h5>
   <form action="{{route('palabra.store')}}" method="post">
    @csrf
       <div class="form-group">
        <br />
        <label for="">Categoria:</label>
      <select name="">
        @foreach ($palabra as $palabra)
        <option value="">{{ $palabra->categorias->nombre ?? 'Sin categoría' }}</option>

        @endforeach
      </select>
    
        <label for=""> Palabra:</label>
         <input type="text" name="nombre" class="form-control" required>
        </div>
    <button type="submit" class="form-control">Guardar</button>
   </form>
   
   @if (session('success'))
   <div class="alert alert-sucess" role="alert">
    {{ session('success')}}
    @endif 
   </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop