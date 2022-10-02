<?php

namespace Php\Package\Tests;

use PHPUnit\Framework\TestCase;

use function Php\Package\Utils\reverseString;

class UtilsTest extends TestCase
{
    public function testReverse(): void
    {
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }
}
