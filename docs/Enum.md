# Enum

The enum class.

## Example(s)

```php
<?php

use miBadger\Enum\Enum;

/**
 * The example class.
 */
class Example extends Enum
{
	const A = 'a';
	const B = 'b';
}
```

```php
<?php

/**
 * Returns the enum object with the specified name.
 */
$enum = new Example(Example::A);

/**
 * Returns the enum object with the specified name.
 */
$enum = Example::valueOf('A');

/**
 * Returns the ordinal.
 */
$enum->getOrdinal(); // 1

/**
 * Returns the name.
 */
$enum->getName(); // A

/**
 * Returns the value.
 */
$enum->getValue(); // a
```
