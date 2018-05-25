<?php

/**
 * Check whether string starts with another string.
 *
 * @see https://stackoverflow.com/a/834355
 *
 * @param string $haystack The string to search in
 * @param string $needle   Search string
 *
 * @return string
 */
function starts_with(string $haystack, string $needle): string
{
    $length = mb_strlen($needle);

    return mb_substr($haystack, 0, $length) === $needle;
}
