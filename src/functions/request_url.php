<?php

/**
 * Get current request URL by $_SERVER params.
 *
 * @param bool $path        Set FALSE to get URL without URL path and query params
 * @param bool $queryParams Set FALSE to get URL without query params
 *
 * @return string
 */
function request_url(bool $path = true, bool $queryParams = true): string
{
    $url = 'http://';
    if (isset($_SERVER['HTTPS'])) {
        $url = 'https://';
    }

    $url .= $_SERVER['HTTP_HOST'];

    if ((isset($_SERVER['HTTPS']) && '443' !== $_SERVER['SERVER_PORT']) || ((!isset($_SERVER['HTTPS']) || 'off' === $_SERVER['HTTPS']) && '80' !== $_SERVER['SERVER_PORT'])) {
        $url .= ':'.$_SERVER['SERVER_PORT'];
    }

    if ($path) {
        if (!$queryParams) {
            $url .= strtok($_SERVER['REQUEST_URI'], '?');
        } else {
            $url .= $_SERVER['REQUEST_URI'];
        }
    }

    return $url;
}
