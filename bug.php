In PHP, a common yet subtle error arises when dealing with array keys that are not strictly numeric.  Consider this example:

```php
<?php
$data = ['a' => 1, 'b' => 2, 'c' => 3];

foreach ($data as $key => $value) {
  echo "Key: $key, Value: $value\n";
}

//Attempting to access using integer index
echo "Value of 'a': " . $data[0] . "\n";
?>
```

While the `foreach` loop correctly iterates through the associative array, attempting to access elements using numeric indices (e.g., `$data[0]`) will lead to unexpected behavior, likely returning `null` or generating a notice.  This is because associative arrays in PHP use string keys, not numeric indices in this particular manner.