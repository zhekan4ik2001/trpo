<?php
use Plastinin\QuadEquation;
use Plastinin\PlastininLog;
require_once "core\EquationInterface.php";
require_once "core\LogInterface.php";
require_once "core\LogAbstract.php";
require_once "Plastinin\LineEquation.php";
require_once "Plastinin\QuadEquation.php";
require_once "Plastinin\PlastininLog.php";
require_once "Plastinin\PlastininException.php";
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