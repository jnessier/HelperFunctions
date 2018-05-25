<?php

/**
 * Sanitize file extension.
 *
 * @param string $extension
 *
 * @return string
 */
function sanitize_file_extension(string $extension): string
{
    return mb_ereg_replace('([^a-zA-Z0-9])', '', $extension);
}
