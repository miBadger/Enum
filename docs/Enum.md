# Enum

The enum class.

## Example(s)

```php
// Enum example
class EnumExample extends Enum
{
	const A = 'a';
	const B = 'b';
}

// Create new enum
$enum = new EnumExample(EnumExample::A);

// Value of A
$enum = EnumExample::valueOf('A');

// Get the ordinal
echo $enum ->getOrdinal(); // 1

// Get the name
echo $enum->getName(); // A

// Get the value
echo $enum->getValue(); // a
```
