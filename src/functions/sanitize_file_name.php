<?php

/**
 * Sanitize file name.
 *
 * @see https://stackoverflow.com/a/2021729/2338829
 *
 * @param string $name       Name of file (or folder)
 * @param bool   $hiddenFile Set FALSE to prevent hide file name (UNIX only)
 *
 * @return string
 */
function sanitize_file_name(string $name, bool $hiddenFile = true): string
{
    $name = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', trim($name));
    if (!$hiddenFile) {
        $name = ltrim($name, '.');
    }
    $name = rtrim($name, '.');

    return mb_ereg_replace("([\.]{2,})", '', $name);
}
