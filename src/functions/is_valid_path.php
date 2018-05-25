<?php

/**
 * Validate if path is valid, exists and optional as base path.
 *
 * @param string $path     Path to check
 * @param string $basePath Optional base path
 *
 * @return bool
 */
function is_valid_path(string $path, string $basePath = ''): bool
{
    $realPath = realpath($path);

    if ($realPath && '' !== $basePath) {
        return 0 === mb_strpos($realPath, $basePath);
    }

    return (bool) $realPath;
}
