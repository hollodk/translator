<?php

namespace Translator\Test;

use PHPUnit\Framework\TestCase;

final class Defalult extends TestCase
{
    public function testTypos()
    {
        $translator = new \Translator\Translator(['key' => '1234']);

        // first test, just to make sure we dont have any typos
        $this->assertEquals(1, 1);
    }
}
