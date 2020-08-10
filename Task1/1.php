<?php
function Unilab($n): int {
    for ($i=1; $i<$n; $i++) {
        if ($n % 3 === 0 && $n % 5 === 0) {
            echo "<h1> უნილაბი </h1>";
            echo $i;
        }
        if ($n % 3 === 0 && $n % 5 != 0) {
            echo "<h1> ილიაუნი </h1>";
        }
        if ($n % 5 === 0 && $n % 3 != 0) {
            echo "<h1> php </h1>";
        }
    }
}
echo Unilab(10);
?>