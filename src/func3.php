<?php


function table($num, $num2)
{
    echo '<table border="2">';

    for ($i = 1; $i <= $num; $i++) {
        echo '<tr><td>' . $i . '</td>';
        for ($e = 2; $e <= $num2; $e++) {
            if ($num == $num2) {
                echo '<td>' . $i * $e . '</td>';
            }else{
                return 'nothing';
            }
        }
    }


    echo '</table>';
}

