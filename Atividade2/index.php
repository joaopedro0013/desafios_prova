<?php
function fibonacci($num){
    $num1 = 0;
    $num2 = 1;
    $counter = 0;
    while ($counter < $num){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}

function isInFibonacci($num){
    $num1 = 0;
    $num2 = 1;
    while ($num1 < $num){
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
    }
    return $num1 == $num;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    fibonacci($number);
    echo "\n";
    if(isInFibonacci($number)){
        echo "O número ".$number." pertence à sequência de Fibonacci.";
    } else {
        echo "O número ".$number." não pertence à sequência de Fibonacci.";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Verificador de Sequência de Fibonacci</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Número: <input type="number" name="number">
  <input type="submit">
</form>

</body>
</html>
