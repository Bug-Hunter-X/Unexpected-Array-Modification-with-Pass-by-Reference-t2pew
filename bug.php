```php
<?php
function increment(&$var) {
  $var++;
}

$num = 5;
increment($num);
echo $num; // Outputs 6

$arr = [1, 2, 3];
increment($arr);
echo $arr[0]; //Outputs 2

?>
```