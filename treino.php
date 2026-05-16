<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>

<H1>Impar ou Par</H1>

<?php

$n=1452;

if($n % 2 == 0) {
    echo "O numero ", $n, " é par";
}
elseif($n % 2 == 1) {
    echo "O numero ", $n, " é impar";
}
else {
    echo "Ação não identificada"; 
}
?>

<hr>

<H1>Maior de idade</H1>


<?php

$i=15;

if($i >= 18) {
    echo "Sua idade é de ", $i;
    echo "<br>Parabens anta, ja pode votar";
}
elseif($i <= 18) {
    echo "Sua idade é de ", $i;
    echo "<br>Você não pode votar!";
}
else {
    echo "Numero não indetificado!";
};

?>

<hr>

<H1>Negativo ou positivo</H1>


<?php 

$y = 0;

if ($y < 0) {
    echo "Numero negativo";
}
elseif ($y > 0)  {
    echo "Numero Positivo";
}
elseif ($y == 0) {
    echo "Numero zero"; 
}
else {
    echo "Numero não identificado";
}


?>
<hr>

<H1>Classificação de notas</h1>

<?php

$nota = 10;

if($nota >= 9 && $nota <= 10) {
    echo "Exelente nota, Parabens!!";
    Echo "<br>Nota " . $nota;
}
elseif($nota >= 7 && $nota <= 8.9) {
    echo "Bom, pode melhorar!";
    echo "<br>Nota " . $nota;
}
elseif($nota >= 5 && $nota <= 6.9) {
    echo "Regular, Tem que melhorar";
    echo "<br>Nota " . $nota;
}
elseif($nota >= 0 && $nota <= 4.9) {
    echo "Reprovado, Deu ruim!!";
    echo "<br>Nota " . $nota;
}
else {
    echo "Nota invalida";
}



?>
