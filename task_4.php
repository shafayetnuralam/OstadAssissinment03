<?php
// Task 4: Multidimensional Array

function calculate_average_grade($student_grades) {

    foreach ($student_grades as $student => $grades) {
        // Calculate the average grade
        $average = array_sum($grades) / count($grades);

        // Print the average grade
        echo "Average grade for {$student}: {$average}\n";
    }
}

// Create a Multidimensional Array
$student_grades = array(
    'Student 1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student 2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student 3' => array('Math' => 76, 'English' => 84, 'Science' => 89),
);

// Call the function
calculate_average_grade($student_grades);
?>