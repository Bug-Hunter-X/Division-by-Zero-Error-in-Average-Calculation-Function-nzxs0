```php
function calculate_average($arr) {
  if (empty($arr)) {
    return 0; // Handle empty array
  }
  $sum = array_sum($arr);
  $count = count($arr);
  if ($sum === 0) {
    return 0; // Handle case where sum is zero
  }
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: 15

$numbers2 = [0, 0, 0];
$average2 = calculate_average($numbers2); // Output: 0
echo "Average: " . $average2;
```