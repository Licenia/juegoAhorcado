@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
    <h1>Panel de control</h1>
@stop

@section('content')
    <p>Bienvenido</p>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop