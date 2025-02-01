# PHP Division by Zero Bug
This repository demonstrates a common error in PHP: division by zero when calculating an average.  The `calculate_average` function initially lacks robust error handling.  The solution demonstrates how to prevent this error.

## Bug
The `bug.php` file contains a function that calculates the average of an array of numbers.  The function works correctly for most cases but fails if the array contains only zeros.  This leads to a division by zero error, resulting in a runtime crash.

## Solution
The `bugSolution.php` file provides a corrected version of the `calculate_average` function.  It now includes a check to prevent division by zero, returning 0 if the sum of the array elements is 0, which would cause division by zero.