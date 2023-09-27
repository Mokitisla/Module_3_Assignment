<!-- //Array Manipulation -->

<?php
function reEvenNum($numbers) {
    $oddNumbers = [];
    
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $oddNumbers[] = $number;
        }
    }
    
    print_r($oddNumbers);
}

$numbers = range(1, 10);

reEvenNum($numbers);

?>