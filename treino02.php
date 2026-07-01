<H1>Estruturas de looping </H1>

<?php

$bomba = 10;

While($bomba >= 1 ) {
    echo $bomba, "<br>";
    $bomba--;
}
echo "FOGOOO!!";

?>

<hr>

<?php

$secreto = 30;
$tentativa = 1;
$contador = 1;

while($tentativa != $secreto) {
    echo $tentativa . "<br>";
    $tentativa++;
    $contador++;
}
echo $tentativa . "<br><br>";
echo "Acertei em " . $contador  . " tentativas!";

?>

<hr>

<h1> Atividade 03</h1>
    

<?php

$a = 0;
$b = 1;
$contador = 0;

while ($contador < 10) {
    echo $a . "<br>";
    
    $temp = $a;
    $a = $b;
    $b = $temp + $b;
    
    $contador++;
}

?>

<h1>Soma numeros impares</h1>

<?php

$soma = 0;
$i = 1;
 
while ($i <= 100) {
    if ($i % 2 != 0) {
        echo $i, "<br>";
        $soma += $i;
        $i++; 
    }
    
    $i++;
        
};
echo "<br>";
echo "A soma dos numeros é: ", $soma;

?>

<H1>FizzBuzz</H1>

<?php

for($p = 1; $p <= 30; $p++) {
    if($p % 3 == 0 && $p % 5 == 0) {
        echo "FizzBuzz, ";
    }
    elseif($p % 3 == 0 && $p % 5 != 0) {
        echo "Fizz, ";
    }
    elseif($p % 3 != 0 && $p % 5 == 0) {
        echo "Buzz, ";
    }
    else {
        echo $p, ", ";
    }

    }
?>

<H1>Percorrer um array</H1>

<?php

$numeros = [43, 7, 98, 62, 3, 77, 29];

$maior = $numeros[0]; // começa assumindo que o primeiro é o maior
$menor = $numeros[0]; // e também o menor
$contmaior = 0;
$contmenor = 0;

for ($i = 1; $i < count($numeros); $i++) {
    if ($numeros[$i] > $maior) {
        $maior = $numeros[$i]; // encontrou um maior, atualiza
        $contmaior = $i;
    }
    if ($numeros[$i] < $menor) {
        $menor = $numeros[$i]; // encontrou um menor, atualiza
        $contmenor = $i;
        }
}

echo "O numero maior é ", $maior, "<br>";
echo "Quantidade de looping até o maior: ", $contmaior, "<br>";  
echo "E o menor é ", $menor, "<br>";
echo "Quantidade de looping até o menor: ", $contmenor, "<br>";
?>

<?php
echo "<hr>";

$nomes=["Fulano","Beltrano","Sicrano", "Astrogildo"];
$total = count($nomes);

echo "Foram encontradas $total nomes no array.<br>";
echo "Primeiro valor do array: ".$nomes[0]."<br>";
echo "Último valor do array: ".$nomes[count($nomes)-1];
echo "<hr>";
for($i=0;$i<count($nomes);$i++){
	echo $nomes[$i]."<br>";
}

$compras = ['arroz', 'feijão', 'macarrão', 'azeite', 'sal'];
    

?>