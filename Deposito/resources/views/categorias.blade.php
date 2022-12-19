@extends('template')

@section('content')

<div class='Categorias-bebidas'>
    <div class="categoria-name">
        <h2>Cerveza</h2>
        <a href="{{route('categorias','Cerveza')}}"><img src="https://raw.githubusercontent.com/Kevin-Galarza77/Kevin-Galarza77.github.io/Dise%C3%B1o-de-Interfaces/Deposito-de-Cerveza/dist/assets/cerveza.faccebb1.jpg" alt="" />
        </a>
    </div>
    <div class="categoria-name">
        <h2>Licor</h2>
        <a href="{{route('categorias','Licor')}}"> <img src="https://raw.githubusercontent.com/Kevin-Galarza77/Kevin-Galarza77.github.io/Dise%C3%B1o-de-Interfaces/Deposito-de-Cerveza/dist/assets/licor.c7fd0bf1.jpg" alt="" />
        </a>
    </div>
</div>

@endsection