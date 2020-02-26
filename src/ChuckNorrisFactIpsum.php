<?php

namespace JamesNM\ChuckNorrisIpsum;

class ChuckNorrisFactIpsum
{
    private $facts;

    public function __construct($facts = null)
    {
        $this->facts = $facts ?: ChuckNorrisFactData::getChuckNorrisFacts();
    }

    public function fact(): string
    {
        return $this->facts[array_rand($this->facts)];
    }

    public function facts(int $count = 2): string
    {
        return implode(' ',
            array_values_from_indexes(array_rand($this->facts, $count), $this->facts));
    }
}
