<?php

namespace JamesNM\ChuckNorrisIpsum\Tests;

use JamesNM\ChuckNorrisIpsum\ChuckNorrisIpsum;
use PHPUnit\Framework\TestCase;

class ChuckNorrisIpsumTest extends TestCase
{
    /** @test */
    public function it_shuffles_the_ipsum_text()
    {
        $chuckNorrisIpsum = new ChuckNorrisIpsum();

        $chuckNorrisIpsum->joke()->shuffle();

        $this->assertIsString($chuckNorrisIpsum->ipsum());
    }

    /** @test */
    public function it_returns_the_ipsum_text()
    {
        $chuckNorrisIpsum = new ChuckNorrisIpsum();

        $this->assertIsString($chuckNorrisIpsum->facts()->joke()->ipsum());
    }
}
