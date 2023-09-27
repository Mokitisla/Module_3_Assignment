<!-- //Multidimensional Array -->

<?php

$studentGrades = [
    "Student_1" => ["Math" => 85, "English" => 93, "Science" => 88],
    "Student_2" => ["Math" => 88, "English" => 95, "Science" => 90],
    "Student_3" => ["Math" => 75, "English" => 88, "Science" => 72]
];

function letterGrade($averageGrade) {
    if ($averageGrade >= 90) {
        return "A+";
    } elseif ($averageGrade >= 80) {
        return "A";
    } elseif ($averageGrade >= 70) {
        return "A-";
    } elseif ($averageGrade >= 60) {
        return "B";
    } elseif ($averageGrade >= 50) {
        return "C";
    } else {
        return "F";
    }
}

function calAvgGrades($studentGrades) {
    foreach ($studentGrades as $student => $subjects) {
        $totalGrade = array_sum($subjects);
        $averageGrade = $totalGrade / count($subjects);
        $letterGrade = letterGrade($averageGrade);
    
        echo "{$student} average grade: $averageGrade ($letterGrade)</br>";
    }
}

calAvgGrades($studentGrades);

?>
    

