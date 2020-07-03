<?php

function hz()
{
    $array = ['colors' => ['1' => 'yellow', '2' => 'black', '3' => 'white'], 'cars' => ['1' => 'Audi', '2' =>
        'BMW', '3' => 'Honda']];
    foreach ($array as $key => $value) {
        echo '<p>' . implode(' ,', $value) . '</p>';
    }
}


function calc($action, array $num)
{
    $str = 0;
    $expression = implode($action, $num);
    foreach ($num as $value) {

        switch ($action) {
            case '+':
                $str += $value;
                break;
            case '-':
                $str -= $value;
                break;
            case '*':
                $str *= $value;
                if ($str == 0) {
                    $str = $value;
                } else {
                    $str *= $value;
                }
                break;
            case '/':
                $str /= $value;
                if ($str == 0) {
                    $str = $value;
                } elseif ($str /= 0) {
                    echo ' На ноль делить нельзя ';
                } else {
                    $str /= $value;
                }
                break;

        }

    }
    echo $expression . ' = ' . $str;



}