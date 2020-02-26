<?php

namespace JamesNM\ChuckNorrisIpsum\Tests;

use JamesNM\ChuckNorrisIpsum\ChuckNorrisFactIpsum;
use PHPUnit\Framework\TestCase;

class ChuckNorrisFactIpsumTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_fact()
    {
        $chuckNorrisFactIpsum = new ChuckNorrisFactIpsum();

        $fact = $chuckNorrisFactIpsum->fact();

        $this->assertIsString($fact);
    }

    /** @test */
    public function it_returns_random_facts()
    {
        $chuckNorrisFactIpsum = new ChuckNorrisFactIpsum(['random fact', 'another random fact']);

        $fact = $chuckNorrisFactIpsum->facts(2);

        $this->assertIsString($fact);
    }
}
