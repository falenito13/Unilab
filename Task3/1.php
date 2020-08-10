<?php
function Unilab($s): string
{
    $k = 0;
    for ($i = 0; $i < strlen($s); $i++) {


        if (( $s[$i] > 58 && $s[$i] < 70 ) || ( $s[$i] > 107 && $s[$i] < 115 )) {
            $k++;
        }
        if ($k === strlen($s)) {
            echo "<h1> სახალისოა </h1>";
        } else {
            echo "<h1> არ არის სახალისო </h1>";
        }
    }
}
    echo Unilab('unilab');
?>