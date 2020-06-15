<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\Enum;

/**
 * The enum class.
 *
 * @see http://tools.ietf.org/html/rfc5424
 * @since 1.0.0
 */
class Enum
{
	/** @var int|double|string|boolean The value. */
	private $value;

	/**
	 * Construct a enum with the given value.
	 *
	 * @param int|double|string|boolean $value
	 * @throws \UnexpectedValueException
	 */
	public function __construct($value)
	{
		if (!in_array($value, static::toArray())) {
			throw new \UnexpectedValueException($value . ' is not a valid enum value.');
		}

		$this->value = $value;
	}

	/**
	 * Returns the string representation of the enum object.
	 *
	 * @return string the string representation of the enum object.
	 */
	public function __toString()
	{
		return $this->getName();
	}

	/**
	 * Returns the ordinal.
	 *
	 * @return int the ordinal.
	 */
	public function getOrdinal()
	{
		$ordinal = array_search($this->value, array_values(static::toArray()));

		return $ordinal !== false ? $ordinal : -1;
	}

	/**
	 * Returns the name.
	 *
	 * @return string the name.
	 */
	public function getName()
	{
		$name = array_search($this->value, static::toArray());

		return $name !== false ? $name : '';
	}

	/**
	 * Returns the value.
	 *
	 * @return mixed the value;
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * Returns the enum objects.
	 *
	 * @return array<string,integer|double|string|boolean> the enum objects.
	 */
	public static function toArray()
	{
		return (new \ReflectionClass(\get_called_class()))->getConstants();
	}

	/**
	 * Returns the enum object with the specified name.
	 *
	 * @param string $name
	 * @return Enum the enum object with the specified name.
	 * @throws \UnexpectedValueException
	 */
	public static function valueOf($name)
	{
		if (!defined('static::' . $name)) {
			throw new \UnexpectedValueException($name . ' is not a valid enum name.');
		}

		return new static(constant('static::' . $name));
	}
}
