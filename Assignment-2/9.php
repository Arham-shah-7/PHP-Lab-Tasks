<?php
function changeByValue($x) {
    $x = $x + 10;
    echo "Inside changeByValue: $x<br>";
}

function changeByReference(&$x) {
    $x = $x + 10;
    echo "Inside changeByReference: $x<br>";
}

$num1 = 5;
$num2 = 5;

echo "Original num1 (before value function): $num1<br>";
changeByValue($num1);
echo "After changeByValue, num1 = $num1<br><br>";

echo "Original num2 (before reference function): $num2<br>";
changeByReference($num2);
echo "After changeByReference, num2 = $num2<br>";
?>
