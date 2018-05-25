
<?php

use Neoflow\Framework\App;

/**
 * Format timestamp.
 *
 * @param int  $timestamp      Timestamp
 * @param bool $formatWithTime Set FALSE to format without time
 *
 * @return string
 */
function format_timestamp(int $timestamp, bool $formatWithTime = true)
{
    return App::instance()->get('translator')->formatTimestamp($timestamp, $formatWithTime);
}
