<?php
$a=30;
$a=10;
$a=5;

echo "<H1>Variavel indexada</H1>";
echo "<br>a = $a";
$arr= [30,10,5];// Variavel indexada, separada por indice numerico começando de "0,1,2...".
echo "<br>arr[0] = ".$arr[0];
echo "<br>arr[1] = ".$arr[1];
echo "<br>arr[2] = ".$arr[2];

$uf=["SP","RJ","MG","ES"];

echo "<br> uf = ".$uf[2];// Variavel indexada.
echo "<pre>";print_r($arr);echo "</pre>";// função onde podemos ver todo o conteudo da variavel junto de seus numeros indexados

echo "<H1>Variavel associativo</H1>";

$estudante=[// Variavel associativa, onde o podemos associar os conteudos da variavel a uma string
    "id"    => 1,
    "ra"    => 123456,
    "nome"  => "Bete",
    "curso" => "TADS"
];

echo  "<br>id: ".$estudante["id"];
echo  "<br>ra: ".$estudante["ra"];
echo  "<br>nome: ".$estudante["nome"];
echo  "<br>curso: ".$estudante["curso"];

echo "<H1>Variavel Multidimencional</H1>";

$matriz=[//variavel multidimencional é onde conseguimos fazer uma variavel indexada com linhas e colunas.
    [10,"navio",30],
    [40,"bote",60],
    ["agua",80,"aviao"]
];
echo "<br>matriz = ".$matriz[2][0];
echo "<br>matriz = ".$matriz[0][1];
echo "<br>matriz = ".$matriz[1][1];
echo "<br>matriz = ".$matriz[2][2];

echo "<pre>";print_r($matriz);echo "</pre>";

$bd=[// Variavel mutidimencional, porem agora com linhas indexadas e colunas associativas
    ["id"=>1,"nome"=>"Bete","curso"=>"TADS"],
    ["id"=>2,"nome"=>"Cleide","curso"=>"TBD"],
    ["id"=>3,"nome"=>"Beto","curso"=>"TJD"],
];

echo  "<H2>multidimencional (linhas)indexada e (colunas)associativa</H2>";

echo "<br> id =".$bd[1]["id"];
echo "<br> curso =".$bd[2]["curso"];
echo "<br> nome =".$bd[0]["nome"];

echo "<pre>";print_r($bd);echo "</pre>";

?>


