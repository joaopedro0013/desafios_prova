<?php
function nextInSequenceA($num) {
    return $num + 2;
}

function nextInSequenceB($num) {
    return $num * 2;
}

function nextInSequenceC($num) {
    return sqrt($num) + 1;
}

function nextInSequenceD($num) {
    return (sqrt($num) + 2) ** 2;
}

function nextInSequenceE($num1, $num2) {
    return $num1 + $num2;
}

function nextInSequenceF($num) {
    return $num + 1;
}

$sequenceA = 7;
$sequenceB = 64;
$sequenceC = 36;
$sequenceD = 64;
$sequenceE = [5, 8];
$sequenceF = 19;

echo "Próximo número na sequência A: " . nextInSequenceA($sequenceA) . "\n";
echo "Próximo número na sequência B: " . nextInSequenceB($sequenceB) . "\n";
echo "Próximo número na sequência C: " . nextInSequenceC($sequenceC) . "\n";
echo "Próximo número na sequência D: " . nextInSequenceD($sequenceD) . "\n";
echo "Próximo número na sequência E: " . nextInSequenceE($sequenceE[0], $sequenceE[1]) . "\n";
echo "Próximo número na sequência F: " . nextInSequenceF($sequenceF) . "\n";
?>
