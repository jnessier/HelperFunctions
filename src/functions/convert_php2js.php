<?php

/**
 * Convert PHP variable to outputable Javascript variable.
 *
 * @param mixed $value
 * @param bool  $braces  Disable when braces for array are not needed
 * @param array $exclude List of keys which should be exclude in the associative array
 *
 * @return string
 */
function convert_php2js($value, bool $braces = true, array $exclude = []): string
{
    if (is_int($value) || is_float($value)) {
        return (string) $value;
    } elseif (is_bool($value)) {
        return $value ? 'true' : 'false';
    } elseif (is_assoc($value)) {
        $result = implode(','.PHP_EOL, array_map(function ($value, $key) use ($exclude) {
            if (!in_array($key, $exclude)) {
                return $key.': '.convert_php2js($value);
            }
        }, $value, array_keys($value)));
        if ($braces) {
            return '{'.$result.'}';
        }

        return $result;
    } elseif (is_array($value)) {
        $result = implode(', ', array_map(function ($value) {
            return convert_php2js($value);
        }, $value));
        if ($braces) {
            return '['.$result.']';
        }

        return $result;
    } elseif (0 === mb_strpos($value, 'function(')) {
        return $value;
    }

    return '\''.(string) $value.'\'';
}
