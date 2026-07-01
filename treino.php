<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>

<H1>Atividade 01</H1>

<?php

$compras = ["arroz", "feijão", "macarrão", "azeite", "sal"];
$numero = 1;

for($i = 0;$i < count($compras);$i++) {
    echo $numero . "° " . $compras[$i] . "<br>";
    $numero++;
}

?>

<H1>Atividade 02</H1>

<?php

$notas = [7.5, 8.0, 6.5, 9.0, 10.0];
$soma = 0;

foreach ($notas as $nota) {
    $soma = $soma + $nota;
    };

$media = $soma / count($notas);


echo "Todas as notas deu um total de " . $soma . "<br>";
echo "A média de notas foi: " . $media;

?>


<H1>Atividade 3</H1>


<?php

$idades = [15, 22, 17, 30, 12, 25, 18];

echo "Maiores de idade: ";

foreach ($idades as $idade) {
    if($idade >= 18) {
        $maiores[] = $idade;
    }
}
echo implode(", ", $maiores);

?>

<H1>Atividade 04</H1>

<?php

$pessoa = [
    'nome'     => 'Lucas Oliveira',
    'idade'    => 27,
    'cidade'   => 'Campinas',
    'profissao'=> 'Desenvolvedor'
];


foreach($pessoa as $pessoas => $valor) {
    echo ucfirst($pessoas) . ": " . $valor . "<br>";
}


?>

<H1> Atividade 05</H1>

<?php

$estoque = [
    'caneta'   => 12,
    'caderno'  => 3,
    'borracha' => 8,
    'régua'    => 1,
    'lápis'    => 20
];

foreach($estoque as $est => $valor) {
    if ($valor < 5 ) {
        echo $est . ":" . " Estoque baixo (" . $valor . " unidades)<br>";
    }

}

