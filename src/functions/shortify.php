<?php

/**
 * Shortify string.
 *
 * @param string $string  String
 * @param int    $length  Number of chars before the string will be shortened
 * @param string $postfix Postfix when string is getting shortened
 *
 * @return string
 */
function shortify(string $string, int $length = 50, string $postfix = '...')
{
    $string = trim($string);

    if (($length - mb_strlen($postfix)) > mb_strlen($string)) {
        $postfix = '';
    }

    return mb_substr($string, 0, $length).$postfix;
}
