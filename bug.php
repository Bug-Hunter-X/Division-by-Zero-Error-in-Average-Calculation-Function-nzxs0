```php
function calculate_average($arr) {
  if (empty($arr)) {
    return 0; // Handle empty array
  }
  $sum = array_sum($arr);
  $count = count($arr);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; //This will output 15

$numbers2 = [10,20,30,0, 0];
$average2 = calculate_average($numbers2); //This will throw a division by zero error if not handled
echo "Average: " . $average2;
```