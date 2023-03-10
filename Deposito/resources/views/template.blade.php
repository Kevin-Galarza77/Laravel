<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/722/722502.png">
    <title>Déposito de Cerveza "La Nenita"</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">


</head>

<body>
    <div class='Contenido'>
        <nav class="encabezado">
            <a href="{{route('home')}}" class='display-5 fs-3 m-2 nav-item text-light m-3 link-secondary'>
                DÉPOSITO DE CERVEZA "LA NENITA"
            </a>
            <div class="d-flex justify-content-center align-items-center flex-wrap mx-3">
                <a href="{{route('home')}}" class='display-5 fs-5 m-2 nav-item text-light link-secondary'>
                    Categorias
                </a>
                <a href="{{route('categorias','Cerveza')}}" class='display-5 fs-5 m-2 nav-item text-light link-secondary'>
                    Cerveza
                </a>
                <a href="{{route('categorias','Licor')}}" class='display-5 fs-5 m-2 nav-item text-light link-secondary'>
                    Licor
                </a>
                <a href="{{route('entrar')}}" class='display-5 fs-5 m-2 nav-item text-danger link-warning'>
                    Salir
                </a>
            </div>


        </nav>
        <div class="outlooc">
            @yield('content')
        </div>
        <footer class='Redes-Sociales'>
            <ul class="redes">
                <li><a href="https://www.facebook.com/Dep%C3%B3sito-De-Cerveza-La-Nenita-2293355877581171" target="_blank "><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://goo.gl/maps/EnVGZPGJizqwh2mx5" target="_blank "><i class="fa-solid fa-location-dot"></i></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=59381848821" target="_blank "><i class="fa-brands fa-whatsapp"></i></a></li>
            </ul>
            <p>Derechos reservados &copy; Déposito de Cerveza "La Nenita"</p>
        </footer>
    </div>
</body>

</html>