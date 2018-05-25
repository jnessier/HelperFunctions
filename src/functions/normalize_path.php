<?php

/**
 * Normalize path.
 *
 * @param string $path     Path
 * @param bool   $relative Set TRUE when path is relative
 *
 * @return string
 */
function normalize_path(string $path, bool $relative = false): string
{
    $path = preg_replace('/[\\|\/|\\\\|\/\/]+/', DIRECTORY_SEPARATOR, $path);
    if ($relative) {
        $path = ltrim($path, '.'.DIRECTORY_SEPARATOR);
        $path = ltrim($path, '/');
        $path = ltrim($path, '\\');
    }

    // $trimmed = rtrim($normalized, DIRECTORY_SEPARATOR);

    return $path;
}
