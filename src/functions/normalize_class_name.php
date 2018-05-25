<?php

/**
 * Normalize class name.
 *
 * @param string $className Class name
 *
 * @return string
 */
function normalize_class_name(string $className): string
{
    $normalized = str_replace('\\', '/', $className);
    $trimmed = ltrim($normalized, '\\');

    return $trimmed;
}
