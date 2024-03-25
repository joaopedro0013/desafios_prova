<?php
function reverseString($str) {
    $reversed = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

$string = "Olá, pessoal!"; 
echo "String original: " . $string . "\n";
echo "String invertida: " . reverseString($string) . "\n";
?>
