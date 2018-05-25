<?php

/**
 * Normalize URL.
 *
 * @param string $url URL
 *
 * @return string
 */
function normalize_url(string $url): string
{
    $normalized = preg_replace('/([^:])(\/{2,})/', '$1/', $url);
    $slashed = str_replace('\\', '/', $normalized);
    $trimmed = rtrim($slashed, '/');

    return $trimmed;
}
