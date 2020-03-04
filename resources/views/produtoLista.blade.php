@extends('layout')
<?php
$produtos=[
    //'Bicicleta',
   // 'Ovo',
    //'Antialergico',
   // 'Meia'
];
//Usuario logado no sistema:
$user="Victor";
?>
@section('conteudo')
<h1>eu sou um novo conteudo</h1>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Produtos</title>
</head>
<body>
    <header>
    <?php //if(isset($user)):?>
        <nav>
            <a href="/logout">Logout</a>
        </nav>
<?php //endif;?>
    </header>
    <table>
        <thdead>
            <tr>
                <th>Nome</th>
            </tr>
        </thdead>
        <tbody>
        <!-- <?php //foreach($produtos as $produto) : ?> -->
        @forelse($produtos as $produto)
            <tr>
                <!-- <td><?php //echo $produto;?></td> -->
                <td>{{$produto}}</td>
            </tr>
            <?php //endforeach?>
            @empty
            <tr>
                <td>Nenhum produto encontrado</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>