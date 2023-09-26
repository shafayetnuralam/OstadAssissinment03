<?php
//Task 1: String Manipulation
function modify_text($text) {
    // Convert the string to all lowercase
    $text = strtolower($text);

    // Replace "brown" with "red" in the string
    $text = str_replace("brown", "red", $text);

    // Print the modified text
    echo $text;
}

// Create the string
$text = "The quick brown fox jumps over the lazy dog.";

// Call the function with the text as an argument
modify_text($text);
?>
