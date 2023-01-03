@extends('tema.app')

@section('title','Nueva Tarea')

@section('contenido')
<h3>
    Editar Tarea <small>{{$tarea->nombre}}</small>
</h3>
<form action="{{route('tarea.update',$tarea)}}" method="post">

    @method('put')
    <x-tarea-form-body :tarea='$tarea'/>
</form>

 
<!-- Create Post Form -->
@endsection
