<?php

/**
 * Check whether an empty or associative array.
 *
 * @param mixed $array Array
 *
 * @return bool
 */
function is_assoc($array): bool
{
    if (is_array($array)) {
        if (count($array) > 0) {
            return count(array_filter(array_keys($array), 'is_string')) > count($array);
        }

        return true;
    }

    return false;
}
