<?php
function StarofDavid($number) {
    $pattern = "";
    $rows = $number - 2;
    $half = floor($rows / 2);

    for ($i = 0; $i < $rows; $i++) {
        $spaces = abs($i - $half) + 1;
        for ($j = 0; $j < $number; $j++) {
            if (($i == $half) && ($j < 1 || $j >= $number - 1) ||
                ($j < $spaces || $j >= $number - $spaces) &&
                !($i == ($half - 1) || $i == ($half + 1))) {
                $pattern .= "_";
            } else {
                $pattern .= "*";
            }
        }
        $pattern .= "<br/>";
    }

    return $pattern .= "<br/>";
}

$number = 7;
if ($number % 2 == 0 || $number < 7){
	echo "Invalid input. The minimum input for this is specifically 7. Please enter a value or an odd number greater than 7."; 
} else {
echo StarofDavid($number);
}
?>