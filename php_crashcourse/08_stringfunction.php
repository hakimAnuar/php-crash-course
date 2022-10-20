<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello world';

// Get length of a string
echo strlen($string); echo "<br>";

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o'); echo "<br>";

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o'); echo "<br>";

// Reverse a string
echo strrev($string); echo '<br>';

// Convert all characters to lowercase
echo strtolower($string); echo '<br>';

// Convert all characters to uppercase
echo strtoupper($string); echo '<br>';

// Uppercase the first character of each word
echo ucwords($string); echo '<br>';

// String replace
echo str_replace('world', 'Everyone', $string); echo '<br>';

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5); echo '<br>';
echo substr($string, 5); echo '<br>';

// Starts with
if (str_starts_with($string, 'Hello')) {
    echo 'Yes <br>';
}

// Ends with
if (str_ends_with($string, 'ld')) {
echo 'blin <br>';
}

$string2 = '<script> alert(1) </script>';
echo htmlspecialchars($string2); echo '<br>';

printf('%s likes to %s<br>', 'Brad', 'code');
printf('1+1 = %.2f', 1+1);