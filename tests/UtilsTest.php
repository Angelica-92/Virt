<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require dirname(__DIR__) . '/src/Utils.php';

final class UtilsTest extends TestCase
{
    public function testGetNameWithValidValue()
    {
        $utils = new Utils();
        $this->assertEquals("Axel", $utils->getName(1981, 6, 16));
    }

    public function testGetNameWithBadValues()
    {
      $utils = new Utils();
      $this->assertNull($utils->getName(1981, 6, 0));
      $this->assertNull($utils->getName(1981, 6, 31));
      $this->assertNull($utils->getName(1981, 0, 16));
      $this->assertNull($utils->getName(1981, 13, 16));
      $this->assertNull($utils->getName(198, 6, 31));
    }
}
