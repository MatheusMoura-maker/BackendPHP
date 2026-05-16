

<?php
$nomes=["Fulano","Beltrano","Sicrano", "Astrogildo","Bete"];
$total = count($nomes);// 5 - Count serve para contador a quantidade de indices dentro de uma variaval array
echo "Foram encontradas $total nomes no array.<br>";
echo "Primeiro valor do array: ".$nomes[0]."<br>";
echo "Último valor do array: ".$nomes[count($nomes)-1];//bete   
echo "<hr>";
for($i=0;$i<count($nomes);$i++){
	echo $nomes[4]."<br>";
}
?>

<hr>

<?php
$uf=["SP","RJ","ES","MG"];
echo "<pre>";print_r($uf);echo "</pre>";
array_push($uf, "TO");// Comando com o objetivo de incluir um indice dentro de uma variavel array
array_push($uf, "BA");
array_push($uf, "RN");
array_push($uf, "PR");
array_pop($uf);// Apaga o ultimo valor do array
echo "<pre>";print_r($uf);echo "</pre>";
sort($uf);
echo "<pre>";print_r($uf);echo "</pre>";
?>

<?php

$estudante=[
    "id"    => 1,
    "nome"  => "bete",
    "nota"  =>9.5
];

foreach($estudante as $pos=>$valor){
    echo "<br>$pos: $valor";

};
?>
<hr>

<?php

$multi=[
    [10,20,30]
    [10,20,30]
    [10,20,30]
];

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $multi[$i][$j];
        echo <br>
    }
}




