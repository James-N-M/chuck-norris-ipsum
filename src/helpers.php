<?php
use JamesNM\ChuckNorrisIpsum\ChuckNorrisIpsum;
use JamesNM\ChuckNorrisIpsum\ChuckNorrisFactIpsum;
use JamesNM\ChuckNorrisIpsum\ChuckNorrisJokeIpsum;

if (! function_exists('array_values_from_indexes')) {
    function array_values_from_indexes(array $indexes, array $input): array {
        $values = [];

        foreach ($indexes as $index) {
            $values[] = $input[$index];
        }

        return $values;
    }
}

if (! function_exists('shuffle_array')) {
    function shuffle_array(array $input): array {
        shuffle($input);
        return $input;
    }
}

if (! function_exists('chuck_norris')) {
    function chuck_norris(): ChuckNorrisIpsum {
        return new ChuckNorrisIpsum();
    }
}


