@extends('tema.app')

@section('title','Nueva Tarea')

@section('contenido')
<h3>
    Registrar Tarea
</h3>
<form action="{{route('tarea.store')}}" method="get">
   <x-tarea-form-body/>
</form>
<!-- /resources/views/post/create.blade.php -->
 
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->
@endsection
