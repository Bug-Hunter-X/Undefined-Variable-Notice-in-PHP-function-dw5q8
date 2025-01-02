```php
function fixedFunction($arr) {
  if (empty($arr)) {
    return []; // Handle empty array
  }

  $result = [];
  $i = 0; // Initialize $i
  foreach ($arr as $key => $value) {
    $result[$i] = $value * 2; 
    $i++;
  }
  return $result;
}

$my_array = [1, 2, 3, 4, 5];
echo json_encode(fixedFunction($my_array));
```