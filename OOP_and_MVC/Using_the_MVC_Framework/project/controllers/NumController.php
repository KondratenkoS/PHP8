<?php
namespace Project\Controllers;
use Core\Controller;

/*
    Сделайте контроллер NumController, а в нем - действие sum. Пусть это действие
    обрабатывает адреса следующего вида: /nums/:n1/:n2/:n3/, где параметрами 
    будут некоторые числа. Сделайте так, чтобы на экран выводилась сумма переданных чисел.
*/

class NumController extends Controller{
    public function sum($nums)
    {
        echo array_sum($nums);
    }
}