<?php

require __DIR__ . "/vendor/autoload.php";

use Plastinin\QuadEquation;
use Plastinin\PlastininLog;

try{
    PlastininLog::log("Версия программы ". file_get_contents('./version'));
    echo "Введите 3 параметра a, b и с\n\r";
    $a=readline("A = \n\r");
    $b=readline("В = \n\r");
    $c=readline("С = \n\r");
    $equation = "Уравнение ".$a."x^2+(".$b.")x+(".$c.")=0";
    PlastininLog::log($equation);
    $e = new QuadEquation();
    $r="Корни уровнения: ".implode(", ",$e->solve($a,$b,$c));
    PlastininLog::log($r);
}

catch(Plastinin\PlastininException $e){
    PlastininLog::log($e->getMessage());
}
PlastininLog::write();