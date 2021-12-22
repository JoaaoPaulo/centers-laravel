<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
        <script  src="{{url('assets/js/script.js')}}"></script>

        <title> João Paulo </title>
    </head>
    <body>

        <header id="div">
            <nav id="menu">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/contato">Contato</a>
                    </li>
                    <li>
                        <a href="/quemsomos">Quem Somos</a>
                    </li>
                    <li>
                        <a href="/generos-view">Categorias</a>
                    </li>
                    <li>
                        <a href="/produtos-view">Produtos</a>
                    </li>
                    <li class="direita">
                        <a href="#">Ajuda</a>
                    </li>
                </ul>
            </nav>
        </header>

        
        @yield('content')

        <footer>
            <p>Todos os direitos Reservados - João Paulo C Santos.</p>
        </footer>

    </body>
</html>