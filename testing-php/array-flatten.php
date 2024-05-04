<?php

require_once 'vendor/autoload.php';

/**
 * How can you modify the ArrayFlattener::flatten method
 * so that it can take a multidimensional array and flatten
 * it into a single level array whilst preserving key names
 * like in the $before and $after examples.
 *
 * !!Warning - this will only work IF all key names are unique!!
 *
 * Course: https://www.garyclarke.tech/p/php-complete-testing-bundle
 * Course: https://www.garyclarke.tech/p/learn-object-oriented-php
 */
class ArrayFlattener
{
    public static function flatten(array $array): array
    {
        return iterator_to_array(new RecursiveIteratorIterator(new RecursiveArrayIterator($array)));
    }
}

$before = [
    'key_one' => 1,
    'key_two' => 2,
    'nested_array' => [
        'key_three' => 3,
        'key_four' => 4
    ]
];

$after = ArrayFlattener::flatten($before);

dd($after);

