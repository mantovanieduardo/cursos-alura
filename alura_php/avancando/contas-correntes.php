<?php

$conta1 = [
    'nome' => 'Mantovani',
    'salário' => 2500
];
$conta2 = [
    'nome' => 'Caldat',
    'salário' => 2000
];
$conta3 = [
    'nome' => 'Gustavo',
    'salário' => 15000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i=0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['nome'] . PHP_EOL;
}


?>