<?php

/**
 * Exports an array to a parsable string.
 *
 * @param array  $array       Array to export
 * @param string $indentation Indentation space (e.g. "   " or "\s")
 * @param string $level       Recursive level of array export
 *
 * @author Jonathan Nessier <jonathan.nessier@neoflow.ch>
 * @license MIT
 *
 * @return string
 */
function array_export(array $array, string $indentation = '    ', int $level = 0): string
{
    // Start of array
    $content = '['.PHP_EOL;

    $index = 1;
    $numberOfValues = count($array);
    foreach ($array as $key => $value) {
        if (is_object($value) && method_exists($value, '__toString')) {
            $value = (string) $value;
        }

        if (is_scalar($value) || is_array($value)) {
            // Indentation space
            $content .= str_repeat($indentation, $level).$indentation;

            // Set string key
            if (is_string($key)) {
                $content .= '\''.$key.'\''.' => ';
            }

            if (is_object($value)) {
                $content .= (string) $value;
            }

            if (is_array($value)) {
                $content .= array_export($value, $indentation, $level + 1);
            } elseif (is_bool($value)) {
                $content .= ($value ? 'true' : 'false');
            } elseif (is_string($value)) {
                $content .= '\''.$value.'\'';
            } else {
                $content .= $value;
            }

            if ($index++ < $numberOfValues) {
                $content .= ',';
            }
            $content .= PHP_EOL;
        }
    }

    // Indentation space
    $content .= str_repeat($indentation, $level);

    // End of array
    $content .= ']';

    if (0 === $level) {
        $content .= ';';
    }

    return $content;
}
