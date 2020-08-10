<?php
function Unilab($s): string{
$k=0;
for ($i=0; $i<strlen($s),$i++){
    if ($s[$i]>64 && $s[$i]<91){
        $k++;
    }
    echo $k+1;

}
echo Unilab('unilab');
?>