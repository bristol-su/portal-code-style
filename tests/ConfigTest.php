<?php

namespace BristolSU\CodeStyle\Tests\PhpCs;

use BristolSU\CodeStyle\PhpCs\Config;

class ConfigTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function it_can_be_created(){
        $config = new Config('test-name');
        $this->assertInstanceOf(Config::class, $config);
    }

}
