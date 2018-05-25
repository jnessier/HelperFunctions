<?php

/**
 * Generate random string.
 *
 * @param int $length
 *
 * @return string
 */
function random_string(int $length = 6): string
{
    $result = '';
    $chars = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
    $numberOfChars = count($chars) - 1;
    for ($i = 0; $i < $length; ++$i) {
        $index = mt_rand(0, $numberOfChars);
        $result .= $chars[$index];
    }

    return $result;
}
