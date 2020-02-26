<?php

namespace JamesNM\ChuckNorrisIpsum;

use GuzzleHttp\Client;

class ChuckNorrisJokeIpsum
{
    const API_ENDPOINT = 'http://api.icndb.com/jokes';

    protected $client;

    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    public function joke(): string
    {
        $response = $this->client->get(self::API_ENDPOINT . '/random');

        $joke = json_decode($response->getBody()->getContents());

        return $joke->value->joke;
    }

    public function jokes(int $count = 2): string
    {
        $response = $this->client->get(self::API_ENDPOINT . '/random' . '/' . $count);

        $jokes = json_decode($response->getBody()->getContents());

        return implode(" ", array_column($jokes->value, 'joke'));
    }
}
