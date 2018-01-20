# Enum

[![Build Status](https://scrutinizer-ci.com/g/miBadger/miBadger.Enum/badges/build.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Enum/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/miBadger/miBadger.Enum/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Enum/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/miBadger/miBadger.Enum/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Enum/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/d41a26d6-79a9-42cb-a1dd-7db0d45498a3/mini.png)](https://insight.sensiolabs.com/projects/d41a26d6-79a9-42cb-a1dd-7db0d45498a3)

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
