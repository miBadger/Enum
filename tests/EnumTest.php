<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\Enum;

use PHPUnit\Framework\TestCase;

/**
 * The enum test class.
 *
 * @since 1.0.0
 */
class EnumTest extends TestCase
{
	/** @var The enum. */
	private $enum;

	public function setUp()
	{
		$this->enum = new EnumTestMock(EnumTestMock::TEST);
	}

	/**
	 * @expectedException UnexpectedValueException
	 */
	public function test__construct()
	{
		new EnumTestMock('');
	}

	public function test__toString()
	{
		$this->assertEquals('TEST', $this->enum->__toString());
	}

	public function testGetOrdinal()
	{
		$this->assertEquals(0, $this->enum->getOrdinal());
	}

	public function testGetName()
	{
		$this->assertEquals('TEST', $this->enum->getName());
	}

	public function testGetValue()
	{
		$this->assertEquals('test', $this->enum->getvalue());
	}

	public function testToArray()
	{
		$this->assertEquals(['TEST' => 'test'], $this->enum->toArray());
	}

	public function testValueOf()
	{
		$this->assertEquals($this->enum, EnumTestMock::valueOf('TEST'));
	}

	/**
	 * @expectedException UnexpectedValueException
	 */
	public function testValueOfFail()
	{
		$this->assertEquals($this->enum, EnumTestMock::valueOf(''));
	}
}

/**
 * The enum test mock class.
 */
class EnumTestMock extends Enum
{
	const TEST = 'test';
}
