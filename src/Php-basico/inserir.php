<?php

$idadeList = [21, 22, 23, 24, 40, 43];

$idadeList[] = 20; //inserir item à lista

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}