<!-- //Array Sorting  -->

<?php

$grades = [85, 92, 78, 88, 95];
function descendingGrades($grades) {
    rsort($grades);
    print_r($grades);
}


descendingGrades($grades);

?>