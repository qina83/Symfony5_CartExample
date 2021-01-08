<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\aClass;

class aClassUnitTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new aClass();
        $result = $calculator->add(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }
}