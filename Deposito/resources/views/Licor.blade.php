@extends('template')

@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner">
        <div class="carousel-item active"  >
            <img src="https://raw.githubusercontent.com/Kevin-Galarza77/Kevin-Galarza77.github.io/Dise%C3%B1o-de-Interfaces/Deposito-de-Cerveza/dist/assets/whisky.fa861988.jpg" class="d-block" alt="..." />
        </div>
        <div class="carousel-item" >
            <img src="https://raw.githubusercontent.com/Kevin-Galarza77/Kevin-Galarza77.github.io/Dise%C3%B1o-de-Interfaces/Deposito-de-Cerveza/dist/assets/tequila.7cd4d396.jpg" class="d-block" alt="..." />
        </div>
        <div class="carousel-item">
            <img src="https://raw.githubusercontent.com/Kevin-Galarza77/Kevin-Galarza77.github.io/Dise%C3%B1o-de-Interfaces/Deposito-de-Cerveza/dist/assets/otros.eebaa2e4.jpg" class="d-block" alt="..."  />
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

@endsection