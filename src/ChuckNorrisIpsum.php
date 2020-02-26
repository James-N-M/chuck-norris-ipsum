<?php

namespace JamesNM\ChuckNorrisIpsum;

use Exception;

class ChuckNorrisIpsum
{
    protected $factsIpsum;
    protected $jokesIpsum;
    protected $ipsum;

    public function __construct()
    {
        $this->factsIpsum = new ChuckNorrisFactIpsum();
        $this->jokesIpsum = new ChuckNorrisJokeIpsum();
    }

    public function joke()
    {
        $this->ipsum .= $this->jokesIpsum->joke();

        return $this;
    }

    public function jokes(int $count = 2)
    {
        $this->ipsum .= $this->jokesIpsum->jokes($count);

        return $this;
    }

    public function fact()
    {
        $this->ipsum .= $this->factsIpsum->fact();

        return $this;
    }

    public function facts(int $count = 2)
    {
        $this->ipsum .= $this->factsIpsum->facts($count);

        return $this;
    }

    public function shuffle()
    {
        if (! $this->ipsum) {
            new Exception('Must call ipsum builder functions, fact, facts, joke, jokes');
        }

        $this->ipsum = implode(' ', shuffle_array(explode(' ', $this->ipsum)));

        return $this;
    }

    public function ipsum()
    {
        return $this->ipsum;
    }
}
