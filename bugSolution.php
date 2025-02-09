The solution is to use strict comparison (`===`) instead of loose comparison (`==`). Strict comparison checks both the value and the type of the operands.  This prevents PHP's type juggling from causing unexpected results.  Here's the corrected code:
```php
<?php
$a = "10abc";
$b = 10;

if ($a === $b) {
  echo "Equal";
} else {
  echo "Not equal"; // This will be the output
}
?>
```
By using `===`, we ensure that the comparison is accurate and avoids the pitfalls of type juggling.