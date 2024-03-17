<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 7,
    'Roberto' => 3,
    'Vinicius' => 11,
];

arsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array';
}
