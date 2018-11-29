<?php

/**
 * Normalize class name.
 *
 * @param string $pattern Wildcard pattern
 * @param string $subject the input string
 *
 * @return int|false
 */
function match_wildcard(string $pattern, string $subject)
{
    $regex = str_replace(
        ["\*", "\?"], // wildcard chars
        ['.*', '.'],   // regexp chars
        preg_quote($pattern)
    );

    return preg_match('/^'.$regex.'$/is', $subject);
}
