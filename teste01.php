<?php
$stdin = fopen('valores.txt', 'r');// abre o arquivo para leitura
//leitura de todos os valores como uma única variável
    while(!feof($stdin)){
        $valores = fgets($stdin);
        echo $valores;
    }
//leitura de valores por linha separados em variaveis diferentes 
    while(!feof($stdin)){
            fscanf($stdin, "%d %d", $a,$b);
            printf($a."\t".$b);
        }
//leitura de valores na primeira linha separados em variaveis diferentes 
        fscanf($stdin, "%d %d", $a,$b);
            printf($a."\t".$b);
fclose($stdin);
?>