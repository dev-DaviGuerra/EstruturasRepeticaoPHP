<?php
// Exercícios com WHILE

// 1. Crie um script para escrever a tabuada do 5 (5x1 a 5x10) com WHILE

$tabuada = 1;
while($tabuada <= 10) {
    echo "5x$tabuada =". (5 * $tabuada) ."<br />";
    $tabuada++;
}

// 2. Crie um script para escrever a soma de todos os numeros de 1 a 20 com while

$contador = 1;
$soma = 0;
while($contador <= 20) {
    $soma += $contador;
    $contador++;
}
echo "A soma é: $soma";
echo "<br />";


// Exercicios com FOR


// 1. Crie um script que escreva todos os números de 1 a 10 com for

$valor = 1;

for($valor = 1; $valor <= 10; $valor++) {
    echo "Números de 1 a 10: $valor";
    echo "<br />";
}

// 2. Escreve um script PHP que desenhe meio triângulo com asteriscos (*)
// de 10 linhas, exemplo:
//*
//** 
//*** 
// (continua...)

$linhas = 1;
$asteriscos = 1;

for($linhas = 1; $linhas <=10; $linhas++){
    for($asteriscos = 1; $asteriscos <= $linhas; $asteriscos++) {
        echo "*";
    }
    echo "<br>";
}

// Exercicios com FOREACH

// 1. Crie um array de números ([1, 2, 3, 4, 5]) e use um loop foreach
// para somar todos os elementos do array e imprimir o resultado

$numeros = [1, 2, 3, 4, 5];
$resultado = 0;
foreach ($numeros as $soma) {
    $resultado += $soma;
}
echo "Resultado = $resultado";
echo '<br/>';

// 2. Crie um array associativo de produtos com nome e preço
// (por exemplo, ["Produto1" => 10, "Produto2" => 20, "Produto3" => 30])
// e use um loop foreach para imprimir o nome e o preço de cada produto

$loja = ["Lápis" => 5, "Borracha" => 6, "Caneta" => 9];
$subtotal = 0;
foreach($loja as $nome => $preço) {
    echo "Nome = $nome, preço = $preço <br />";
    $subtotal += $preço;
}
echo "Subtotal: R$ $subtotal";