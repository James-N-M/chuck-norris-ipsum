<?php

namespace JamesNM\ChuckNorrisIpsum\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use JamesNM\ChuckNorrisIpsum\ChuckNorrisJokeIpsum;
use PHPUnit\Framework\TestCase;

class ChuckNorrisJokeIpsumTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $mock = new MockHandler([
            new Response(200, [], '{
                "type": "success",
                "value": {
                "id": 101,
                "joke": "Archaeologists unearthed an old english dictionary dating back to the year 1236. It defined &quot;victim&quot; as &quot;one who has encountered Chuck Norris&quot;",
                "categories": [] } }'),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client(['handler' => $handler]);

        $chuckNorrisIpsum = new ChuckNorrisJokeIpsum($client);

        $joke = $chuckNorrisIpsum->joke();

        $this->assertNotEmpty($joke);
    }

    /** @test */
    public function it_returns_random_jokes()
    {
        $mock = new MockHandler([
            new Response(200, [], '{
            "type": "success",
            "value": [
                {
                    "id": 198,
                    "joke": "Do you know why Baskin Robbins only has 31 flavors? Because Chuck Norris doesn\'t like Fudge Ripple.",
                    "categories": []
                },
                {
                    "id": 213,
                    "joke": "How many Chuck Norris\' does it take to change a light bulb? None, Chuck Norris prefers to kill in the dark.",
                    "categories": []
                }
                ]
            }'),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client(['handler' => $handler]);

        $chuckNorrisIpsum = new ChuckNorrisJokeIpsum($client);

        $jokes = $chuckNorrisIpsum->jokes();

        $this->assertIsString($jokes);
    }
}
