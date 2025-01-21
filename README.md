# PHP Associative Array Access Issue

This repository demonstrates a common, yet subtle, error in PHP when dealing with associative arrays and attempting to access elements using numeric indices after using string keys. The bug showcases how accessing elements with numeric indices after employing string keys will not function as expected, often leading to `null` values.

The `bug.php` file contains the erroneous code, and the `bugSolution.php` file presents a corrected version, highlighting best practices for handling associative arrays in PHP.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the output and note the unexpected `null` value when accessing the array element using a numeric index.