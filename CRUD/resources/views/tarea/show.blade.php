@extends('tema.app')

@section('title','Nueva Tarea')

@section('contenido')
<h3>
     {{$tarea->nombre}} 
</h3>
<ul>
    <li>Finalizada  : <strong> {{$tarea->finalizada}}</strong></li>
    <li>Urgencia  : <strong> {{$tarea->urgencia()}}</strong></li>
    <li>Fecha limite  : <strong> {{$tarea->fecha_limite}}</strong></li>
    <li>Finalizada  : <strong> {{$tarea->descripcion}}</strong></li>
</ul>

<div class="row">
    <form action="{{route('tarea.destroy',$tarea)}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-danger m-3" type="submit">Elminar</button>

    </form>    
</div>
@endsection
