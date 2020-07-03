<?php

function huy($action, array $pizda)
{
    foreach ($pizda as $klitor) {
        $sex = $action . $klitor;
        echo $sex;

    }
    if ($action == '+') {
        echo ' = ' . array_sum($pizda);
    } else {
        return 'Хуй';
    }
}

echo '<hr><br>';

function math($operator)
{
    $result = 0;
    $nums = func_get_args();

    if ($operator == '+') {
        for ($i = 1; $i < sizeof($nums); $i++) {
            $result += $nums[$i];
        }
    } elseif ($operator == '*') {
        $result = 1;
        for ($i = 1; $i < sizeof($nums); $i++) {
            $result *= $nums[$i];
        }
    } elseif ($operator == '-') {
        for ($i = 1; $i < sizeof($nums); $i++) {
            $result -= $nums[$i];
        }
    } elseif ($operator == '/') {
        $result = 1;
        for ($i = 1; $i < sizeof($nums); $i++) {
            $result /= $nums[$i];
        }
    }
    echo implode($operator,$nums) . ' = ' . $result;
}

