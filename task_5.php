<?php
function generatePassword($length) {
    // Define character sets for different types of characters
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Create a combined character set
    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

    // Initialize the password variable
    $password = '';

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($allChars) - 1);
        $password .= $allChars[$randomIndex];
    }

    return $password;
}

// Generate a 12-character password
$generatedPassword = generatePassword(12);

// Print the generated password
echo $generatedPassword;
?>
