<?php
// Task 3: Array Sorting
function sort_grades($grades) {
    // Sort the array in descending order
    arsort($grades);

    // Print the sorted grades as an array
    print_r($grades);
}
// make a array
$grades = [85, 92, 78, 88, 95];

// call the function
sort_grades($grades);
?>