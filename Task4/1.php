<?php
function Unilab($s): string
{
    $k = $j = $p = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] > 96 && $s[$i] < 123) {
            $k++;
        }
        if ($s[$i] > 64 && $s[$i] < 91) {
            $j++;
        }
        if (( $s[$i] > 32 && $s[$i] < 65 ) || ( $s[$i] > 90 && $s[$i] < 97 ) || ( $s[$i] > 122 && $s[$i] < 127 )) {
            $p++;
        }
        if ($k > 0 && $j > 0 && $p > 0) {
            echo '1';
        } else {
            echo '0';
        }
    }
}
 echo Unilab('unilab');
?>