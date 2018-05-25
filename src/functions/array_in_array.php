<?php

/**
 * Check whether array is in array.
 *
 * @param array $needle   Array to find
 * @param array $haystack Array to search in
 *
 * @return bool
 */
function array_in_array(array $needle, array $haystack): bool
{
    $difference = array_diff($needle, $haystack);

    return 0 === count($difference);
}
