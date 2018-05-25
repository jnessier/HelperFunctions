<?php

/**
 * Check whether string is valid url.
 *
 * @param string $string String
 *
 * @return bool
 */
function is_url(string $string): bool
{
    return (bool) filter_var($string, FILTER_VALIDATE_URL);
}
