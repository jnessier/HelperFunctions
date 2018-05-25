<?php

/**
 * Get the base path (directory after document root).
 *
 * @param string $path
 *
 * @return string
 */
function base_path(string $path): string
{
    $documentRootPath = normalize_path($_SERVER['DOCUMENT_ROOT']);

    return str_replace($documentRootPath, '', normalize_path($path));
}
