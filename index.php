<?php
use Plastinin\QuadEquation;
require_once "Plastinin\LineEquation.php";
require_once "Plastinin\QuadEquation.php";
require_once "Plastinin\PlastininException.php";
    $a = new QuadEquation();
    $a->solve(1,2,-1);
    $b = new \Plastinin\LineEquation();
    $b->lineEquation(2,-1);
