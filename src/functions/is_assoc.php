<?php

/**
 * Check whether an empty or associative array.
 *
 * @param mixed $array Array to check
 *
 * @return bool
 */
function is_assoc($array): bool
{
    if (is_array($array)) {
        return count(array_filter(array_keys($array), 'is_string')) === count($array);
    }

    return false;
}
