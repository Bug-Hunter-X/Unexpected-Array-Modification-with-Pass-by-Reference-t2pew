```php
<?php
function increment(&$var) {
  if (is_numeric($var)) {
    $var++;
  } else if (is_array($var) && isset($var[0])) { // Handle arrays more explicitly
      $var[0]++;
  } else {
    trigger_error('Cannot increment non-numeric variable or array without at least one element.');
  }
}

$num = 5;
increment($num);
echo $num; // Outputs 6

$arr = [1, 2, 3];
increment($arr); //increments only the first element
echo $arr[0]; //Outputs 2

?>
```