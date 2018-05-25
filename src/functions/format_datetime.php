<?php

use Neoflow\Framework\App;

/**
 * Format DateTime object.
 *
 * @param DateTime $dateTime       Datetime object
 * @param bool     $formatWithTime Set FALSE to format without time
 *
 * @return string
 */
function format_datetime(DateTime $dateTime, bool $formatWithTime = true)
{
    return App::instance()->get('translator')->formatDateTime($dateTime, $formatWithTime);
}
