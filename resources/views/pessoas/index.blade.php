<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desenvolvendo com Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Ação</a>
                <a class="dropdown-item" href="#">Outra ação</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Algo mais aqui</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Desativado</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>

    <br><br>

    <h1>Teste</h1> 

    {{$pessoas}}   

    <br><br>
    
    @foreach($pessoas as $pessoa)
        {{$pessoa->nome}} 
        <br>
        @foreach($pessoa->telefone as $telefone)
            {{$telefone->fone}}
        @endforeach
        <br><br>
    @endforeach

    <script src="{{ asset('js/app.js') }}"></script>

<!--
    https://getbootstrap.com.br/docs/4.1/components/navbar/
    http://www.yeebaplay.com.br/blog/2017/02/como-inserir-cssjs-em-seu-projeto-laravel/
    https://magazine.softerize.com.br/tutoriais/php/laravel/templates-com-blade-e-bootstrap-laravel
    Video:
    https://www.youtube.com/watch?v=uN-etpmWeZk&list=PL_NREvI7nx7t0JZyv4JB4SmGkReVED55x&index=8&t=240s
-->

</body>

</html>
