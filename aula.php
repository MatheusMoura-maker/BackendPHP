<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo "<h1>While</h1>";

$i=5;

while($i>-6){
    echo " $i";
    $i--;
};
/*
1) valor inicial?
0
2) condição?
$i<5
3) contador?
$i++
4) quantas vezes o looping foi executado?
5 vezes 
5) valor que torna a condição como falsa?
numero 5

1)11
2)$i<15 / $i<=14
3)$i++
4)4 vezes
5)numero 15

saida: 4 3 2 1 0 
1)4
2)$i>-1
3)$i--
4)5
5)-1


saida: 0 2 4 6 8 10
1)0
2)$i<=10
3)$i+=12
4)6
5)12
*/

echo "<H1>DO WHILE</H1>";

$i=0;

do{
    echo " $i";
    $i++ ;

}while($i<5);

/* 


saida:
1) 7
2) $i<5
3) $i++
4) 1
5) 8

*/

echo "<H1> FOR </H1>";

for($i=0;$i<5;$i++) echo "$i ";



echo "<h1>Looping aninhado</h1>";

for($t=0;$t<11;$t++){//looping externo
    for($i=0;$i<11;$i++){//looping interno/externo
        for($j=0;$j<11;$j++){//looping interno
            echo "$t $i $j<br>";
        }
    }
}
/*




*/

?>


</body>
</html>