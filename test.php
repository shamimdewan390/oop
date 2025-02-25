<?php



$a = [100, 20, 30];
$max_value = $a[0];

for ($i = 1; $i < count($a); $i++) {
    if ($a[$i] > $max_value) {
        echo $max_value . "\n";
        $max_value = $a[$i];
    }
}

echo "The maximum value in the array is: " . $max_value;