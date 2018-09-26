<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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

</body>
</html>