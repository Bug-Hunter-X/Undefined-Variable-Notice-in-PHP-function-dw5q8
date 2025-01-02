```php
function buggyFunction($arr) {
  if (empty($arr)) {
    return []; // Handle empty array
  }

  $result = [];
  foreach ($arr as $key => $value) {
    //The bug is here: using an uninitialized variable $i outside the loop scope
    $result[$i] = $value * 2; 
    $i++;
  }
  return $result;
}

$my_array = [1, 2, 3, 4, 5];
echo json_encode(buggyFunction($my_array));
```