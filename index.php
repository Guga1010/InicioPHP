<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias); --> Imprime na tela a variável categorias

$nome = 'Eduardo';
$idade = 8;
//var_dump($nome); --> Mostra o tipo da variável nome e a quantidade
//var_dump($idade); --> Mostra o tipo da variável idade 

if($idade >= 6 && $idade <= 12)
{
    // echo 'infantil'; -->Imprime na tela o texto infantil
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        echo "O nadador ".$nome. " compete na categoria ".$categorias[$i];
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        echo "O nadador ".$nome. " compete na categoria adolescente";
    }
}
else
{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        echo "O nadador ".$nome. " compete na categoria adulto";
    }
}