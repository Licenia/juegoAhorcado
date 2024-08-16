@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
    <h1>ADMINISTRACION DE CATEGORIAS</h1>
@stop

@section('content')
    <p>Ingrese las categeorias , puede modificarlas e eliminarlas </p>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Añadir una categoria</h5>
   <form action="{{route('categoria.store')}}" method="post">
    @csrf
       <div class="form-group">
        <br />
        <label for=""> Nombre:</label>
         <input type="text" name="nombre" class="form-control" required>
        </div>
    <button type="submit" class="form-control">Guardar</button>
   </form>
   @if (session('success'))
   <div class="alert alert-sucess" role="alert">
    {{ session('success')}}
    @endif 
   </div>
</div>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop