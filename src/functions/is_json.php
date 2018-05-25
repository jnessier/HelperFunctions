<?php

/**
 * Check whether string is valid JSON encoded data.
 *
 * @param string $string String
 *
 * @return bool
 */
function is_json(string $string): bool
{
    json_decode($string);

    return JSON_ERROR_NONE === json_last_error();
}
