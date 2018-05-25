<?php

/**
 * Check whether array is associative.
 *
 * @param mixed $array Array
 *
 * @return bool
 */
function is_assoc($array): bool
{
    if (is_array($array)) {
        return count(array_filter(array_keys($array), 'is_string')) > 0;
    }

    return false;
}
