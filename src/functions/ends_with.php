<?php

/**
 * Check whether string ends with another string.
 *
 * @see https://stackoverflow.com/a/834355
 *
 * @param string $haystack The string to search in
 * @param string $needle   Search string
 *
 * @return string
 */
function ends_with(string $haystack, string $needle): string
{
    $length = mb_strlen($needle);

    return 0 === $length || (mb_substr($haystack, -$length) === $needle);
}
