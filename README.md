# Enum

[![Build Status](https://scrutinizer-ci.com/g/miBadger/miBadger.Enum/badges/build.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Enum/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/miBadger/miBadger.Enum/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Enum/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/miBadger/miBadger.Enum/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Enum/?branch=master)

The Enum Component.

## Example

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
