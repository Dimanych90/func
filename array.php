<?php

$users = ['facebook' =>
    ['John', 'Bella', 'Lisa'],
    'Vk' => ['Коля', 'Юля', 'Леша'],
    'another sites' =>
        ['Head Hunter' => ['George', 'Peter', 'Michal'],
            'SuperJob' => ['Jessy', 'Mila', 'Lina']]
];

function nameArray($arrayNames)
{
    $result = '';

    foreach ($arrayNames as $name => $value) {
        if (is_array($value)) {
            $result .= nameArray($value);
        }
        $result .= $value . PHP_EOL;

    }
    print_r($result);
}

nameArray($users);

echo PHP_VERSION;

function testTable($num, $num2)
{
    echo '<table border="3">';

    for ($i = 1; $i <= $num; $i++) {
        echo '<tr><td>' . $i . '</td>';
        for ($e = 2; $e <= $num2; $e++) {
            if (is_int($num) && is_int($num2)) {
                echo '<td>' . $i * $e . '</td>';
            }
             else {
                return 'nobody gives the shit';
            }
        }
    }
    echo '</table>';
}