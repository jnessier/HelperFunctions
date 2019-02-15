<?php
/**
 * Insert a value or key/value pair before a specific key in an array. If key doesn't exist, value is prepended
 * to the beginning of the array.
 *
 * @see https://gist.github.com/wpscholar/140236102398ac57d32c
 *
 * @param array  $array Array to insert in to
 * @param string $key   The key to insert before
 * @param array  $new   Array with new key/value pairs
 *
 * @return array
 */
function array_insert_before(array $array, $key, array $new)
{
    $keys = array_keys($array);
    $pos = (int) array_search($key, $keys);

    return array_merge(array_slice($array, 0, $pos), $new, array_slice($array, $pos));
}
